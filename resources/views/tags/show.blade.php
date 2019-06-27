@extends('layouts.layout')
@section('title' , 'CrossLink - All Tags')
@section('content')
    <br>
    <div class="grid-x grid-padding-x">
        <div class="callout small-12 medium-12 large-12 text-center">
            <h2>Tag - {{ $tag->name }}</h2>
            <a href="/tags/" class="button">Back</a>
            @hasrole('administrator')
        <!--<a href="{{--action('TagsController@destory')--}}" class="button alert">Delete Tag</a>
                <button class="button alert" data-open="modal">Delete Tag</button>-->
            @endhasrole
        </div>
        <div class="small-12 medium-12 large-12 callout">
            <table>
                <tr>
                    <th>ID</th>
                    <td> {{ $tag->tag_id}}
                    <td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td> {{ $tag->name }}
                    <td>
                </tr>
                <tr>
                    <th>Name Normalized</th>
                    <td> {{ $tag->normalized }}
                    <td>
                </tr>
                <tr>
                    <th>created_at</th>
                    <td> {{ $tag->created_at }}
                    <td>
                </tr>
                <tr>
                    <th>updated_at</th>
                    <td> {{ $tag->updated_at }}
                    <td>
                </tr>
            </table>
        </div>
    </div>
    <div class="small-12 medium-12 large-12 callout">
        <h3>Bookmarks</h3>
        <ul>
            @foreach($bookmarks as $aBookmark)
                @if($aBookmark->public == 1 || $aBookmark->user_id == $user || $aBookmark->user_id == 1)
                    <a href="../../bookmarks/{{$aBookmark->id}}">
                        <li>{{$aBookmark->title}}</li>
                    </a>
                @endif
            @endforeach
        </ul>
    </div>
    <div class="reveal" id="modal" data-reveal>
        <h1>Are you sure?</h1>
        <p class="lead">Do you wish to delete this?</p>
        <form action="{{url('/tags', [$tag->tag_id])}}" method="POST">
            {{method_field('DELETE')}}
            {{csrf_field()}}
            <input type="submit" class="button alert float-right" value="Delete"/>
        </form>
        <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endsection
