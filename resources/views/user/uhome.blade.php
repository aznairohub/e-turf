@extends('user.uheader')
@section('main-body')
    <!-- <br><br><br> -->
    <!-- <br><br><br>
    <br><br><br> -->
    <div class="page-heading contact-heading header-text" style="background-image: url(assets/images/heading-4-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <!-- <h4>Lorem ipsum dolor</h4>
              <h2>Contact Us</h2> -->
              @foreach($result as $value)
        <h1>Welcome {{$value->name}}..</h1>
    @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection