<span>Поступила новая заявка с сайта - </span><br />

<span>Имя: </span>{{ $data['name'] ?? '-' }}<br />
<span>Email: </span><b>{{ $data['email'] ?? '-' }}</b><br />
<span>Телефон: </span><b>{{ $data['phone'] ?? '-' }}</b><br />
<span>Форма: </span><b>{{ $data['form_name'] ?? '-' }}</b><br />
<span>Комментарий: </span><pre>{{ $data['comment'] ?? '-' }}</pre><br />
{{--@php--}}
{{--    $data = array_except($data, ['name', 'email', 'phone', '_token', 'form_name', 'comment'])--}}
{{--@endphp--}}
{{--<span>Сводная информация: </span><pre>--}}
{{--    {{ json_encode($data, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE) }}--}}
{{--</pre><br />--}}

