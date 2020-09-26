@extends('layouts.DashboardLayouts.master')

@section('bread-crumbs')
    <li class="breadcrumb-item active">Edit</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create Brand</h3>
                </div>
                <form role="form" method="POST" action="{{route('brand.update')}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="brandName">Brand Name</label>
                            <input type="text" class="form-control" id="brandName" name="brand_name"
                                   placeholder="Enter brand name" value="{{$brand->brand_name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Brand Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="brandImage"
                                           value="{{$brand->brand_image}}" name="brand_image">
                                    <label class="custom-file-label" for="brandImage">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
