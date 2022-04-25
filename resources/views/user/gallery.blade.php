@extends('user.header')
@section('main-body')
<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-1-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2 style="font-family:serif; color:white;">Gallery</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="products">
      <div class="container">
        <div class="row">
            <div class="row">
            @foreach($result as $value)
              <div class="col-md-4">
                <div class="product-item">
                  <a href=""><img style="height: 400px; width: 400px;" class="img-fluid" src="uploads/{{$value->image}}" alt=""></a>
                  <div class="down-content">
                    <a href=""><h4>{{$value->desc}}</h4></a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>

@endsection