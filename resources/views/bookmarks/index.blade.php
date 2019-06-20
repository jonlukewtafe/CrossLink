@extends('layouts.layout')

@section('content')
    <div class="table-scroll">
        <table class="stack">
            <tr>
                <th>Bookmark Name</th>
                <th>Street Location</th>
                <th>Short Description</th>
                <th>Details</th>
            </tr>
            @foreach($bookmarks as $aBookmark)
                <tr>
                    <td><p>{{ $aBookmark->name }}</p></td>
                    <td><p>{{ $aBookmark->street_location }}</p></td>
                    <td><p>{{ $aBookmark->short_desc }}</p></td>
                    <td><a href="/bookmarks/{{ $aBookmark->id }}">Details</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
