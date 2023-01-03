<?php $title = 'Product create'?>
@include('admin.parts.head')

<body>

<div class="wrapper">
    @include('admin.parts.sidebar')
    <div class="main">
        @include('admin.parts.head')
        <main class="content">
            <div class="container-fluid">

                <div class="header">
                    <h1 class="header-title">
                        Product create
                    </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard-default.html">Admin panel</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product create</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data" >
                                    @csrf
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter the name"><br>
                                    <label class="form-label">Description</label>
                                    <textarea rows="10" class="form-control" name="description" placeholder="Enter the description"></textarea><br>
                                    <label class="form-label">Price</label>
                                    <input type="number" class="form-control" name="price" placeholder="Enter the price"><br>
                                    <div class="mb-3">
                                        <label class="form-label" for="toastr-duration">Category</label>
                                        <select class="form-select form-control" name="category">
                                            @foreach($categories as $category)
                                                <option value="{{$category->name}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="toastr-duration">Brand</label>
                                        <select class="form-select form-control" name="brand">
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->name}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
<!--                                    <div class="mb-3">
                                        <label class="form-label" for="toastr-duration">Color</label>
                                        <select class="form-select form-control" name="color">
                                            <option value="yellow">yellow</option>
                                            <option value="turquoise">turquoise</option>
                                            <option value="pink">pink</option>
                                            <option value="sapphire">sapphire</option>
                                            <option value="gold">gold</option>
                                            <option value="mint">mint</option>
                                            <option value="black">black</option>
                                        </select>
                                    </div>-->
                                    <div class="mb-3">
                                        <label class="form-label">Image links</label>
                                        <table class="table table-bordered" id="linksTable">
                                            <tr>
                                                <td><input type="file" name="links[link0]" class="form-control name_list" /></td>
                                            </tr>
                                        </table>
                                        <button type="button" name="add" id="add" class="btn btn-outline-primary">Another links</button>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input" name="featured" checked="">
                                            <span class="form-check-label">Featured</span>
                                        </label>
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input" name="visibility" checked="">
                                            <span class="form-check-label">Visible</span>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg">Create</button>
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

<!--<svg width="0" height="0" style="position:absolute">
    <defs>
        <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
            <path
                d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
            </path>
        </symbol>
    </defs>
</svg>-->
<script src="{{ asset('admin/js/app.js?v='.config('app.version')) }}"></script>

<script>
    // Toastr
    document.addEventListener("DOMContentLoaded", function() {
        var currentMessageIndex = -1;

        function getMessage() {
            var messages = [
                "My name is Inigo Montoya. You killed my father. Prepare to die!",
                "Are you the six fingered man?",
                "Inconceivable!",
                "I do not think that means what you think it means.",
                "Have fun storming the castle!",
            ];
            currentMessageIndex++;
            if (currentMessageIndex === messages.length) {
                currentMessageIndex = 0;
            }
            return messages[currentMessageIndex];
        };
        $("#toastr-show").click(function() {
            var message = $("#toastr-message").val() || getMessage();
            var title = $("#toastr-title").val() || "";
            var type = $("#toastr-type").val();
            toastr[type](message, title, {
                positionClass: $("input[name=\"toastr-position\"]:checked").val(),
                closeButton: $("#toastr-close").prop("checked"),
                progressBar: $("#toastr-progress-bar").prop("checked"),
                newestOnTop: $("#toastr-newest-on-top").prop("checked"),
                rtl: $("body").attr("dir") === "rtl" || $("html").attr("dir") === "rtl",
                timeOut: $("#toastr-duration").val()
            });
        });
        $("#toastr-clear").on("click", function() {
            toastr.clear();
        });
    });
</script>

<script type="text/javascript">

    var i = 0;

    $("#add").click(function(){

        ++i;

        $("#linksTable").append('<tr><td><input type="file" name="links[link'+i+']" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Delete</button></td></tr>');
    });

    $(document).on('click', '.remove-tr', function(){
        $(this).parents('tr').remove();
    });

</script>


</body>

</html>
