@extends('user.uheader')
@section('main-body')

        <br><br><br>
        <br><br>
          <div class="container">
            <div class="col">
                <div class="row-sm-6">
                <h2 style="font-family: serif;text-align:center;">Send Message</h2>
                </div>
            </div>

            <div class="container">
            <div class="row-sm-6">
            <form action="/snd" method="post" id="form">
                @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" placeholder="Your Name" name="name">
            </div>

            <div class="form-group">
                <label for="uname">Email</label>
                <input type="text" class="form-control" placeholder="Email" name="email">
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" placeholder="Enter Subject" name="subject">
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="4" class="form-control" placeholder="Write Message.."></textarea>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection