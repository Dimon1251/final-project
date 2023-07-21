@foreach($products as $product)
    <tr class="odd">
        <td class="dtr-control">{{ $product->name }}</td>
        <td class="">$ {{ $product->price }}.00</td>
        <td>{{ $product->category }}</td>
        <td class="">{{ $product->visibility }}</td>
        <td class="sorting_1">{{ $product->featured }}</td>
        <td>
            <a href="{{ route('admin.comments.index', $product->id) }}"><i class="align-middle fas fa-fw fa-comment"></i></a>
            <a href="{{ route('admin.products.edit', $product->id) }}"><i class="align-middle fas fa-fw fa-edit"></i></a>
            <a data-id="{{ $product->id }}" id="product-delete" href="javascript:void(0)"><i class="product-delete align-middle fas fa-fw fa-trash"></i></a>
        </td>
    </tr>
@endforeach

