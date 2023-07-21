<x-mail::message>
    Product has been successfully added to favorites

    {{ $product->name }}

<x-mail::button :url="'http://localhost:49000/favorite'">
View Favorites
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
