<?php $title = 'Comments'?>
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
                        Comments
                    </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Admin panel</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Comments</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    @include('alert')
                    <div class="col-12 col-xl-12">
                        <div class="card">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th style="width:25%">Name</th>
                                    <th style="width:25%">Email</th>
                                    <th style="width:25%">Text</th>
                                    <th style="width:20%">Date</th>
                                    <th style="width:5%">Delete</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($comments as $comment)
                                    <tr>
                                        <td>{{$comment->name}}</td>
                                        <td>{{$comment->author}}</td>
                                        <td>{{$comment->text}}</td>
                                        <td>{{$comment->created_at}}</td>

                                        <form action="{{ route('admin.comments.destroy', $comment->id) }}" method="post">
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
                </div>

            </div>
        </main>
        @include('admin.parts.footer')
    </div>
</div>

<script src="{{ asset('admin/js/app.js?v='.config('app.version')) }}"></script>

</body>

</html>
