@extends('admin.header')
@section('main-body')

<div class="container">
            <div class="col">
                <div class="row-sm-6">
                <h2 style="font-family: serif;">Add About</h2>
                </div>
            </div>
        </div>

        <br><br><br>

        <div class="container">
        <div class="row-sm-6">
            <form action="/addab" method="post">
                @csrf
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" id="about" class="form-control"></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Add</button>
                @if (session('error'))
                <p style="color:red"> {{ session('error') }} </p> 
                @endif
            </form>
        </div>
        </div>

@endsection