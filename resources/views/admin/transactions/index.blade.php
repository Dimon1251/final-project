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

</body>

</html>
