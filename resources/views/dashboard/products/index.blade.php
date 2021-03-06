@extends('layouts.DashboardLayouts.master')
@section('bread-crumbs')
    <li class="breadcrumb-item active">All Products</li>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with minimal features & hover style</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>Product Title</th>
                                    <th>Product Price</th>
                                    <th>Product Brief</th>
                                    {{-- <th>Product Description</th>
                                    --}}
                                    <th>Product Image</th>
                                    <th>Specifications</th>
                                    <th>Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td style="width: 100px">{{ $product->product_id }}</td>
                                        <td>{{ $product->title }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->brief }}</td>
                                        {{-- <td>{{ $product->description }}</td>
                                        --}}
                                        <td>
                                            <ul type="square">
                                                @foreach ($product->images as $imageObject)
                                                    <li> {{ $imageObject->image }} </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <ul type="square">
                                                <li>width:{{ $product->specification->width }}</li>
                                                <li>height:{{ $product->specification->height }}</li>
                                                <li>depth:{{ $product->specification->depth }}</li>
                                                <li>weight:{{ $product->specification->weight }}</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul type="square">
                                                @foreach ($product->comments as $commentObject)
                                                    <li>{{$commentObject->comment}}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            {{-- <button><a
                                                    href="{{ route('brand.edit', [$brand->$brand_id]) }}">Edit</a></button>
                                            --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
@endsection
@section('script')
    <script>
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
        });

    </script>
@endsection
