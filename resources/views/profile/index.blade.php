@extends('layouts.layout')
@section('title' , 'CrossLink - Profile - ' . $profile->first_name . ' ' . $profile->surname)
@section('content')
    <div class="table-scroll">
        <a href="/profiles/{{$profile->id}}/edit" class="button success">Edit Profile</a>
        <h1>Profile</h1>
        <table>
            <tr>
                <th>First Name</th>
                <th>Surname</th>
                <th>Photo</th>
                <th>Email Address</th>
            </tr>
            <tr>
                <td><p>{{ $profile->first_name }}</p></td>
                <td><p>{{ $profile->surname }}</p></td>
                <td><img src="/images/profiles/{{ $profile->image }}"/></td>
                <td><p>{{$profile->email}}</p></td>
            </tr>
        </table>
    </div>
@endsection
