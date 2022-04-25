@extends('user.header')
@section('main-body')

   
<div class="page-heading contact-heading header-text" style="background-image: url(assets/images/heading-4-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2 style="font-family:serif; color:white;">Contact Us</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-8">
            <h4>About our office</h4>
            @foreach($res as $val)
            <br>
            <p>{{$val->about}}</p>
            @endforeach
            <br>

            @foreach($result as $value)
            <br>
            <h4>Terms And Conditions</h4>
            @endforeach
            @foreach($re as $v)
            <br>
            <p>{{$value->tc}}</p>
            <br><br><br>
            <h6 style="color:brown;font-family:monospace;">{{$v->place}}</h6>
            <h6 style="color:brown;font-family:monospace;">{{$v->email}}</h6>
            <h6 style="color:brown;font-family:monospace;">{{$v->phone}}</h6>
            @endforeach

            <br>
            <div class="col-md-4">
              <div class="left-content">
                <ul class="social-icons">
                  <li><a href=""><i class="fa fa-facebook"></i></a></li>
                  <li><a href=""><i class="fa fa-twitter"></i></a></li>
                  <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
    </div>

@endsection