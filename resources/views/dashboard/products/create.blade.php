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
                <form role="form" method="POST" action="{{ route('product.store') }}" id="productForm"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="ex: NESPRESO"
                                           value="{{ old('ProductBrief') }}" required>

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="ProductPrice">Price</label>
                                    <input type="text" class="form-control" name="price" placeholder="ex: 500"
                                           value="{{ old('ProductPrice') }}" required>

                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 mb-3">

                                    <label for="ProductBrief">Product brief</label>
                                    <input type="text" class="form-control" id="brief" name="brief"
                                           placeholder="Enter product breif" value="{{ old('ProductBrief') }}">


                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="AvailableCount">Available Count</label>
                                    <input type="number" min="1" class="form-control" name="available_count" placeholder="ex: 20"
                                           value="{{ old('AvailableCount') }}" required>

                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="ProductDescription">Product description</label>
                            <input type="text" class="form-control" id="description" name="description"
                                   placeholder="Enter product description" value="{{ old('ProductDescription') }}">
                        </div>
                        <div class="form-group">
                            <label for="ProductImage">Product Image</label>
                            <input type="file" multiple class="form-control" id="product_image" name="product_images[]"
                                   placeholder="Select Product Image">
                        </div>
                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Category</label>
                                <select class="custom-select d-block w-100" name="category_id" required>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="country">Brand</label>
                                <select class="custom-select d-block w-100" name="brand_id" required>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="is_awesome" id="is_awesome">
                            <label class="custom-control-label" for="is_awesome">Is Awesome</label>
                        </div>
                        <hr>
                        <h4 class="text-center">Product Specifications</h4>
                        <hr>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="width">width</label>
                                    <input type="text" class="form-control" name="width" placeholder="ex: 30 cm"
                                           value="{{ old('ProductBrief') }}" required>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="height">height</label>
                                    <input type="text" class="form-control" name="height" placeholder="ex: 2m"
                                           value="{{ old('height') }}" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="weight">depth</label>
                                    <input type="text" class="form-control" name="depth" placeholder="ex: 30 kg"
                                           value="{{ old('weight') }}" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="weight">weight</label>
                                    <input type="text" class="form-control" name="weight" placeholder="ex: 30 kg"
                                           value="{{ old('weight') }}" required>

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="each_box_contains">Each Box Contains</label>
                                    <input type="text" class="form-control" name="each_box_contains"
                                           placeholder="ex: 60 pcs"
                                           value="{{ old('each_box_contains') }}" required>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="freshness_duration">Freshness Duration</label>
                                <input type="text" class="form-control" name="freshness_duration"
                                       placeholder="ex: 03 days"
                                       value="{{ old('ProductBrief') }}" required>
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="when_packeting">When Packeting</label>
                                <input type="text" class="form-control" name="when_packeting"
                                       placeholder="ex: without touch of hand"
                                       value="{{ old('when_packeting') }}" required>
                            </div>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="quality_checking"
                                   id="quality_checking">
                            <label class="custom-control-label" for="quality_checking">Quality Checking</label>
                        </div>

                        <div class="card-footer">
                            <button type="submit" id="butsave" class="btn btn-primary">Submit</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
