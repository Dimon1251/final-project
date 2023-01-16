<?php $title = 'Brand'?>
@include('admin.parts.head')

<body>
<!--<div class="splash active">
    <div class="splash-icon"></div>
</div>-->

<div class="wrapper">
    @include('admin.parts.sidebar')
    <div class="main">
        @include('admin.parts.header')
        <main class="content">
            <div class="container-fluid">
                <div class="header">
                    <h1 class="header-title">
                        Brands
                    </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Admin panel</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Brands</li>
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
                                                    <th class="sorting" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 900px;" aria-label="Name: activate to sort column ascending">Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 30px;" aria-label="Position: activate to sort column ascending">Visibility</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 30px;" aria-label="Office: activate to sort column ascending">Edit</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 30px;" aria-label="Age: activate to sort column ascending">Hide</th>
                                                    <th class="sorting sorting_desc" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 30px;" aria-label="Start date: activate to sort column ascending" aria-sort="descending">Unhide</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 30px;" aria-label="Salary: activate to sort column ascending">Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($brands as $brand)
                                                    <tr class="odd">
                                                        <td class="dtr-control">{{ $brand->name }}</td>
                                                        <td class="">{{ $brand->visibility }}</td>
                                                        <td>
                                                            <a href="{{ route('admin.brands.edit', $brand->id) }}"><i class="align-middle fas fa-fw fa-edit"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('admin.brands.hide', $brand->id) }}"><i class="align-middle fas fa-fw fa-eye-slash"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('admin.brands.unhide', $brand->id) }}"><i class="align-middle fas fa-fw fa-eye"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('admin.brands.destroy', $brand->id) }}"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <form action="{{ route('admin.brands.create') }}" method="get">
                                    @csrf
                                    <td class="table-action align-content-center">
                                        <button type="submit" class="btn btn-primary">Add brand</button>
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

</svg>-->
<script src="{{ asset('admin/js/app.js?v='.config('app.version')) }}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Datatables Responsive
        $("#datatables-reponsive").DataTable({
            responsive: true
        });
    });

</script>

</body>

</html>
