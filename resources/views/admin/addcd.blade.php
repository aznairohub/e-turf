@extends('admin.header')
@section('main-body')

<div class="container">
            <div class="col">
                <div class="row-sm-6">
                <h2 style="font-family: serif;">Add Contact Details</h2>
                </div>
            </div>
        </div>
        <br><br><br>

<div class="container">
<div class="row-sm-6">
    <form action="/addc" method="post">
        @csrf
        <!-- <div class="form-group">
            <label for="tc">Terms And Conditions</label>
            <textarea name="tc" id="tc" class="form-control"></textarea> -->
            <!-- <input type="text" name="tname" id="name" class="form-control"> -->
        <!-- </div> -->
        <div class="form-group">
            <label for="place">Location</label>
            <input type="text" name="place" id="place" class="form-control">
        </div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <!-- <textarea name="desc" id="desc" class="form-control"></textarea> -->
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add</button>
        @if (session('error'))
        <p style="color:red"> {{ session('error') }} </p> 
        @endif
    </form>
</div>
</div>

@endsection