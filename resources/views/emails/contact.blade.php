@component('mail::message')
<h1>Message from website</h1>
<p>Name: {{$data['name']}}</p>
<p>email: {{$data['email']}}</p>
<p>Message: {{$data['message']}}</p>

@endcomponent


