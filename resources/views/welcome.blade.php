@extends('layouts.layout')
@section('title' , 'CrossLink - Home')
@section('content')
    <br>
    <div class="callout small-12 medium-12 large-12 text-center">
        <h2>Hello {{ Auth::user()->name }}</h2>
        <p>This is a brand new version of the CrossLink Bookmarking System</p>

    </div>
@endsection