@extends('admin.header')
@section('main-body')

<div class="container">
            <div class="col">
                <div class="row-sm-6">
                <h2 style="font-family: serif;">Add Terms And Conditions</h2>
                </div>
            </div>
        </div>
        <br><br><br>

<div class="container">
<div class="row-sm-6">
    <form action="/addtc" method="post">
        @csrf
        <div class="form-group">
            <label for="tc">Terms And Conditions</label>
            <textarea name="tc" id="tc" class="form-control"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add</button>
    </form>
</div>
</div>

@endsection