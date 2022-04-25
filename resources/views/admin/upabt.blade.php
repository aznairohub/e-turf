@extends('admin.header')
@section('main-body')
        <div class="container">
        <div class="row-sm-6">
            <form action="/up" method="post">
                @csrf
                @foreach($result as $value)
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" id="about" class="form-control">{{$value->about}}</textarea>
                </div>
                @endforeach
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
                @if (session('error'))
                <p style="color:red"> {{ session('error') }} </p> 
                @endif
            </form>
        </div>
        </div>
@endsection