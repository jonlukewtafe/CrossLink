<?php

namespace App\Http\Controllers;

use App\Bookmark;
use Illuminate\Http\Request;

class BookmarksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id){

        $bookmark = Bookmark::findOrFail($id);
        return view('bookmarks.show', compact('bookmark'));
    }

    public function destroy($id)
    {
        $bookmark = Bookmark::findOrFail($id);
        $bookmark->trails()->detach($id);
        $bookmark->delete();
        if($bookmark->thumbnail == 'default.jpg') {
            return redirect('/bookmarks');
        }
        else {
            $image = public_path('/images/bookmarks/' .  $bookmark->thumbnail);
            File::delete($image);
            return redirect('/bookmarks/');
        }
    }

    public function edit($id)
    {
        $bookmark = Bookmark::findOrFail($id);
        return view('bookmarks.edit', compact('bookmark'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => ['required'],
            'url' => ['required'],
            'description' => ['required']
        ]);
        $bookmark = Bookmark::find($id);
        $bookmark->title = $request->get('title');
        $bookmark->url = $request->get('url');
        $bookmark->description = $request->get('description');

        $bookmark->save();
        return redirect("/bookmarks");
    }
    
    public function index()
    {
        $bookmarks = Bookmark::all();
        return view('bookmarks.index', compact('bookmarks'));
    }


}
