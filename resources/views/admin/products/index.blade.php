<?php $title = 'Products'?>
@include('admin.parts.head')


<body>

<div class="wrapper">
    @include('admin.parts.sidebar')

    <div class="main">
        @include('admin.parts.header')
        <main class="content">
            <div class="container-fluid">
                <div class="header">
                    <h1 class="header-title">
                        Products
                    </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Admin panel</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Products</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="card">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th style="width:20%">Name</th>
                                    <th style="width:20%">Price</th>
                                    <th style="width:20%">Category</th>
                                    <th style="width:20%">visibility</th>
                                    <th style="width:20%">featured</th>

                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->category}}</td>
                                        <td>{{$product->visibility}}</td>
                                        <td>{{$product->featured}}</td>

                                        <form action="{{ route('admin.products.edit', $product->id) }}" method="get">
                                            @csrf
                                            <td class="table-action">
                                                <button type="submit" ><i class="align-middle fas fa-fw fa-edit"></i></button>
                                            </td>
                                        </form>
                                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <td class="table-action">
                                                <button type="submit" ><i class="align-middle fas fa-fw fa-trash"></i></button>
                                            </td>
                                        </form>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <form action="{{ route('admin.products.create') }}" method="post">
                        @csrf
                        <td class="table-action align-content-center">
                            <button type="submit" class="btn btn-primary">Add products</button>
                        </td>
                    </form>

                </div>

            </div>
        </main>
        @include('admin.parts.footer')
    </div>
</div>

<script src="{{ asset('admin/js/app.js?v='.config('app.version')) }}"></script>

</body>

</html>
