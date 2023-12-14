<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;

class NewsController extends Controller
{
    public function newsList()
    {
        return view('pages.news');
    }
    
    public function newsUpload()
    {
        $category = Categories::all();
        return view('pages.news-upload', ['category' => $category]);
    }

    public function newsUploadProcess(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required|email|unique:users',
            'slug' => 'min:6',
            'images' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $fileName);
        
        $user = new User;
        $user->title = $request->input('title');
        $user->content = $request->input('content');
        $user->images = $fileName;
        $user->slug = $request->input('slug');
        $user->status = $request->input('status');
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->updated_at = Carbon::now()->toDateTimeString();
        $user->save();

        return redirect()->route('user.index')->with([
            'message' => 'User added successfully!', 
            'status' => 'success'
        ]);
    }
}
