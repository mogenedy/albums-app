<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function create()
    {
        return view('albums.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

         Album::create([
            'name' => $request->name,
        ]);

        return redirect()->route('album.index')->with('success', 'Album created successfully.');
    }


    public function index(){
        $albums = Album::all();
        return view('albums.index', compact('albums'));
    }

  public function show($id){
        $album = Album::findOrFail($id);
        return view('albums.show', compact('album'));
    }


public function edit(Album $album)
{
    return view('albums.edit', compact('album'));
}

public function update(Request $request, Album $album)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    $album->update([
        'name' => $request->name,
    ]);

    return redirect()->route('albums.show', ['album' => $album->id])->with('success', 'Album updated successfully!');
}

public function destroy(Album $album)
{
    if ($album->pictures()->count() > 0) {
        return redirect()->back()->with('warning', 'This album contains pictures. Please choose an action.');
    }

    $album->delete();

    return redirect()->route('album.index')->with('success', 'Album deleted successfully!');
}
}
