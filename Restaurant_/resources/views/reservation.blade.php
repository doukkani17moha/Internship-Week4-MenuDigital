@extends('layout')
@section('content')
    <section class="w3l-about-breadcrumb">
        <div class="breadcrumb-bg breadcrumb-bg-about py-5">
            <div class="container py-lg-5 py-md-3">
                <h2 class="title">Reservation</h2>
            </div>
        </div>
    </section>
    <!-- contacts -->
    <section class="w3l-contact-7 py-5 d-flex align-items-center justify-content-center" id="contact">
        <div class="container">
            <div class="contacts-9 py-lg-5 py-md-4">
                <div class="top-map">
                    <div class="row map-content-9">
                        <div class="col-lg-8 mx-auto">
                            <h3 class="title-big text-center">Book A Table</h3>
                            <p class="mb-4 mt-lg-0 mt-2 text-center">Fill this form to make a reservation</p>
                            <form action="{{ route('reserve') }}" method="post" class="text-right">
                                @csrf
                                <div class="form-grid">
                                    <input type="text" name="name" id="name" placeholder="Name" required>
                                    <input type="email" name="email" id="email" placeholder="Email" required>
                                    <input type="tel" name="phone" id="phone" placeholder="Phone number"
                                        required>
                                    <input type="number" name="no_guest" id="no_guest" placeholder="No of guests"
                                        required min="1" max="12">

                                    <input type="date" name="date" id="date" placeholder="Date" required>
                                    <input type="time" name="time" id="time" placeholder="Time" required>
                                </div>
                                <textarea name="message" id="message" placeholder="Message"></textarea>
                                <button type="submit" class="btn btn-primary btn-style mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection()
