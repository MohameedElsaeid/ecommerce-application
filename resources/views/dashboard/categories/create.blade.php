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
                <form role="form" method="POST" action="{{ route('category.store') }}" id="catgeoryForm" enctype="multipart/form-data">
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
                       {{--  <input type="hidden" value="{{route('category.store')}}" id="createCategoryUrl"> --}}
                        <input type="hidden" value="image" id="image">
                        <div class="form-group">
                            <label for="exampleInputFile">Category Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="images" name="category_image">
                                    <label class="custom-file-label" for="CategoryImage">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="card-footer">
                        <button type="submit" id="butsave" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
{{-- 
@section('script')
    <script>
        $('#catgeoryForm').on('submit', (e) => {
            e.preventDefault();
            const title = $('#title').val();
            const description = $('#description').val();
            const image = $('#image').val();
            const createCategoryUrl = $('#createCategoryUrl').val();
            const _token = $("input[name='_token']").val();
            $.ajax({
                url: createCategoryUrl,
                method: 'POST',
                data: {
                    title,
                    description,
                    image,
                    _token
                },
                success: (data) => {
                    if (data.success) {
                        history.back()
                    }
                },
                error: (error) => {
                }
            });
        })
    </script>
@endsection --}}
