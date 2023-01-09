<x-mail::message>

    Product has been successfully added to cart

    {{ $product->name }}

    <x-mail::button :url="'http://localhost:49000/cart'">
        View cart
    </x-mail::button>

    Thanks,<br>
    Blackwood
</x-mail::message>

