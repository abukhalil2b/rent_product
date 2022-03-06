@extends('layouts.master')

@section('content')

<div class="container">

        

        <div class="row">
            <div class="col-lg-12 mt-5">
                <input type="number" name="barcode" class="form-control" placeholder="Barcode">
            </div>
            <div class="col-lg-12 mt-1">
                <a href="product/details" class="btn btn-outline-secondary btn-block">search</a>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-12  mt-5">
                <h4>
                    Products List
                </h4>
            </div>

            <div class="col-lg-12">
                <table class="table table-bordered">
                    <tr>
                        <td>product</td>
                        <td>img</td>
                        <td>status</td>
                    </tr>

                    <tr>
                        <td>
                            <a href="{{route('product.details')}}">camera</a>
                        </td>
                        <td>
                            <img src="{{asset('img/balloon.jpg')}}" alt="" class="img-small">
                            <div>price: 5.RO <small>1 day</small></div>
                        </td>
                        <td>
                            <span class="text-success">available</span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            camera
                        </td>
                        <td>
                            <img src="{{asset('img/balloon.jpg')}}" alt="" class="img-small">
                            <div>price: 5.RO <small>1 day</small></div>
                        </td>
                        <td>
                            <a href="{{route('product.return')}}">
                                <span class="text-warning">
                                    return
                                </span>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@endsection