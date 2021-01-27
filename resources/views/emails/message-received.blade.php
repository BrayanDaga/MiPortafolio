@component('mail::message')
<p>Recibiste un mensaje de : {{ $msg['name'] }} - {{ $msg['email'] }}</p>
    <p><strong>Asunto:</strong> {{ $subject }}  </p>
    <p><strong>Contenido:</strong> {{ $msg['content'] }} </p>
</p>
@component('mail::button', ['url' => 'http://portafolio.test/'])
Ir a la pagina
@endcomponent

Gravias,<br>
{{ config('app.name') }}
@endcomponent
