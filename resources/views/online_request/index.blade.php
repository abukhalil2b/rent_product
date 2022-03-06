@extends('layouts.master')

@section('content')

<div class="container">


        <div class="row">
            <div class="col-lg-12  mt-5">
                <h4>
                    Online Request List
                </h4>
            </div>

            <div class="col-lg-12">
                <table class="table table-bordered">
                    <tr>
                        <td>customer</td>
                        <td>product</td>
                        <td>period</td>
                        <td>date</td>
                        <td>action</td>
                    </tr>

                    <tr>
                        <td>
                            <div>customer name</div>
                            <div>99889988</div>
                        </td>
                        <td>
                            <img src="{{asset('img/balloon.jpg')}}" alt="" class="img-small">
                        </td>
                        <td>
                            From:22-4-2022 To:28-4-2022
                        </td>
                        <td>
                            2 days ago
                        </td>
                        <td>
                            <a href="" class="btn btn-sm btn-outline-warning">Rent</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div>customer name</div>
                            <div>99889988</div>
                        </td>
                        <td>
                            <img src="{{asset('img/balloon.jpg')}}" alt="" class="img-small">
                        </td>
                        <td>
                            From:29-4-2022 To:05-5-2022
                        </td>
                        <td>
                            1 week ago
                        </td>
                        <td>
                            <a href="" class="btn btn-sm btn-outline-warning">Rent</a>
                        </td>
                    </tr>
                    
                </table>
            </div>
        </div>
    </div>

@endsection