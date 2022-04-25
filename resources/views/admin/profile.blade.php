@extends('admin.header')
@section('main-body')
    <br><br><br>
    <br><br>
    <!-- <br><br><br> -->
<div class="container">
            <div class="col">
                <div class="row-sm-6">
                <h2 style="font-family: serif;text-align:center;">Admin Profile</h2>
                </div>
            </div>

            <div class="container">
            <div class="row-sm-6">
            @foreach($result as $value)
            <form action="/adprofile" method="post" id="form">
                @csrf
            <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" class="form-control" placeholder="Enter User Name" name="username" value="{{$value->username}}">
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