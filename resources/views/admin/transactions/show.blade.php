<?php $title = 'Transactions items'?>
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
                        Transactions items
                    </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Admin panel</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Transactions items</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="card">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th style="width:20%">Stripe id</th>
                                    <th style="width:20%">Name</th>
                                    <th style="width:20%">Price</th>
                                    <th style="width:20%">Quantity</th>
                                    <th style="width:20%">Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($transactions_item as $transaction)
                                    <tr>
                                        <td>{{ $transaction->stripe_id }}</td>
                                        <td>{{ ($products_all->where('id', $transaction->product_id))->value('name') }}</td>
                                        <td>{{ ($products_all->where('id', $transaction->product_id))->value('price') }}</td>
                                        <td>{{ $transaction->quantity }}</td>
                                        <td>{{ $transaction->created_at }}</td>
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

</body>

</html>
