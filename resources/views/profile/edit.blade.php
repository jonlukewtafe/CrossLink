@extends('layouts.layout')

@section ('title' , 'CrossLink - Edit Profile - ' . $profile->first_name . ' ' . $profile->surname)

@section('content')
    <br>
    <div class="grid-x grid-padding-x">
        @if($errors->any())
            <div class="small-12 medium-12 large-12 callout alert ">
                @foreach ($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
        <form method="post" enctype="multipart/form-data" action="{{ route('profiles.update', $profile->id) }}" class="callout small-12 medium-12 large-12" name="editUser">
            @method('PATCH')
            @csrf
            <div class=" grid-x grid-margin-x">
                <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                    <label for="first_name">First Name
                        <input type="text" name="first_name" value="{{ $profile->first_name }}">
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1  small-12">
                    <label for="surname">Surname
                        <textarea name="surname">{{ $profile->surname }} </textarea>
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1  small-12">
                    <label for="email">Email Address
                        <textarea name="email">{{ $profile->email }}</textarea>
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1  small-12">
                    <label for="password">Password
                        <textarea name="password"></textarea>
                    </label>
                </div>
                <div class="large-offset-3 medium-offset-3 hide-for-small-only">
                    <input type="reset" class="button alert" value="Clear Form">
                </div>
                <div class="large-offset-4 medium-offset-3 small-offset-5">
                    <input type="submit" class="button success" value="Update">
                </div>
            </div>
        </form>
    </div>
@endsection