@extends('Admin/layout')
@section('container')
    @foreach ($all_data as $footer)
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Footer Description</h4>
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
                    <form class="forms-sample" action="/edit/footer/process" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control white-textarea " name="footer_description" id="footer_description"
                                rows="5">{{ $footer->footer_description }}</textarea>
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
