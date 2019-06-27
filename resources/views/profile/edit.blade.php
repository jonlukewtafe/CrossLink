@extends('layouts.layout')

@section ('title' , 'CrossLink - Edit Profile - ' . $profile->first_name . ' ' . $profile->surname')

@section('content')
    <br>
    <div class="grid-x grid-padding-x">
        <div class="small-12 medium-12 large-12 callout text-center">
            <h3>Edit Bookmark</h3>
        </div>
        @if($errors->any())
            <div class="small-12 medium-12 large-12 callout alert ">
                @foreach ($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
        <form method="post" enctype="multipart/form-data" action="{{ route('bookmarks.update', $bookmark->id) }}" class="callout small-12 medium-12 large-12" name="editBookmark">
            @method('PATCH')
            @csrf
            <div class=" grid-x grid-margin-x">
                <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                    <label for="title">Title
                        <input type="text" name="title" value="{{ $bookmark->title }}">
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1  small-12">
                    <label for="url">URL
                        <textarea name="url">{{ $bookmark->url }} </textarea>
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1  small-12">
                    <label for="description">Description
                        <textarea name="description">{{ $bookmark->description }}</textarea>
                    </label>
                </div>
                <div class="large-10 large-offset-1 medium-10 medium-offset-1  small-12">
                    <h5>Tags</h5>
                    <div class="form-group">
                        <textarea name="tag" class="form-control-file">
                            {{--@foreach($bookmark->tags as $aTag)
                                {{$aTag->name}}
                            @endforeach--}}
                        </textarea>
                    </div>
                </div>
                <div class="large-offset-1 medium-offset-1">
                    <a href="/bookmarks/{{$bookmark->id}}" type="submit" class="button">Back</a>
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