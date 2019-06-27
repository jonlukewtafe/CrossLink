<?php

namespace App\Http\Controllers;

use App\Bookmark;
use Illuminate\Http\Request;
use Cviebrock\EloquentTaggable\Models\Tag;
use Illuminate\Support\Facades\Auth;

class TagsController extends Controller
{
    public function show($id)
    {

        $tag = Tag::findOrFail($id);
        $bookmarks = Bookmark::withAnyTags($tag->name)->get();
        $user = Auth::user()->getAuthIdentifier();
        return view('tags.show', compact('tag', 'bookmarks', 'user'));
    }

    public function index()
    {
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    public function create()
    {
        $tags = Tag::all();
        return view('tags.add', compact('tags'));
    }

    public function store(Request $request)
    {
        $validated = request()->validate([
            'name' => ['required']
        ]);

        Tag::Create([
            'name' => $request->input('name'),
        ]);
        return redirect('/tags');
    }

    public function destroy($name)
    {
        $tag = Tag::findByName($name);
        $tag->delete();

        return redirect('/tags');
    }


}
