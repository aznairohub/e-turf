@extends('user.header')
@section('main-body')
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h2>Let The World Play</h2>
            <h4 style="color: yellow;">Your Play Spot Is Just A Tap Away..!!</h4>
          </div>
        </div>
       
      </div>
    </div>


    <br></br>


    <div class="services" style="background-image: url(assets/images/bk.jpg);" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 style="font-family:serif; color:black; font-size:30px;">Popular Turf Localities</h2>
            </div>
          </div>
          <div>
            <h4 style="font-family:cursive;color:brown;">Explore Turfs In And Around Popular Areas Of Your City..</h4>
            <br><br>
          <table class="table table-bordered">
                <tr>
                <td style="font-size:20px;">Place</td>
                <td style="font-size:20px;">Turf Name</td>
                </tr>

                @foreach($res as $val)
                <tr>
                <td>{{$val->place}}</td>
                <td>{{$val->tname}}</td>
                </tr>
                @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>


    <div class="services" style="background-image: url(assets/images/bk.jpg);" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 style="font-family:serif; color:black; font-size:30px;">Take A Look At Our Turfs..!!</h2>
            </div>
          </div>
          <div>
          <table class="table table-bordered">
                <tr>
                <td style="font-size:20px;">Turf Name</td>
                <td style="font-size:20px;">Place</td>
                <td style="font-size:20px;">Turf Type</td>
                <td style="font-size:20px;">Description</td>
                </tr>

                @foreach($result as $value)
                <tr>
                <td>{{$value->tname}}</td>
                <td>{{$value->place}}</td>
                <td>{{$value->type}}</td>
                <td>{{$value->desc}}</td>
                </tr>
                @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>


    

    <div class="services" style="background-image: url(assets/images/bk.jpg);" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 style="font-family:serif; color:black; font-size:30px;">Add Much Sports To Your Life..!!</h2>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="" class="services-item-image"><img style="height: 230px; width: 230px;" src="assets/images/t2.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="">Play Cricket..??</a></h4>
                

                <p style="margin: 0;"> Don't Miss!! </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="" class="services-item-image"><img style="height: 250px; width: 250px;" src="assets/images/t3.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="">Warm Up Here!!</a></h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="" class="services-item-image"><img style="height: 250px; width: 250px;" src="assets/images/t4.jpeg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="">Night View..</a></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br><br>
    <div>
    <h2 style="color:black; font-family:serif;">Payment Methods</h2>
    <br>
    <a href=""><img src="assets/images/gpay.png" style="height: 70px; width: 80px;" alt=""></a>
    <a href=""><img src="assets/images/phonepe.png" style="height: 70px; width: 80px;margin: 20px;" alt=""></a>
    <a href=""><img src="assets/images/paytm.png" style="height: 70px; width: 80px;" alt=""></a>
    </div>

   
    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Our Goal Is Making Sports Simple #LetTheWorldPlay</h4>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                  <a href="/contactus" class="filled-button">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
   