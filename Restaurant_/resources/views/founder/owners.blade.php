@extends('founder.layout')
@section('content')
    <div class="row">
        <h5 class="card-title fw-semibold mb-4">Owners</h5>
        <div class="table-responsive">
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
            <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                    <tr>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Name</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Email</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Phone</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Plan</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Date</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($owners as $owner)
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">{{ $owner->id }}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $owner->name }}</p>
                            </td>

                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $owner->email }}</p>
                            </td>

                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $owner->phone }}</p>
                            </td>

                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $owner->Plan }}</p>
                            </td>

                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $owner->created_at }}</p>
                            </td>
                            <td class="border-bottom-0" style="display: flex; justify-content: center;">
                                <a class="btn btn-primary" href="{{ asset('/founder/edit/' . $owner->id) }}"
                                    title="Edit Owner"> <span><i class="ti ti-edit"></i></span> </a>
                                <span style="margin: 0 10px;"></span>
                                <!-- Add a space using an empty span element with margin -->
                                <form action="/logout" method="post">
                                    @csrf
                                    <button class="btn btn-success" type="submit" name="submit" title="Access Login"><span><i class="ti ti-key"></i></span></button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
        background-color: #5D87FF;
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
