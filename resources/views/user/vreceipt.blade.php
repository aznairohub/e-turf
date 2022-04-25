@extends('user.uheader')
@section('main-body')
<br><br><br>
<br><br><br>
<center><h2 style="font-family:serif">View Bookings</h2></center>  
    <div>
            <table class="table table-bordered">
                <tr>
                <td style="font-size:20px;">Name</td>
                <td style="font-size:20px;">Turf Name</td>
                <td style="font-size:20px;">Turf Type</td>
                <td style="font-size:20px;">Place</td>
                <td style="font-size:20px;">Date</td>
                <td style="font-size:20px;">Time</td>
                <td style="font-size:20px;">Turf Price</td>
                <td style="font-size:20px;">Status</td>
                </tr>

                @foreach($result as $value)
                <tr>
                <td>{{$value->name}}</td>
                <td>{{$value->tname}}</td>
                <td>{{$value->ttype}}</td>
                <td>{{$value->place}}</td>
                <td>{{$value->date}}</td>
                <td>{{$value->time}}</td>
                <td>{{$value->price}}</td>
                <td>{{$value->status}}</td>
                <td><a href="/vbill/{{$value->id}}">View Bill</a></td>
                </tr>
                @endforeach
            </table>
        </div>
@endsection