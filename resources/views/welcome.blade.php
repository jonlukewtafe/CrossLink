@extends('layouts.layout')
@section('title' , 'CrossLink - Home')
@section('content')
    <br>
    <div class="callout small-12 medium-12 large-12 text-center">
        <p>This is a brand new version of the CrossLink Bookmarking System</p>
        @guest()
            <p><b>You are not logged in. To be able to utilize the complete system, you must register or login</b></p>
        @endguest
        @role('administrator')
        <h1>YOU ARE AN ADMINISTRATOR!</h1>
        @endrole
        @role('user')
        <h1>You are only and ordinary user :(</h1>
        @endrole
    </div>
@endsection