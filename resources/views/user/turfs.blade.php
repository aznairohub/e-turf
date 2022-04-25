@extends('user.header')
@section('main-body')
<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-1-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2 style="font-family:serif; color:white;">Our Turfs</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
<br><br>
    <div>
       <table class="table table-bordered">
            <tr>
                <td style="font-size:20px;">ID</td>
                <td style="font-size:20px;">Turf Name</td>
                <td style="font-size:20px;">Place</td>
                <td style="font-size:20px;">Turf Type</td>
                <td style="font-size:20px;">Description</td>
                <td style="font-size:20px;">Turf Price</td>
            </tr>

            @foreach($res as $val)
            <tr>
                <td>{{$val->id}}</td>
                <td>{{$val->tname}}</td>
                <td>{{$val->place}}</td>
                <td>{{$val->type}}</td>
                <td>{{$val->desc}}</td>
                <td>{{$val->price}}</td>
            </tr>
            @endforeach
       </table> 
    </div>
@endsection