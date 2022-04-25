@extends('admin.header')
@section('main-body')
    <h2>View Turfs</h2>    
    <div>
            <table class="table table-bordered">
                <tr>
                <td style="font-size:20px;">ID</td>
                <td style="font-size:20px;">Turf Name</td>
                <td style="font-size:20px;">Place</td>
                <td style="font-size:20px;">Turf Type</td>
                <td style="font-size:20px;">Description</td>
                <td style="font-size:20px;">Turf Price</td>
                <td style="font-size:20px;">Manager Assigned</td>
                </tr>

                @foreach($result as $value)
                <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->tname}}</td>
                <td>{{$value->place}}</td>
                <td>{{$value->type}}</td>
                <td>{{$value->desc}}</td>
                <td>{{$value->price}}</td>
                <td>{{$value->manager}}</td>
                </tr>
                @endforeach
            </table>
        </div>
@endsection