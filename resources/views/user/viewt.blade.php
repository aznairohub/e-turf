@extends('user.uheader')
@section('main-body')
<br><br><br>
<br><br>
<h2 style="font-family: serif;">Turfs List</h2>    
    <div>
            <table class="table table-bordered">
                <tr>
                <td style="font-size:20px;">ID</td>
                <td style="font-size:20px;">Turf Name</td>
                <td style="font-size:20px;">Place</td>
                <td style="font-size:20px;">Turf Type</td>
                <td style="font-size:20px;">Description</td>
                <td style="font-size:20px;">Turf Price</td>
                </tr>

                @foreach($result as $value)
                <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->tname}}</td>
                <td>{{$value->place}}</td>
                <td>{{$value->type}}</td>
                <td>{{$value->desc}}</td>
                <td>{{$value->price}}</td>
                <td><a href="/book/{{$value->id}}">Book</a></td>
                </tr>
                @endforeach
            </table>
        </div>
@endsection