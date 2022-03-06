@extends('layouts.master')

@section('content')

    <div class="p-6">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <h4>
                        New Product
                    </h4>
                </div>

                <div class="col-lg-12 mt-5">
                  	<div> BARCODE:</div>
                  	<input type="number" placeholder="Barcode" class="form-control">
                </div>

                <div class="col-lg-6 mt-5">
                    <div>IMAGE:</div>
                    <input type="file">
                </div>
                <div class="col-lg-6 mt-5">
                    NAME: <input type="text" class="form-control">
                </div>

                <div class="col-lg-12 mt-5">
                    <div>DESCIPTION: </div>
                    <textarea class="form-control"></textarea>
                </div>

               

                <div class="col-lg-6 mt-5">
                  	<div>PRICE:</div>
                  	<input type="number" placeholder="0.000" class="form-control">
                </div>
                

                <div class="col-lg-12 mt-5">
                    <a href="" class="btn btn-outline-secondary btn-block">Add</a>
                </div>
            </div>
        </div>
    </div>

@endsection