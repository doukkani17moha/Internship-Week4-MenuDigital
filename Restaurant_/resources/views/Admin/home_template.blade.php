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
    @foreach ($all_data as $home)
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Home Title</h4>
                    <form class="forms-sample" action="/edit/home/title" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="home_title" value="{{ $home->home_title }}"
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
                    <h4 class="card-title">Home Description</h4>
                    <form class="forms-sample" action="/edit/home/description" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control white-textarea" name="home_description" id="home_description"
                                rows="5">{{ $home->home_description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Home Story Title</h4>
                    <form class="forms-sample" action="/edit/home/storytitle" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="home_story_title" value="{{ $home->home_story_title }}"
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
                    <h4 class="card-title">Home Story Description</h4>
                    <form class="forms-sample" action="/edit/home/storydescription" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control white-textarea" name="home_story_description" id="home_story_description"
                                rows="5">{{ $home->home_story_description }}</textarea>
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
                        <iframe class="embed-responsive-item" src="{{ $home->home_story_video }}" allowfullscreen></iframe>
                    </div> <br> <br>
                    <h4 class="card-title">Home Story Video</h4>
                    <form class="forms-sample" action="/edit/home/storyvideo" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="home_story_video" placeholder="URL" value="{{ $home->home_story_video }}"
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
