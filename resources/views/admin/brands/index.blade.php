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
                        Users
                    </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Admin panel</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Brand</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="card">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th style="width:40%">Name</th>
                                    <th style="width:40%">Visibility</th>

                                    <th>Edit</th>
                                    <th>Hide</th>
                                    <th>Unhide</th>
                                    <th>Delete</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($brands as $brand)
                                    <tr>
                                        <td>{{$brand->name}}</td>
                                        <td>{{$brand->visibility}}</td>
                                        <form action="{{ route('admin.brands.edit', $brand->id) }}" method="post">
                                            @csrf
                                            <td class="table-action">
                                                <button type="submit" ><i class="align-middle fas fa-fw fa-edit"></i></button>
                                            </td>
                                        </form>
                                        <form action="{{ route('admin.brands.hide', $brand->id) }}" method="post">
                                            @csrf
                                            <td class="table-action">
                                                <button type="submit" ><i class="align-middle fas fa-fw fa-eye-slash"></i></button>
                                            </td>
                                        </form>
                                        <form action="{{ route('admin.brands.unhide', $brand->id) }}" method="post">
                                            @csrf
                                            <td class="table-action">
                                                <button type="submit" ><i class="align-middle fas fa-fw fa-eye"></i></button>
                                            </td>
                                        </form>
                                        <form action="{{ route('admin.brands.destroy', $brand->id) }}" method="post">
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

                    <form action="{{ route('admin.brands.create') }}" method="post">
                        @csrf
                        <td class="table-action align-content-center">
                            <button type="submit" class="btn btn-primary">Add brand</button>
                        </td>
                    </form>
                </div>

            </div>
        </main>
        @include('admin.parts.footer')
    </div>
</div>

</svg>-->
<script src="{{ asset('admin/js/app.js?v='.config('app.version')) }}"></script>

</body>

</html>
