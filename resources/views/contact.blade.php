@extends('layouts.app')

@section('content')

<h1>Contact</h1>

<form action="{{action('MessagesController@submit')}}" method="post">

    <?= csrf_field() ?>

    <div class="form-group">
        <label for="name">Name</label>
        <input type="name" class="form-control" id="name" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="Email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control " id="message" rows="5" placeholder="Enter Your Message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection
