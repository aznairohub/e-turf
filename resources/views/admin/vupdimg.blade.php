@extends('admin.header')
@section('main-body')

<div class="container">
            <div class="col">
                <div class="row-sm-6">
                <h2 style="font-family: serif;">Edit Images</h2>
                </div>
            </div>
        </div>
        <br><br><br>

<div class="container">
<div class="row-sm-6">
    @foreach($result as $value)
    <form action="/up/{{$value->id}}" method="post" enctype="multipart/form-data">
        
        @csrf
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control" value="{{$value->image}}">
            <img src="{{asset('uploads/'.$value->image)}}" alt="">
        </div>
        <div class="form-group">
            <label for="desc">Description</label>
            <input type="text" name="desc" id="desc" class="form-control" value="{{$value->desc}}">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
        @if (session('error'))
        <p style="color:red"> {{ session('error') }} </p> 
        @endif
    </form>
    @endforeach
</div>
</div>

@endsection