@extends('layouts.default')

@section('content')
    <br><br><br>




    <h1>Contact</h1>
    <p class="lead">PLease us this to contact the site owner.</p>

    <form>
        <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" class="form-control" id="email" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="body">Message</label>
            <textarea name="body"class="form-control" id="body" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>




@endsection
