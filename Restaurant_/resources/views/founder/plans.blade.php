@extends('founder.layout')
@section('content')
    <div class="row">
        <h5 class="card-title fw-semibold mb-4">Subscription Plans</h5>
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
                <thead class="text-dark fs-4" >
                    <tr>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Name</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Price</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Months</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Description</h6>
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
                    @foreach ($plans as $plan)
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">{{ $plan->id }}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $plan->name }}</p>
                            </td>

                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $plan->price }}</p>
                            </td>

                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $plan->duration_months }}</p>
                            </td>

                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $plan->description }}</p>
                            </td>

                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $plan->created_at }}</p>
                            </td>
                            <td class="border-bottom-0" style="display: flex; justify-content: center;">
                                <a href="{{ asset('/plans/edit/' . $plan->id) }}" type="button" class="btn btn-success">Edit</a>
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
