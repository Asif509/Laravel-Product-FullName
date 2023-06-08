@extends('master')

@section('title')
    Products page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center">All Products</h3>
                    <div class="row mt-3">
                        @foreach($products as $product)
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="assets/img/{{ $product['image'] }}"  class="card-img-top " style="height:250px" alt="">
                                    <div class="card-body">
                                        <h2>{{ $product['name'] }}</h2>
                                        <p>Price:{{ $product['price'] }}</p>

                                    </div>
                                    <div class="card-footer">
                                        <a href="{{route('product-details', ['id' =>$product['id']])}}" class="float-end btn btn-outline-primary">View</a>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


