@extends('layouts.app')

@section('subnav')

    <!-- Just an image -->
    <nav class="navbar navbar-light bg-white shadow-sm">
        <div class="container">
            <div class="navbar-brand">
                <a href="{{route('products.index')}}" class="btn btn-sm btn-primary">Back</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid bg-white">
        <div class="container pt-2 pb-2">

            @foreach($brands as $singleBrand)
                <a href="{{route('brands.show',$singleBrand->id)}}">
                    <span style="background-color: {{$singleBrand->name}};padding: 10px; border-radius: 25%;width: 10px">
                        {{$singleBrand->name}}
                    </span>
                </a>
            @endforeach
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="card shadow-sm">

            <div class="card-body">
                <h5 class="card-title">{{$brand->name}}</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">code</th>
                        <th scope="col">color</th>
                        <th scope="col">name</th>
                        <th scope="col">brand</th>
                        <th scope="col">Vendor</th>
                        <th scope="col">Category</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($brand->products as $product)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{$product->code}}</td>
                            <td>
                                <div
                                    style="background-color: {{$product->color}};padding: 10px; border-radius: 25%;width: 10px"></div>
                            </td>
                            <td>

                                {{$product->name}}
                            </td>
                            <td><a href="{{route('brands.show',$product->brand->id)}}">{{$product->brand->name}}</a>
                            </td>
                            <td>{{$product->vendor->name}}</td>
                            <td>{{$product->category->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
