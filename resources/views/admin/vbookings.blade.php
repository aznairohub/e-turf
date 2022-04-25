@extends('admin.header')
@section('main-body')

<h2>View Bookings</h2>
<div>
            <table class="table table-bordered">
                <tr>
                <td style="font-size:20px;">ID</td>
                <td style="font-size:20px;">User ID</td>
                <td style="font-size:20px;">Turf Name</td>
                <td style="font-size:20px;">Turf Type</td>
                <td style="font-size:20px;">Turf Price</td>
                <td style="font-size:20px;">Place</td>
                <td style="font-size:20px;">Date</td>
                <td style="font-size:20px;">Time</td>
                <td style="font-size:20px;">Status</td>
                </tr>

                @foreach($result as $value)
                <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->userid}}</td>
                <td>{{$value->tname}}</td>
                <td>{{$value->ttype}}</td>
                <td>{{$value->price}}</td>
                <td>{{$value->place}}</td>
                <td>{{$value->date}}</td>
                <td>{{$value->time}}</td>
                <td>{{$value->status}}</td>
                </tr>
                @endforeach
            </table>
        </div>

@endsection