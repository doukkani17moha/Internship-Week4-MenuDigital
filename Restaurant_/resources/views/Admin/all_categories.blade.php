@extends('Admin/layout')
@section('container')
    <a href="/add/categorie" type="button" class="btn btn-success" style="width:170px;height:35px;padding-top:9px;">+ Add Categorie</a>
    <br>
    <br>
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
    @foreach ($categories as $category)
        @if ($i % 3 == 1)
            <div class="card-deck" style="margin-top:20px;">
        @endif
        <div class="card">
            <img class="card-img-top" src="{{ asset('admin/assets/images/categories/' . $category->category_img) }}"
                style="width:100%;height:400px;" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $category->category_name }}</h5>
                <p> Description : {{ $category->category_descr }}</p>
            </div>
            <div class="card-footer">
                @php
                    $usertype = Auth::user()->usertype;
                @endphp

                @if ($usertype != 'Sub Admin')
                    <small class="text-muted"><a href="{{ asset('/categorie/edit/' . $category->id) }}"
                            class="btn btn-primary">Edit</a>
                        <a href="{{ asset('/categorie/delete/' . $category->id) }}" class="btn btn-danger"
                            style="margin-left:10px;">Delete</a>
                @endif

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
