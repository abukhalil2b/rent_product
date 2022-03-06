@extends('layouts.master')

@section('content')

    <div class="p-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-5">
                     <img src="{{asset('img/balloon.jpg')}}" alt="" class="img">
                </div>

                <div class="col-lg-12">
                    <hr>
                    <h4>
                        Product Details
                    </h4>
                </div>

                <div class="col-lg-6 mt-5">
                    NAME: camera
                </div>

                <div class="col-lg-6 mt-5">
                    status: available
                </div>

                <div class="col-lg-12 mt-5">
                    DESCIPTION: this only one item
                </div>

                <div class="col-lg-6 mt-5">
                    from date
                    <input type="date" name="from" class="form-control" value="2022-4-1">
                </div>

                <div class="col-lg-6 mt-5">
                   to date
                    <input type="date" name="from" class="form-control" value="2022-4-7">
                </div>

                <div class="col-lg-6 mt-5">
                   6 <span class="text-primary">days</span> | 30 <span class="text-primary">RO</span>
                </div>
                <div class="col-lg-12">
                    <hr>
                    <h4>
                        Customer Details
                    </h4>
                </div>


                <div class="col-lg-6 mt-5">
                    PHONE: 11223344 | CIVI NUMBER: 11223344
                </div>

                <div class="col-lg-6 mt-5">
                    NAME: customer name
                </div>

                <div class="col-lg-12 mt-5">
                    <a href="product/details" class="btn btn-outline-secondary btn-block">Rent</a>
                </div>
            </div>
        </div>
    </div>

@endsection