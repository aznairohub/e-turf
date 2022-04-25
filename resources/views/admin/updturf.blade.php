@extends('admin.header')
@section('main-body')

<div class="container">
            <div class="col">
                <div class="row-sm-6">
                <h2 style="font-family: serif;">Add Turf</h2>
                </div>
            </div>
        </div>
        <br><br><br>

<div class="container">
<div class="row-sm-6">
    @foreach($result as $value)
    <form action="/uptf/{{$value->id}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Turf Name</label>
            <input type="text" name="tname" id="name" class="form-control" value="{{$value->tname}}">
        </div>
        <div class="form-group">
            <label for="place">Turf Location</label>
            <input type="text" name="place" id="place" class="form-control" value="{{$value->place}}">
        </div>
        <div class="form-group">
            <label for="type">Turf Type</label>
            <!-- <select class="form-control" name="type" id="type"> -->
                <!-- <option value="{{$value->type}}"></option> -->
                <!-- <option value="Garden Lawn Turf" value="{{$value->type}}">Garden Lawn Turf</option>
                <option value="Garden Grass Turf" value="{{$value->type}}">Garden Grass Turf</option>
                <option value="Landscape Lawn Turf" value="{{$value->type}}">Landscape Lawn Turf</option>
                <option value="Landscape Grass Turf" value="{{$value->type}}">Landscape Grass Turf</option> -->
            <!-- </select> -->
            <input type="text" name="type" id="type" class="form-control" value="{{$value->type}}">
        </div>
        <div class="form-group">
            <label for="details">Description</label>
            <textarea name="desc" id="desc" class="form-control" value="{{$value->desc}}">{{$value->desc}}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Price Details</label>
            <input type="text" name="price" id="price" class="form-control" value="{{$value->price}}">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </form>
    @endforeach
</div>
</div>

@endsection