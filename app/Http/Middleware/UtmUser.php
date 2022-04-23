<?php

namespace App\Http\Middleware;

use App\Models\GeoIp\IP;
use Carbon\Carbon;
use Closure;

class UtmUser
{
    /**
     * сохраняем информацию о переходе с utm метками
     * @param $request
     * @param Closure $next
     * @param null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($request->has('utm_source') && \Cookie::get('utm') === null) {
            \Cookie::queue(\Cookie::make('utm', json_encode([
                'date'         => Carbon::now()->format('d.m.Y H:i:s'),
                'utm_source'   => $request->get('utm_source'),
                'utm_domain'   => $request->get('utm_domain'),
                'utm_medium'   => $request->get('utm_medium'),
                'utm_campaign' => $request->get('utm_campaign'),
                'utm_term'     => $request->get('utm_term'),
                'utm_content'  => $request->get('utm_content'),
            ]), Carbon::now()->addYear()->diffInMinutes(Carbon::now())));
        }

        return $next($request);
    }
}
