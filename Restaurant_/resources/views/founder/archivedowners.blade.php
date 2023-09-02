@extends('founder.layout')
@section('content')
    <div class="row">
        <h5 class="card-title fw-semibold mb-4">Archived Owners</h5>
        <div class="table-responsive">
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
                    @foreach ($archivedowners as $owner)
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
                                <p class="btn btn-danger" title="Archived Owner"> <span>Archived</span> </p>
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
