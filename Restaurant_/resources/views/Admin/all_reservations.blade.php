@extends('Admin/layout')
@section('container')
    <div class="row ">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Reservation Details</h4>
                    @if (Session::has('wrong'))
                        <div class="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            <strong>Opps !</strong> {{ Session::get('wrong') }}
                        </div>
                        <br>
                    @endif
                    @if (Session::has('success'))
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
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Guests</th>
                                    <th>Message</th>
                                    @php
                                        $usertype = Auth::user()->usertype;
                                    @endphp
                                    @if ($usertype != 'Sub Admin')
                                        <th> Action </th>
                                    @endif
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($reservations as $reservation)
                                    <tr>
                                        <td>
                                            <span class="ps-2">{{ $reservation->reserv_date }}</span>
                                        </td>
                                        <td> {{ $reservation->reserv_time }} </td>
                                        <td> {{ $reservation->reserv_name }} </td>
                                        <td> {{ $reservation->reserv_email }} </td>
                                        <td> {{ $reservation->reserv_phone }} </td>
                                        <td> {{ $reservation->no_guest }} </td>
                                        <td> {{ $reservation->reserv_msg }} </td>
                                        <td>
                                            @if ($reservation->status == 0)
                                            @if ($usertype != 'Sub Admin')
                                            <a href="{{ route('acceptReservation', ['reservationId' => $reservation->id]) }}"
                                                class="badge badge-outline-primary">
                                                <i class="fas fa-check-circle"></i>
                                            </a>
                                                <a href="{{ route('declineReservation', ['reservationId' => $reservation->id]) }}" class="badge badge-outline-danger"
                                                    style="margin-left: 10px;">
                                                    <i class="fas fa-times-circle"></i>
                                                </a>
                                            @endif
                                            @elseif($reservation->status == 1)
                                            <p
                                                class="badge badge-outline-primary">
                                                <i class="">Accepted</i>
                                            </p>
                                            @else
                                            <p class="badge badge-outline-danger"
                                                    style="margin-left: 10px;">
                                                    <i>Declined</i>
                                        </p>
                                             @endif

                                        </td>
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
