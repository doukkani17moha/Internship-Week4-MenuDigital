@extends('Admin/layout')
@section('container')
<a href="/add/menu" type="button" class="btn btn-success" style="width:170px;height:35px;padding-top:9px;">+ Add Menu</a>
<br>
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
<?php
    $i=1;
?>
@foreach($plats as $product)
@if($i%3==1)
<div class="card-deck" style="margin-top:20px;">
@endif
  <div class="card">
    <img class="card-img-top" src="{{ asset('assets/images/plats/'.$product->plat_img) }}" style="width:100%;height:280px;" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $product->plat_name }}</h5>
      <p class="card-text">{{ $product->plat_descr }}</p>
      <p style = "text-transform:capitalize;">Time : {{ $product->plat_time }}</p>
      <p style = "text-transform:capitalize;">Price : {{ $product->plat_price }} $</p>
      <p style = "text-transform:capitalize;">Available : {{ $product->plat_avail }} </p>
      <span class="rating_avg">Rating : {{ $product->rating }}</span>
    </div>
    <div class="card-footer">
      @php
      $usertype = Auth::user()->usertype;
  @endphp
                  @if ($usertype != 'Sub Admin')

      <small class="text-muted"><a href="{{ asset('/menu/edit/'.$product->id) }}" class="btn btn-primary">Edit</a> </small>
      @endif
        <a href="{{ route('plats.toggle-enable-disable', ['id' => $product->id, 'action' => $product->enable ? 'disable' : 'enable']) }}" class="btn btn-danger" style="margin-left: 10px;">
          @if ($product->enable)
              Disable
          @else
              Enable
          @endif
      </a>
           
         
    </div>
  </div>
  @if($i%3==0)
</div>
@endif
<?php
    $i++;
?>
@endforeach
@if(($i-1)%3!=0)
  @if($fraction==2)
  <div class="card" style="background-color:black;"></div>
  @endif
  @if($fraction==1)
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