

@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
           Gulab Fabrics Admin
        @endcomponent
    @endslot

    {{-- Body --}}
# Hello {{ $contact->name }}

We have received a new contact mail.<br />
**Name :** {{ $contact['name'] }}<br />
**Email :** {{ $contact['email'] }}<br />
**Phone :** {{ $contact['phone'] }}<br />
**Subject :** {{ $contact['subject'] }}<br />
**Message :** {{ $contact['message'] }}


Thank you for Contacting Gulab Fabrics! We will revert you shortly.

Best regards,

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
           &copy; {{date('Y')}} All Copy right received
        @endcomponent
    @endslot
@endcomponent
