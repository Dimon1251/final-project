
<?php $title = 'Create Brand'?>
@include('admin.parts.head')

<body>

<div class="wrapper">
    @include('admin.parts.sidebar')
    <div class="main">
        @include('admin.parts.header')
        <main class="content">
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Edit form</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.brands.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name ="name" class="form-control" placeholder="Enter name brand">
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
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
