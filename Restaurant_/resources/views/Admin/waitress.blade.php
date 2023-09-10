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
    <?php
    $i = 1;
    ?>
    @foreach ($waitress as $waitres)
        @if ($i % 3 == 1)
            <div class="card-deck" style="margin-top:20px;">
        @endif
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Id of this Call: {{ $waitres->id }}</h5>
                <p> Date : {{ $waitres->datetime_created }}</p>
            </div>
            <div class="card-footer">
                    <small class="text-muted">
                        <a href="{{ asset('/waitress/coming/' . $waitres->id) }}"
                            class="btn btn-primary">I'm Coming</a>
                        <a href="{{ asset('/waitress/waiting/' . $waitres->id) }}" class="btn btn-success"
                            style="margin-left:10px;">Please Wait</a>
                </small>
            </div>
        </div>
        @if ($i % 3 == 0)
            </div>
        @endif
        <?php
        $i++;
        ?>
    @endforeach
    @if (($i - 1) % 3 != 0)
        @if ($fraction == 2)
            <div class="card" style="background-color:black;"></div>
        @endif

        @if ($fraction == 1)
            <div class="card" style="background-color:black;"></div>
            <div class="card" style="background-color:black;"></div>
        @endif
    @endif
@endsection()
<script>
    function reloadPage() {
        setTimeout(function () {
            location.reload(); // Reload the current page
        }, 30000); // 30 seconds (adjust the time interval as needed)
    }

    reloadPage();
</script>
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
