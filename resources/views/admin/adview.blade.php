@extends('admin.header')
@section('main-body')

    <div>
            <h2>Managers List</h2>
            <table class="table table-bordered">
                <tr>
                    <td style="font-size:20px;">ID</td>
                    <td style="font-size:20px;">Manager Name</td>
                    <td style="font-size:20px;">Username</td>
                    <td style="font-size:20px;">Phone</td>
                    <td style="font-size:20px;">City</td>
                    <td style="font-size:20px;">Email</td>
                    <td style="font-size:20px;">Password</td>
                    <td style="font-size:20px;">Status</td>
                </tr>

                @foreach($result as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->mname}}</td>
                    <td>{{$value->uname}}</td>
                    <td>{{$value->phone}}</td>
                    <td>{{$value->city}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->password}}</td>
                    <td>{{$value->status}}</td>
                    <td><a href="/approve/{{$value->id}}">Approve</a></td>
                    <td><a href="/decline/{{$value->id}}">Decline</a></td>
                </tr>
                @endforeach
            </table>
    </div>
@endsection