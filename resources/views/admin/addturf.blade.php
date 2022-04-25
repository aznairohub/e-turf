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
    <form action="/addt" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Turf Name</label>
            <input type="text" name="tname" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="place">Turf Location</label>
            <input type="text" name="place" id="place" class="form-control">
        </div>
        <div class="form-group">
            <label for="type">Turf Type</label>
            <select class="form-control" name="type" id="type">
                <option value="">-- Choose --</option>
                <option value="Garden Lawn Turf">Garden Lawn Turf</option>
                <option value="Garden Grass Turf">Garden Grass Turf</option>
                <option value="Landscape Lawn Turf">Landscape Lawn Turf</option>
                <option value="Landscape Grass Turf">Landscape Grass Turf</option>
            </select>
        </div>
        <div class="form-group">
            <label for="details">Description</label>
            <textarea name="desc" id="desc" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price Details</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="manager">Manager</label>
            <select class="form-control" name="manager" id="manager">
            <option value="">--Choose--</option>
            @foreach($result as $value)
            @if($value->status=='Approved')
                <option value="{{$value->id}}">{{$value->mname}}</option>
            @endif
            @endforeach
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add</button>
    </form>
</div>
</div>

@endsection