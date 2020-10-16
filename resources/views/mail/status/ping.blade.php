@component('mail::message')

# Monitoramento de IP/Serviço

Em nosso monitoramento, detectamos que o IP: consta offiline há 1 Minuto.

The body of your message.

@component('mail::button', ['url' => 'https://status.offboard.com.br'])
Acessar
@endcomponent

Atc,<br>
OFFBOARD Tecnologia
{{ config('app.name') }}
@endcomponent
