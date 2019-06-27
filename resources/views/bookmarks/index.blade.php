@extends('layouts.layout')
@section('title' , 'CrossLink - Bookmarks')
@section('content')
    <div class="table-scroll">
        <a href="{{action('BookmarksController@create')}}" class="button">Create New Bookmark</a>
        <table>
            <tr>
                <h3>Public Bookmarks</h3>
            </tr>
            <tr>
                <th>Bookmark Name</th>
                <th>URL</th>
                <th>Short Description</th>
                <th>Thumbnail</th>
                <th>Details</th>
            </tr>
            @foreach($bookmarks as $aBookmark)
                @if($aBookmark->public == 1 || $aBookmark->user_id == 1)
                    <tr>
                        <td><p>{{ $aBookmark->title }}</p></td>
                        <td><a href="{{$aBookmark->url}}">{{ $aBookmark->url }}</a></td>
                        <td><p>{{ $aBookmark->description }}</p></td>
                        <td><img src="/images/bookmarks/{{$aBookmark->thumbnail}}"/></td>
                        <td><a href="/bookmarks/{{ $aBookmark->id }}">Details</a></td>
                    </tr>
                @endif
            @endforeach
        </table>
        <table>
            <tr>
                <h3>Private Bookmarks</h3>
            </tr>
            @hasrole('user')
            <tr>
                <th>Bookmark Name</th>
                <th>URL</th>
                <th>Short Description</th>
                <th>Thumbnail</th>
                <th>Details</th>
            </tr>
            @foreach($bookmarks as $aBookmark)
                @if($aBookmark->user_id == $user)
                    @if($aBookmark->public == 0)
                        <tr>
                            <td><p>{{ $aBookmark->title }}</p></td>
                            <td><a href="{{$aBookmark->url}}">{{ $aBookmark->url }}</a></td>
                            <td><p>{{ $aBookmark->description }}</p></td>
                            <td><img src="/images/bookmarks/{{$aBookmark->thumbnail}}"/></td>
                            <td><a href="/bookmarks/{{ $aBookmark->id }}">Details</a></td>
                        </tr>
                    @endif
                @endif
            @endforeach
            @endhasrole

            @hasrole('administrator')
            <tr>
                <th>Bookmark Name</th>
                <th>URL</th>
                <th>Short Description</th>
                <th>Thumbnail</th>
                <th>Username</th>
                <th>Details</th>
            </tr>
            @foreach($bookmarks as $aBookmark)
                @if($aBookmark->public == 0)
                    <tr>
                        <td><p>{{ $aBookmark->title }}</p></td>
                        <td><a href="{{$aBookmark->url}}">{{ $aBookmark->url }}</a></td>
                        <td><p>{{ $aBookmark->description }}</p></td>
                        <td><img src="/images/bookmarks/{{$aBookmark->thumbnail}}"/></td>
                        <td><p>{{$aBookmark->user_id}}</p>
                        <td><a href="/bookmarks/{{ $aBookmark->id }}">Details</a></td>
                    </tr>
                @endif
            @endforeach
            @endhasrole
        </table>
    </div>
@endsection
