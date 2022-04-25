@extends('user.header')
@section('main-body')
<div class="page-heading contact-heading header-text" style="background-image: url(assets/images/heading-4-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2 style="font-family:serif; color:white;">Admin Login</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
            <div class="col">
                <div class="row-sm-6">
                <h2 style="font-family: serif;text-align:center;">Login</h2>
                </div>
            </div>
        </div>
        <div class="container">
        <div class="row-sm-6">
            <form action="/log" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Enter Email" name="email">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password" name="password">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                @if (session('error'))
                <p style="color:red"> {{ session('error') }} </p> 
                @endif
            </form>
        </div>
        </div>
@endsection
