@extends('master')

@section('title')
    Product Details
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="">
                        <img src="{{asset('/')}}assets/img/{{ $product['image'] }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card card-body">
                        <h3>{{$product['name']}}</h3>
                        <p>Price: {{$product['price']}}</p>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <p>{{$product['description']}}</p>
                </div>

            </div>

        </div>

    </section>
@endsection
