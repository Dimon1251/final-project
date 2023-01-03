
<?php $title = 'Edit Category'?>
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
                        <form action="{{ route('admin.categories.update', $category->id) }}" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name ="name" class="form-control" value="{{$category->name}}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="required">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
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
