{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}

{{-- @component('mail::message')
# Nouveau message de contact

<strong>Nom:</strong> {{ $name }}<br>
<strong>Email:</strong> {{ $email }}<br>
<strong>Subject:</strong> {{ $subject }}<br>
<strong>Message:</strong> {{ $message }}

@endcomponent --}}

@component('mail::message')
{{-- Header --}}
<div style="background-color: #1089ff; padding: 20px;">
    {{-- Logo --}}
    <img src="{{ asset('path/to/your/logo.png') }}" alt="Logo" width="120" height="60">
</div>

{{-- Body --}}
# Nouveau message de contact

<strong>Nom:</strong> {{ $name }}<br>
<strong>Email:</strong> {{ $email }}<br>
<strong>Sujet:</strong> {{ $subject }}<br>
<strong>Message:</strong> {{ $message }}

{{-- Footer --}}
@slot('footer')
    @component('mail::footer')
        © {{ date('Y') }} Votre Entreprise. Tous droits réservés.
    @endcomponent
@endslot
@endcomponent

