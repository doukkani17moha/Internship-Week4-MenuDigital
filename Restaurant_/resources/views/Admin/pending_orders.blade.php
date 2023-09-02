@extends('Admin/layout')
@section('container')
    <div class="row ">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pending Order Details</h4>
                    @if (Session::has('wrong'))
                        <br>

                        <div class="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            <strong>Opps !</strong> {{ Session::get('wrong') }}
                        </div>
                        <br>
                    @endif
                    @if (Session::has('success'))
                        <br>

                        <div class="success">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            <strong>Congrats !</strong> {{ Session::get('success') }}
                        </div>
                        <br>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> Date </th>
                                    {{-- <th> Invoice No </th> --}}
                                    <th> Customer Name </th>
                                    <th> Customer Phone</th>
                                    <th> Shippping Address </th>
                                    <th> Payment Method </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>
                                            <span class="ps-2">{{ $order->created_at }}</span>
                                        </td>
                                        {{-- <td> {{ $order->invoice_no }} </td> --}}
                                        <td>{{ $order->name }} </td>
                                        <td> {{ $order->phone }}</td>
                                        <td> {{ $order->order_address }} </td>
                                        <td> {{ $order->payment_method }} </td>
                                        <td>
                                            <a href="{{ asset('/admin-accept-order/' . $order->id) }}" class="badge badge-outline-primary">Accept</a>
                                            <a href="{{ asset('/admin-decline-order/' . $order->id) }}" class="badge badge-outline-danger"
                                                style="margin-left:10px;">Decline</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection()





    <style>
        .alert {
            padding: 20px;
            background-color: #f44336;
            color: white;
        }

        .success {
            padding: 20px;
            background-color: #4BB543;
            color: white;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }
    </style>
