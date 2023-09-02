@extends('layoutowner')
@section('content')
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-3">
            @foreach($Data as $contact)
            <h2 class="title">{{$contact->contact_bigtitle}}</h2>
            @endforeach
        </div>
    </div>
</section>
<!-- contacts -->
<section class="w3l-contact-7 py-5" id="contact">
    <div class="contacts-9 py-lg-5 py-md-4">
        <div class="container">
            <div class="top-map">
                <div class="row map-content-9">
                    @foreach($Data as $contact)
                    <div class="col-lg-8">
                        <h3 class="title-big">{{$contact->contact_title}}</h3>
                        <p class="mb-4 mt-lg-0 mt-2">{{$contact->contact_description}}</p>
                        <form action="" method="post" class="text-right">
                            <div class="form-grid">
                                <input type="text" name="w3lName" id="w3lName" placeholder="Name*" required="">
                                <input type="email" name="w3lSender" id="w3lSender" placeholder="Email*" required="">
                                <input type="text" name="w3lPhone" id="w3lPhone" placeholder="Phone number*"
                                    required="">
                                <input type="text" name="w3lSubject" id="w3lSubject" placeholder="Subject">
                            </div>
                            <textarea name="w3lMessage" id="w3lMessage" placeholder="Message"></textarea>
                            <button type="submit" class="btn btn-primary btn-style mt-3">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-4 cont-details">
                        <address>
                            <h5 class="mt-md-5 mt-4">Contact Address</h5>
                            <p><span class="fa fa-map-marker"></span>{{$contact->contact_address}}</p>
                            <p> <a href="mailto:{{$contact->contact_email}}"><span
                                        class="fa fa-envelope"></span>{{$contact->contact_email}}</a></p>
                            <p><span class="fa fa-phone"></span><a href="tel:{{$contact->contact_phone}}">{{$contact->contact_phone}}</a></p>

                            <h5 class="mt-4 mb-3">Opening Hours</h5>
                            <div class="hours">
                                <p><span class="fa fa-clock-o"></span>10:00am - 09:00pm</p>
                                <p>Sunday Closed</p>
                            </div>
                        </address>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //contacts -->
<div class="map">
    <iframe src="{{$contact->contact_map}}" frameborder="0" style="border:0;" allowfullscreen=""  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection()

