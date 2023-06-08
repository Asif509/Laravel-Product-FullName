@extends('master')

@section('title')
    Full Name
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Full Name</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('get-full-name') }}" method="post">
                                @csrf
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">First name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="first_name" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Last name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="last_name" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Full name</label>
                                    <div class="col-md-8">
                                        <input type="text" value="{{ Session::has('result') ? Session::get('result') : '' }}" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Get Full Name" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
