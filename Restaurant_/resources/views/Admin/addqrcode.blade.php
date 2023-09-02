@extends('Admin/layout')
@section('container')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Generate a QR Code</h4>
                <br>
                @if (Session::has('wrong'))
                    <!-- Error message display -->
                @endif
                @if (Session::has('success'))
                    <!-- Success message display -->
                @endif
                <form action="/generate" method="POST" class="forms-sample">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Enter URL:</label>
                        <input type="text" name="url" class="form-control" id="url">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Generate QR Code</button>
                </form>
                    @isset($qrcode)
                        <div style="text-align: center;">
                            <img src="{{ $qrcode }}" alt="qrcode">
                        </div>
                        <div style="text-align: center; margin-top: 20px;">
                            <a href="{{ 'data:image/png;base64,' . base64_encode(file_get_contents($qrcode)) }}"
                                download="qrcode.png">
                                <button>Download QR Code</button>
                            </a>
                        </div>
                    @endisset
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
