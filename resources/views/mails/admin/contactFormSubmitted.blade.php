@component('mail::message')
# Nieuwe reactie

Beste,

Een bezoeker liet zijn gegevens achter op [{{ Request::getHost() }}]({{ url('/') }}).

@component('mail::panel')
Naam: {{ $formResponse->name }} <br>
Telefoon: {{ $formResponse->telephone }} <br>
Email: {{ $formResponse->email }} <br>
Adres: {{ $formResponse->address }} <br>
Postcode: {{ $formResponse->postal }} <br>
Stad: {{ $formResponse->city }} <br>
Opmerkingen: {{ $formResponse->remarks }} <br>
Verwijzer: {{ $formResponse->referer ?? 'Onbekend' }} <br>
@endcomponent

@slot('subcopy')
Bekijk alle reacties op [{{ config('app.url') }}]({{ action('Back\FormResponsesController@showDownloadButton') }}).
@endslot
@endcomponent


