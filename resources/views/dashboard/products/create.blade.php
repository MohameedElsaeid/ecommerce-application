@extends('layouts.DashboardLayouts.master')
@section('bread-crumbs')
    <li class="breadcrumb-item active">Create</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create Product</h3>
                </div>
                <form role="form" method="POST" action="{{ route('product.store') }}" id="productForm" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="productTitle">Product Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                   placeholder="Enter product title" value="{{ old('productTitle') }}">
                        </div>
                        <div class="form-group">
                            <label for="ProductPrice">Product Price</label>
                            <input type="text" class="form-control" id="price" name="price"
                                   placeholder="Enter product price" value="{{ old('ProductPrice') }}">
                        </div>

                        <div class="form-group">
                            <label for="ProductDescription">Product description</label>
                            <input type="text" class="form-control" id="description" name="description"
                                   placeholder="Enter product description" value="{{ old('ProductDescription') }}">
                        </div>
                        <div class="form-group">
                            <label for="ProductBrief">Product brief</label>
                            <input type="text" class="form-control" id="brief" name="brief"
                                   placeholder="Enter product breif" value="{{ old('ProductBrief') }}">
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