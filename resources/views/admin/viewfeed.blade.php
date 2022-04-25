@extends('admin.header')
@section('main-body')
    <h2>View Feedbacks</h2>
    <div>
            <table class="table table-bordered">
                <tr>
                <td style="font-size:20px;">ID</td>
                <td style="font-size:20px;">Name</td>
                <td style="font-size:20px;">Subject</td>
                <td style="font-size:20px;">Feedback</td>
                </tr>

                @foreach($result as $value)
                <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->subject}}</td>
                <td>{{$value->message}}</td>
                </tr>
                @endforeach
            </table>
        </div>
@endsection