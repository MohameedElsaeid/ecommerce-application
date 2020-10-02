@extends('layouts.DashboardLayouts.master')
@section('bread-crumbs')
    <li class="breadcrumb-item active">Create</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create Category</h3>
                </div>
                <form role="form" {{-- method="POST" action="{{ route('category.index') }}" --}} enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="categorytitle">Category Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Enter category title" value="{{ old('categorytitle') }}">
                        </div>
                        <div class="form-group">
                            <label for="categorydescription">Category Description</label>
                            <input type="text" class="form-control" id="description" name="description"
                                placeholder="Enter category description" value="{{ old('categorydescription') }}">
                        </div>
                        {{-- <div class="form-group">
                            <label for="exampleInputFile">Category Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="images" name="category_image">
                                    <label class="custom-file-label" for="CategoryImage">Choose file</label>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="card-footer">
                        <button type="submit" id="butsave" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            $('#butsave').on('click', function() {
                var title = $('#title').val();
                var description = $('#description').val();
                if (title != "" && description != "" ) {
                    //   $("#butsave").attr("disabled", "disabled");
                   /*  $.ajax({
                        url: "/categories",
                        type: "POST",
                        data: {
                            /* _token: $("#csrf").val(), */
                            type: 1,
                            title: title,
                            description: description,
                        },
                        cache: false,
                        success: function(dataResult) {
                            console.log(dataResult);
                            var dataResult = JSON.parse(dataResult);
                            if (dataResult.statusCode == 200) {
                                window.location = "/categories";
                            } else if (dataResult.statusCode == 201) {
                                alert("Error occured !");
                            }

                        }
                    }); */
                } else {
                    alert('Please fill all the field !');
                }
            });
        });

    </script>
@endsection