@extends('Admin/layout')
@section('container')
@foreach($plats as $plat)
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Menu</h4>
                    <br>
                    @if(Session::has('wrong'))       
                      <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    <strong>Opps !</strong> {{Session::get('wrong')}}
                  </div>
                  <br>
                      @endif
                      @if(Session::has('success'))
                      <div class="success">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    <strong>Congrats !</strong> {{Session::get('success')}}
                  </div>
                      <br>
                      @endif
                    <form class="forms-sample" action="{{ asset('/menu/edit/process/'.$plat->id) }}" method="post" enctype="multipart/form-data">
                       @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" value="{{ $plat->plat_name }}" class="form-control" id="exampleInputName1">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" value="{{ $plat->plat_descr }}" name="description" id="exampleTextarea1" rows="5">{{ $plat->plat_descr }}</textarea>
                      </div>
                    
                      <div class="form-group">
                        <label for="exampleInputPassword4">Price</label>
                        <input type="number" name="price" value="{{ $plat->plat_price }}" class="form-control" id="exampleInputPassword4">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Rating</label>
                        <input type="number" name="rating" step="0.01" value="{{ $plat->rating }}" class="form-control" id="exampleInputPassword4">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Catagory</label>
                        <select class="form-control" name="category" id="exampleSelectGender">
                          @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Time</label>
                        <select class="form-control" name="ptime" id="exampleSelectGender">
                          <option value="Breakfast" @php if($plat->plat_time=="Breakfast"){ echo"selected"; }   @endphp>Breakfast</option>
                          <option value="Lunch" @php if($plat->plat_time=="Lunch"){ echo"selected"; }   @endphp>Lunch</option>
                          <option value="Dinner" @php if($plat->plat_time=="Dinner"){ echo"selected"; }   @endphp>Dinner</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Available</label>
                        <select class="form-control" name="available" id="exampleSelectGender">
                          <option @php if($plat->plat_avail=="Stock"){ echo"selected"; }   @endphp>Stock</option>
                          <option @php if($plat->plat_avail=="Out Of Stock"){ echo"selected"; }   @endphp>Out of Stock</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                      <button type="submit" class="btn btn-primary me-2">Update</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
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

.success {
  padding: 20px;
  background-color: #4BB543 ;
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