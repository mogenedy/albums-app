<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Picture;

class PictureController extends Controller
{

    public function storePicture(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'album_id' => 'required|exists:albums,id', 
        ]);

        $picture = new Picture;
        $picture->name = $validatedData['name'];
        $picture->album_id = $validatedData['album_id'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $picture->image_path = 'images/'.$imageName;
        }

        $picture->save();

        return redirect()->back()->with('success', 'Picture uploaded successfully!');
    }
}
