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
                <form role="form" method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="categorytitle">Category Title</label>
                            <input type="text" class="form-control" id="categorytitle" name="title"
                                   placeholder="Enter category title" value="{{old('categorytitle')}}">
                        </div>
                        <div class="form-group">
                            <label for="categorydescription">Category Description</label>
                            <input type="text" class="form-control" id="categorydescription" name="description"
                                   placeholder="Enter category description" value="{{old('categorydescription')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Category Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="categoryImage" name="category_image">
                                    <label class="custom-file-label" for="CategoryImage">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
