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
                	<div>NAME:</div>
                     camera
                </div>

                <div class="col-lg-6 mt-5">
                	<div>STATUS:</div>
                    available
                </div>

                <div class="col-lg-12 mt-5">
                	<div>DESCIPTION:</div>
                     this only one item
                </div>

                <div class="col-lg-6 mt-5">
                    <div>FROM DATE:</div>
                    2022-4-1
                </div>

                <div class="col-lg-6 mt-5">
                   <div>TO DATE:</div>
                   2022-4-7
                </div>

                <div class="col-lg-6 mt-5">
                	<div>TODAY DATE:</div> 
                	2022-4-6
                  	<hr>
                   	PERIOD: 6 days 
                  	<hr>
                   	TOTAL: 40 RO
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
                    <a href="" class="btn btn-outline-secondary btn-block">return</a>
                </div>
            </div>
        </div>
    </div>

@endsection