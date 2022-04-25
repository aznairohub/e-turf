@extends('admin.header')
@section('main-body')

<div class="container">
            <div class="col">
                <div class="row-sm-6">
                <h2 style="font-family: serif;">Add Gallery</h2>
                </div>
            </div>
        </div>
        <br><br><br>

<div class="container">
<div class="row-sm-6">
    <form action="/addg" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="desc">Description</label>
            <input type="text" name="desc" id="desc" class="form-control">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add</button>
        @if (session('error'))
        <p style="color:red"> {{ session('error') }} </p> 
        @endif
    </form>
</div>
</div>

@endsection