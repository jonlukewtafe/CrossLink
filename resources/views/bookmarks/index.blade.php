@extends('layouts.layout')
@section('title' , 'CrossLink - Bookmarks')
@section('content')
    <div class="table-scroll">
        <table>
            <tr>
                <th>Bookmark Name</th>
                <th>URL</th>
                <th>Short Description</th>
                <th>Details</th>
            </tr>
            @foreach($bookmarks as $aBookmark)
                <tr>
                    <td><p>{{ $aBookmark->title }}</p></td>
                    <td><a href="{{$aBookmark->url}}">{{ $aBookmark->url }}</a></td>
                    <td><p>{{ $aBookmark->description }}</p></td>
                    <td><p>{{ $aBookmark->thumbnail }}</p></td>
                    <td><a href="/bookmarks/{{ $aBookmark->id }}">Details</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
