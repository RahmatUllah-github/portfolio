<x-mail::message>
# Contact Us Mail from {{ $name }}

Subject: {{ $subject }}

</br>

Email: {{ $email }}

</br></br>

{{ $message }}



Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
