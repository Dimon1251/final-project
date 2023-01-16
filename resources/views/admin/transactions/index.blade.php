<?php $title = 'Transactions'?>
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
                        Transactions
                    </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Admin panel</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Transactions</li>
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
                                                    <th class="sorting" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 300px;" aria-label="Name: activate to sort column ascending">User email</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 100px;" aria-label="Position: activate to sort column ascending">Price</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 100px;" aria-label="Office: activate to sort column ascending">Stripe id</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 50px;" aria-label="Age: activate to sort column ascending">Paid</th>
                                                    <th class="sorting sorting_desc" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 50px;" aria-label="Start date: activate to sort column ascending" aria-sort="descending">Date</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables-reponsive" rowspan="1" colspan="1" style="width: 50px;" aria-label="Salary: activate to sort column ascending">Info</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($transactions as $transaction)
                                                    <tr class="odd">
                                                        <td class="dtr-control">{{ $transaction->user_email }}</td>
                                                        <td class="">$ {{ $transaction->price }}.00</td>
                                                        <td>{{ $transaction->stripe_id }}</td>
                                                        <td class="">{{ $transaction->paid }}</td>
                                                        <td class="sorting_1">{{ $transaction->created_at }}</td>
                                                        <td>
                                                            <a href="{{ route('admin.transactions.show', $transaction->stripe_id) }}"><i class="align-middle fas fa-fw fa-info"></i></a>
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







                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="card">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th style="width:20%">User email</th>
                                    <th style="width:20%">Price</th>
                                    <th style="width:20%">Stripe id</th>
                                    <th style="width:20%">paid</th>
                                    <th style="width:20%">data</th>

                                    <th>Info</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($transactions as $transaction)
                                    <tr>
                                        <td>{{$transaction->user_email}}</td>
                                        <td>{{$transaction->price}}</td>
                                        <td>{{$transaction->stripe_id}}</td>
                                        <td>{{$transaction->paid}}</td>
                                        <td>{{$transaction->created_at}}</td>

                                        <form action="{{ route('admin.transactions.show', $transaction->stripe_id) }}" method="get">
                                            @csrf
                                            <td class="table-action">
                                                <button type="submit" ><i class="align-middle fas fa-fw fa-info"></i></button>
                                            </td>
                                        </form>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('admin.parts.footer')
    </div>
</div>

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
