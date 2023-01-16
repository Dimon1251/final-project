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
                            <div class="card-body">
                                <div id="datatables-reponsive_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="datatables-reponsive" class="table table-striped dataTable no-footer dtr-inline" style="width: 100%;" aria-describedby="datatables-reponsive_info">
                                                <thead>
                                                    <tr>
                                                        <th class="sorting" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 300px;" aria-label="Name: activate to sort column ascending">Name</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 100px;" aria-label="Position: activate to sort column ascending">Price</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 100px;" aria-label="Office: activate to sort column ascending">Category</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 50px;" aria-label="Age: activate to sort column ascending">Visibility</th>
                                                        <th class="sorting sorting_desc" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 50px;" aria-label="Start date: activate to sort column ascending" aria-sort="descending">Featured</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 50px;" aria-label="Salary: activate to sort column ascending">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
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
                                                                <a href="{{ route('admin.products.destroy', $product->id) }}"><i class="product-delete align-middle fas fa-fw fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <form action="{{ route('admin.products.create') }}" method="get">
                                    @csrf
                                    <td class="table-action align-content-center">
                                        <button type="submit" class="btn btn-primary">Add products</button>
                                    </td>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('admin.parts.footer')
    </div>
</div>

<script src="{{ asset('admin/js/app.js?v='.config('app.version')) }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.16/dist/sweetalert2.all.min.js"></script>


</body>

</html>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Datatables Responsive
        $("#datatables-reponsive").DataTable({
            responsive: true
        });
    });

</script>
