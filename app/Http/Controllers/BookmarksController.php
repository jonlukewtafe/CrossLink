<?php

namespace App\Http\Controllers;

use App\Bookmark;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Image;

class BookmarksController extends Controller
{
    use Taggable;

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function show($id)
    {

        $bookmark = Bookmark::findOrFail($id);

        $image = public_path('images\bookmarks' . $bookmark->thumbnail);

        return view('bookmarks.show', compact('bookmark', 'image'));
    }

    /**
     * Show the form for creating a bookmark.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bookmarks = Bookmark::all();
        return view('bookmarks.add', compact('bookmarks'));
    }

    public function destroy($id)
    {
        $bookmark = Bookmark::findOrFail($id);
        $bookmark->detag();
        $bookmark->delete();
        return redirect('/bookmarks');
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $validated = request()->validate([
            'title' => ['required'],
            'url' => ['required'],
            'description' => ['required'],
            'public' => []
        ]);

        $bookmark = Bookmark::Create([
            'user_id' => $user->id,
            'title' => $request->input('title'),
            'url' => $request->input('url'),
            'description' => $request->input('description'),
        ]);

        $tags = explode(',', $request->input('tag'));
        $bookmark->retag($tags);
        return redirect('/bookmarks');
    }

    public function edit($id)
    {
        $bookmark = Bookmark::findOrFail($id);
        return view('bookmarks.edit', compact('bookmark', 'tags'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => ['required'],
            'url' => ['required'],
            'description' => ['required']
        ]);
        $bookmark = Bookmark::find($id);
        $tags = explode(',', $request->input('tag'));
        $bookmark->title = $request->get('title');
        $bookmark->url = $request->get('url');
        $bookmark->description = $request->get('description');
        $bookmark->retag($tags);
        $bookmark->save();
        return redirect("/bookmarks");
    }

    public function index()
    {
        $bookmarks = Bookmark::all();

        if (Auth::user() != null) {
            $user = Auth::user()->getAuthIdentifier();
        }

        return view('bookmarks.index', compact('bookmarks', 'user'));
    }


}
