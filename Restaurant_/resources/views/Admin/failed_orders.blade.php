@extends('Admin/layout')
@section('container')
<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Cancelled Order Details</h4>
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
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                          <tr>
                            <td>
                              <span class="ps-2">{{ $order->created_at }}</span>
                            </td>
                            {{-- <td> {{ $order->invoice_no }} </td> --}}
                            <td> {{ $order->name }} </td>
                            <td>  {{ $order->phone }}</td>
                            <td> {{ $order->order_address }} </td>
                            <td> {{ $order->payment_method }} </td>

                          </tr>

                        @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>





@endsection()
