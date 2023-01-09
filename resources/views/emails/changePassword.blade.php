<x-mail::message>

    Password changed successfully

Dear, {{ $user->name }}, your password has been changed successfully

<x-mail::button :url="'http://localhost:49000/account'">
View profile
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
