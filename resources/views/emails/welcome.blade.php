<x-mail::message>
    Account Registered Successfully

Dear, {{ $user->name }}, Thank you for choosing our store!

<x-mail::button :url="'http://localhost:49000'">
View store
</x-mail::button>

Thanks,<br>
 Blackwood
</x-mail::message>
