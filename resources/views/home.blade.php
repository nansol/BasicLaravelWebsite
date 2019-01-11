@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam aliquid veniam nisi mollitia deserunt ex at fugit illo quisquam neque necessitatibus optio delectus dolore rem autem, eaque deleniti culpa harum.</p>
@endsection


@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection
