@extends('founder.layout')
@section('content')
@foreach ($users as $user)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Update Owner</h5>
            <div class="card">
                <form action="{{ asset('/founder-edit-process/' . $user->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name"
                                name="name" value="{{ $user->name }}">
                            <div class="form-text">Take your time, please don't make a mistake.</div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email"
                                name="email" value="{{ $user->email }}" required="@" >
                            <div class="form-text">Take your time, please don't make a mistake.</div>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" aria-describedby="phone"
                                name="phone" value="{{ $user->phone }}">
                            <div class="form-text">Take your time, please don't make a mistake.</div>
                        </div>
                        <div class="mb-3">
                            <label for="plan" class="form-label">Plans</label>
                            <div class="col-12 col-sm-6">
                              <select class="form-control" name="plan" style="height: 55px;">
                                <option selected>Choose Plan</option>
                                <option value="free" @php if($user->Plan=="free"){ echo"selected"; } @endphp >free</option>
                                  <option value="Basic" @php if($user->Plan=="Basic"){ echo"selected"; } @endphp >Basic</option>
                                  <option value="Standard" @php if($user->Plan=="Standard"){ echo"selected"; } @endphp >Standard</option>
                                  <option value="Premium" @php if($user->Plan=="Premium"){ echo"selected"; } @endphp >Premium</option>
                              </select>
                            </div>
                          </div>

                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
@endsection()
