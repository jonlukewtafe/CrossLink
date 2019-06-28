@extends('layouts.layout')
@section('title' , 'CrossLink - Profile - ' . $profile->first_name . ' ' . $profile->surname)
@section('content')
    <div class="table-scroll">
        @unlessrole('user_administrator')
        <a href="/profiles/{{$profile->id}}/edit" class="button success">Edit Profile</a>
        @endunlessrole
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
        @hasrole('user_administrator')
        <h1>All User Profiles</h1>
        <table>
            <tr>
                <th>First Name</th>
                <th>Surname</th>
                <th>Photo</th>
                <th>Email Address</th>
                <th>Details</th>
            </tr>
            @foreach($users as $aUser)
                <tr>
                    <td><p>{{ $aUser->first_name }}</p></td>
                    <td><p>{{ $aUser->surname }}</p></td>
                    <td><img src="/images/profiles/{{ $aUser->image }}"/></td>
                    <td><p>{{$aUser->email}}</p></td>
                    <td><a href="/profiles/{{$aUser->id}}/edit" class="button success">Edit Profile</a></td>
                </tr>
            @endforeach
        </table>
        @endhasrole


    </div>
@endsection
