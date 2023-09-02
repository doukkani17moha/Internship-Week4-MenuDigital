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
    @foreach ($all_data as $about)
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">About Big Title</h4>
                    <form class="forms-sample" action="{{ asset('/edit/about/bigtitle/'. Auth::user()->restaurant)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="about_bigtitle" value="{{ $about->about_bigtitle }}"
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
                    <h4 class="card-title">About Title</h4>
                    <form class="forms-sample" action="{{ asset('/edit/about/title/'. Auth::user()->restaurant)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="about_title" value="{{ $about->about_title }}"
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
                    <h4 class="card-title">About Description</h4>
                    <form class="forms-sample" action="{{ asset('/edit/about/description/'. Auth::user()->restaurant)}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control white-textarea" name="about_description" id="about_description"
                                rows="5">{{ $about->about_description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('home/assets/images/' . $about->about_img) }}" class="card-img-top" style="width: 980px; height: 654.48px" alt="About Image"><br><br>
                    <h4 class="card-title">About Image</h4>
                    <form class="forms-sample" action="{{ asset('/edit/about/img/'. Auth::user()->restaurant)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Image</label>
                            <input type="file" name="about_img" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ $about->about_video }}" allowfullscreen></iframe>
                    </div> <br> <br>
                    <h4 class="card-title">About Video</h4>
                    <form class="forms-sample" action="{{ asset('/edit/about/video/'. Auth::user()->restaurant)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="about_video" placeholder="URL" value="{{ $about->about_video }}"
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
