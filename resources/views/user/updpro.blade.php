@extends('user.uheader')
@section('main-body')

    <div class="page-heading contact-heading header-text" style="background-image: url(/assets/images/heading-6-1920x500.jpg);">
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

    <br><br>
    <div class="container">
            <div class="row-sm-6">
                @foreach($result as $value)
            <form action="/edt/{{$value->id}}" method="post" id="form">
                @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{$value->name}}">
            </div>

            <div class="form-group">
                <label for="uname">User Name</label>
                <input type="text" class="form-control" placeholder="Enter User Name" name="uname" value="{{$value->uname}}">
            </div>

            <div class="form-group">
                <label for="phone">Contact Number</label>
                <input type="number" class="form-control" placeholder="Enter Phone Number" name="phone" value="{{$value->phone}}">
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <input type="city" class="form-control" placeholder="Enter City" name="city" value="{{$value->city}}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="Enter Email" name="email" value="{{$value->email}}">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" placeholder="Enter Password" name="password" value="{{$value->password}}">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


@endsection