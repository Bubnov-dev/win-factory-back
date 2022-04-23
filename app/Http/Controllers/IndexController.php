<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use GuzzleHttp\Client as GuzzleClient;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class IndexController
{
    public function index()
    {
        return view('index');
    }

    public function agreement()
    {
        return view('agree');
    }

    public function aluminium()
    {
        return view('aluminium');
    }

    public function balconies()
    {
        return view('balconies');
    }

    public function doors()
    {
        return view('doors');
    }

    public function window()
    {
        return view('window');
    }


    public function request(Request $request)
    {
        \Log::info('Получена заявка - ' . json_encode($request->all(), JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE));


        try {
            $transport = new \Swift_SmtpTransport(
                env('REQUEST_MAIL_SMTP'),
                env('REQUEST_MAIL_PORT'),
                env('REQUEST_MAIL_ENCRYPTION')
            );
            $transport
                ->setUsername(env('REQUEST_MAIL_USERNAME'))
                ->setPassword(env('REQUEST_MAIL_PASSWORD'));
            $mailer = new \Swift_Mailer($transport);
            \Mail::setSwiftMailer($mailer);

            \Mail::send('email', ['data' => $request->all()], function ($message) {
                $message->from(env('REQUEST_MAIL_USERNAME'), 'Заявка с сайта приморские-окна.рф');
                $message->to(env('REQUEST_MAIL', ''));
                $message->subject('Заявка с сайта');
            });
        } catch (\Exception $ex) {
            \Log::error('Ошибка отправки заявки - ' . $ex->getMessage());
        }

        if (env('BITRIX_REST_URL')) {
            $this->makeBitrixRequest($request);
        }

        return new JsonResponse(['result' => 'ok']);
    }

    protected function makeBitrixRequest(Request $request)
    {
        \Cache::increment('okna_request_id');

        $requestId = \Cache::get('okna_request_id');

        $data = $request->all();

        $utm = \Cookie::has('utm') ? json_decode(\Cookie::get('utm'), true) : false;

        try {
            $worktime = (Carbon::now()->hour >= 9 && Carbon::now()->hour <= 19) ? 1 : 2;

            $client = new GuzzleClient();

            $query = [
                'LOGIN'             => env('BITRIX_LOGIN'),
                'PASSWORD'          => env('BITRIX_PASSWORD'),
                'TITLE'             => 'Оконный Завод',
                'NAME'              => $data['name'] ?? '-',
                'EMAIL' => [
                    "n0" => [
                        "VALUE" => $data['email'] ?? '',
                        "VALUE_TYPE" => "WORK",
                    ],
                ],
                'PHONE' => [
                    "n0" => [
                        "VALUE" => $data['phone'] ?? '',
                        "VALUE_TYPE" => "WORK",
                    ],
                ],
                #'UF_CRM_1490291931' => $userRequest->city,
                'UF_CRM_1490439931' => 'Оконный Завод',
                'UF_CRM_1559052504' => $worktime,
                'STATUS_ID'         => 'NEW',
                'SOURCE_ID'         => 'WEB',
                'CURRENCY_ID'       => 'RUB',
                'PRODUCT_ID'        => 'OTHER',
                'COMMENTS'          => $data['comment'] ?? '-',
                'UF_CRM_1613823838' => $requestId % 2,  // код менеджера
                'UF_CRM_1604322599' => 'Оконный Завод', // источник лида
                'UF_CRM_1612317393' => 'окна'
            ];

            if ($utm) {
                $query['UTM_SOURCE'] = $utm['utm_source'] ?? '';
                //$query['UF_CRM_1573727055'] = $utm['utm_domain'] ?? '';
                $query['UTM_MEDIUM'] = $utm['utm_medium'] ?? '';
                $query['UTM_CAMPAIGN'] = $utm['utm_campaign'] ?? '';
                $query['UTM_TERM'] = $utm['utm_term'] ?? '';
                $query['UTM_CONTENT'] = $utm['utm_content'] ?? '';
                $query['FULL_HISTORY'] = $utm['date'] ?? '';
            }

            $response = $client->request('GET', env('BITRIX_REST_URL'), [
                'query' => [
                    'fields' => $query,
                    'params' => ["REGISTER_SONET_EVENT" => "Y"],
                ]
            ]);

            $result = $response->getBody()->getContents();

            \Log::info("Отправлена заявка в битрикс - " . $result . ' ' . var_export($query, true));

            if ( !preg_match('/error\':\'201/', $result)) {
                throw new \Exception('bitrix error - ' . $result);
            }

        } catch (\Exception $ex) {
            \Log::error('Не удалось создать лид в bitrix24 о заявке #' . ($data['phone'] ?? '-') . " - " . $ex->getMessage());
        }
    }
}
