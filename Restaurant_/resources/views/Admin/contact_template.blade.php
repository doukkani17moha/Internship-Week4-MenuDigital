@extends('Admin/layout')
@section('container')
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
    @foreach ($all_data as $contact)
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Contact Big Title</h4>
                    <form class="forms-sample" action="{{ asset('/edit/home/storyvideo/'. Auth::user()->restaurant)}}/edit/contact/bigtitle" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="contact_bigtitle" value="{{ $contact->contact_bigtitle }}"
                                class="form-control text" id="exampleInputName1">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Contact Title</h4>
                    <form class="forms-sample" action="{{ asset('/edit/home/storyvideo/'. Auth::user()->restaurant)}}/edit/contact/title" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="contact_title" value="{{ $contact->contact_title }}"
                                class="form-control text" id="exampleInputName1">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Contact Description</h4>
                    <form class="forms-sample" action="{{ asset('/edit/contact/description/'. Auth::user()->restaurant)}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control white-textarea" name="contact_description" id="contact_description"
                                rows="5">{{ $contact->contact_description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Contact Address</h4>
                    <form class="forms-sample" action="{{ asset('/edit/contact/address/'. Auth::user()->restaurant)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="contact_address" value="{{ $contact->contact_address }}"
                                class="form-control text" id="exampleInputName1">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Contact Email</h4>
                    <form class="forms-sample" action="{{ asset('/edit/contact/email/'. Auth::user()->restaurant)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="contact_email" value="{{ $contact->contact_email }}"
                                class="form-control text" id="exampleInputName1">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Contact Phone</h4>
                    <form class="forms-sample" action="{{ asset('/edit/contact/phone/'. Auth::user()->restaurant)}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="contact_phone" value="{{ $contact->contact_phone }}"
                                class="form-control text" id="exampleInputName1">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Contact Map</h4>
                    <form class="forms-sample" action="{{ asset('/edit/contact/map/'. Auth::user()->restaurant)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="contact_map" value="{{ $contact->contact_map }}"
                                class="form-control text" id="exampleInputName1">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection()
<style>
    .alert {
        padding: 20px;
        background-color: #f44336;
        color: white;
    }

    .white-textarea {
        color: white !important;
        background-color: #333;
        line-height: 1.5 !important;
    }
    .text {
        color: white !important;
        background-color: #333;
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
