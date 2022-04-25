@extends('manager.header')
@section('main-body')

<div class="container">
            <div class="col">
                <div class="row-sm-6">
                <h2 style="font-family: serif;text-align:center;">Generate Bill</h2>
                </div>
            </div>

            <div class="container">
            <div class="row-sm-6">
            @foreach($res as $val)
            <form action="/gbill/{{$val->id}}" method="post" id="form">
                
                @csrf
                
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" value=" {{$val->name}}" name="name" >
            </div>
            
            <div class="form-group">
                <label for="tname">Turf Name</label>
                <input type="text" class="form-control" name="tname" value="{{$val->tname}}">
            </div>

            <div class="form-group">
                <label for="ttype">Turf Type</label>
                <input type="text" class="form-control" name="ttype" value="{{$val->ttype}}">
            </div>

            <div class="form-group">
                <label for="place">Place</label>
                <input type="text" class="form-control" name="place" value="{{$val->place}}">
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date" value="{{$val->date}}">
            </div>

            <div class="form-group">
                <label for="time">Time</label>
                <input type="time" class="form-control" name="time" value="{{$val->time}}">
            </div>

            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" class="form-control" name="price" value="{{$val->price}}">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" name="status">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Generate</button>
            
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection