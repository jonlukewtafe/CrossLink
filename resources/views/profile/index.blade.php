@extends('layouts.layout')
@section('title' , 'CrossLink - Profile - ' . $profile->first_name . ' ' . $profile->surname)
@section('content')
    <div class="table-scroll">
        <!--<a href="/profiles/edit/{{$profile->user_id}}" class="button">Create New Bookmark</a>-->
        <h1>Profile</h1>
        <table>
            <tr>
                <th>Photo</th>
                <th>Email Address</th>
                <th>First Name</th>
                <th>Surname</th>
            </tr>
            <tr>
                <td><img src="/images/profiles/{{ $profile->photo }}"/></td>
                <td><p>{{$profile->email_address}}</p></td>
                <td><p>{{ $profile->first_name }}</p></td>
                <td><p>{{ $profile->surname }}</p></td>
            </tr>
        </table>
    </div>
@endsection
