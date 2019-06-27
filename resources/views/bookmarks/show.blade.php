@extends('layouts.layout')
@section('title' , 'CrossLink - Bookmarks')
@section('content')
    <br>
    <div class="grid-x grid-padding-x">
        <div class="callout small-12 medium-12 large-12 text-center">
            <h2>Bookmark - {{ $bookmark->title }}</h2>
            <a href="/bookmarks/" class="button">Back</a>
            <a href="{{$bookmark->id}}/edit" class="button success">Edit Bookmark</a>
            <p>
                <button class="button alert" data-open="modal">Delete Bookmark</button>
            </p>
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
    @hasanyrole('user|administrator')
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
    @endhasanyrole
    <div class="reveal" id="modal" data-reveal>
        <h1>Are you sure?</h1>
        <p class="lead">Do you wish to delete this?</p>
        <form action="{{url('/bookmarks', [$bookmark->id])}}" method="POST">
            {{method_field('DELETE')}}
            {{csrf_field()}}
            <input type="submit" class="button alert float-right" value="Delete"/>
        </form>
        <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endsection
