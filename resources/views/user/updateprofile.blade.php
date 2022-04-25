@extends('user.uheader')
@section('main-body')

    <div class="page-heading contact-heading header-text" style="background-image: url(assets/images/heading-4-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2 style="font-family:serif; color:white;">Update Profile</h2>
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
                <td style="font-size:20px;">Name</td>
                <td style="font-size:20px;">User Name</td>
                <td style="font-size:20px;">Contact</td>
                <td style="font-size:20px;">City</td>
                <td style="font-size:20px;">Email</td>
                </tr>

                @foreach($result as $value)
                <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->uname}}</td>
                <td>{{$value->phone}}</td>
                <td>{{$value->city}}</td>
                <td>{{$value->email}}</td>
                <td><a href="/editprofile/{{$value->id}}">Edit</a></td>
                </tr>
                @endforeach
            </table>
        </div>
@endsection