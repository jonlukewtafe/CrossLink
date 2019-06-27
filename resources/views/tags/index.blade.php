@extends('layouts.layout')
@section('title' , 'CrossLink - Tags')
@section('content')
    <div class="table-scroll">
        @hasrole('administrator')
        <a href="{{action('TagsController@create')}}" class="button">Create New Tag</a>


        @endhasrole
        <table>
            <tr>
                <h3>Tags</h3>
            </tr>
            <tr>
                <th>Name</th>
                <th>Normalized Name</th>
                <th>Details</th>
            </tr>
            @foreach($tags as $aTag)
                <tr>
                    <td><p>{{ $aTag->name }}</p></td>
                    <td><p>{{ $aTag->normalized }}</p></td>
                    <td><a href="/tags/{{ $aTag->tag_id }}">Details</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
