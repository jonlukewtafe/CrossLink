@extends('layouts.layout')
@section('title' , 'CrossLink - Bookmarks - ' . $bookmark->id)
@section('content')
    <br>
    <div class="grid-x grid-padding-x">
        <div class="callout small-12 medium-12 large-12 text-center">
            <h2>Bookmark - {{ $bookmark->title }}</h2>
            <a href="/bookmarks/" class="button">Back</a>
            @can('edit')
                <a href="{{$bookmark->id}}/edit" class="button success">Edit Bookmark</a>
            @endcan
            @can('delete')
                <p>
                <form action="{{ url('/bookmarks', ['id' => $bookmark->id ]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="button alert" type="submit">Delete Bookmark</button>
                </form>
                </p>
            @endcan
        </div>
        <div class="small-12 medium-12 large-12 callout">
            <table>
                <tr>
                    <th>ID</th>
                    <td> {{ $bookmark->id}}
                    <td>
                </tr>
                <tr>
                    <th>Thumbnail</th>
                    <td>{{$image}}</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td> {{ $bookmark->title }}
                    <td>
                </tr>
                <tr>
                    <th>URL</th>
                    <td><a href="{{$bookmark->url}}"> {{ $bookmark->url }}</a>
                    <td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td> {{ $bookmark->description }}
                    <td>
                </tr>
                <tr>
                    <th>created_at</th>
                    <td> {{ $bookmark->created_at }}
                    <td>
                </tr>
                <tr>
                    <th>updated_at</th>
                    <td> {{ $bookmark->updated_at }}
                    <td>
                </tr>
            </table>
        </div>
    </div>
    @can('edit')
        <div class="small-12 medium-12 large-12 callout">
            <h3>Tags</h3>
            @if($bookmark->tags == null)
                <p>This bookmark has no tags</p>
            @else
                <ul>
                    @foreach($bookmark->tags as $aTag)
                        <a href="../../tags/{{$aTag->tag_id}}">
                            <li>{{$aTag->name}}</li>
                        </a>
                    @endforeach
                </ul>
            @endif
        </div>
    @endcan
    @can('delete')
        <div class="reveal" id="delete" data-reveal>
            <h1>Are you sure?</h1>
            <p class="lead">Do you wish to delete this?</p>

        </div>
    @endcan
@endsection
