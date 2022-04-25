@extends('admin.header')
@section('main-body')

<div class="container">
            <div class="col">
                <div class="row-sm-6">
                <h2 style="font-family: serif;">Update Photos</h2>
                </div>
            </div>
        </div>
        <br><br><br>

        <table class="table table-bordered">
            <tr>
                    <td style="font-size:20px;">ID</td>
                    <td style="font-size:20px;">Image</td>
                    <td style="font-size:20px;">Image Description</td>
            </tr>
            @foreach($result as $value)
            <tr>
                    <td>{{$value->id}}</td>
                    <td ><img style="height: 450px; width: 450px;" src="{{asset('uploads/'.$value->image)}}" alt=""></td>
                    <td>{{$value->desc}}</td>
                    <td><a href="/vupdimg/{{$value->id}}">Update</a></td>
            </tr>
            @endforeach
        </table>

@endsection