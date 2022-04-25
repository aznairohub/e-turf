@extends('user.uheader')
@section('main-body')
    <br><br><br>
    <br><br>
    
    <div class="container">
            <div class="col">
                <div class="row-sm-6">
                <h2 style="font-family: serif;text-align:center;">Book Turf</h2>
            </div>
    </div>

            <div class="container">
            <div class="row-sm-6">
            
            <form action="/bk/" method="post" id="">
                @csrf
                @foreach($result as $value)

            <div class="form-group">
                <label for="tname">Turf Name</label>
                <input type="text" class="form-control" value="{{$value->tname}}" name="tname">
            </div>

            <div class="form-group">
                <label for="type">Turf Type</label>
                <select class="form-control" name="type" id="type">
                    <option value="{{$value->type}}">{{$value->type}}</option>
                </select>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="price" class="form-control" name="price" value="{{$value->price}}">
            </div>

            <div class="form-group">
                <label for="place">Place</label>
                <input type="place" class="form-control" name="place" value="{{$value->place}}">
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date">
            </div>

            <div class="form-group">
                <label for="time">Time</label>
                <input type="time" class="form-control" name="time">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Book</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection