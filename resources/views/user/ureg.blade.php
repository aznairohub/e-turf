@extends('user.header')
@section('main-body')
    <br><br><br>
    <br><br>
    <!-- <br><br><br> -->
<div class="container">
            <div class="col">
                <div class="row-sm-6">
                <h2 style="font-family: serif;text-align:center;">User Register</h2>
                    <!-- <img src="em.jpg" alt="em.jpg" height="250px" width="100%"> -->
                </div>
            </div>

            <div class="container">
            <div class="row-sm-6">
            <form action="/userreg" method="post" id="form">
                @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name" >
            </div>

            <div class="form-group">
                <label for="uname">User Name</label>
                <input type="text" class="form-control" placeholder="Enter User Name" name="uname">
            </div>

            <div class="form-group">
                <label for="phone">Contact Number</label>
                <input type="number" class="form-control" placeholder="Enter Phone Number" name="phone">
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <input type="city" class="form-control" placeholder="Enter City" name="city">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="Enter Email" name="email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Enter Password" name="password">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
        <script type="text/javascript">
            $('#form').validate({
                rules:
                {
                    name:{
                        required:true,
                        minlength:2
                    },
                    uname:{
                        required:true
                    },
                    phone:{
                        required:true
                    },
                    city:{
                        required:true
                    },
                    email:{
                        required:true,
                        email:true
                    },
                    password:{
                        required:true,
                        minlength:3
                    },
                }
            });
        </script>


@endsection