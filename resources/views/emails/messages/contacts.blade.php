@component('mail::message')
<ul>
	<li>{{$email}}</li>
	<li>{{$tel}}</li>
</ul>
Bonjour! je suis M/Mme/Mlle <span>{{$nom}}</span>
<p>{{$message}}</p>

@component('mail::button', ['url' => '','color' => 'success'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
