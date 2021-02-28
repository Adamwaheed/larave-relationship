@extends('layouts.app')

@section('subnav')
    <!-- Just an image -->
    <nav class="navbar navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <a class="btn btn-sm btn-primary">Create Product</a>
            </a>
        </div>
    </nav>
@endsection

@section('content')
    <div class="container">
        <div class="card shadow-sm">

            <div class="card-body">
                <h5 class="card-title">Products</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">code</th>
                        <th scope="col">name</th>
                        <th scope="col">color</th>
                        <th scope="col">brand</th>
                        <th scope="col">Category</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{$product->code}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->color}}</td>
                            <td>{{$product->brand->name}}</td>
                            <td>{{$product->category->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
