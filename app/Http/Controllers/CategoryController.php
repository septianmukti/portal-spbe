<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function category()
    {
        $category = Categories::all();
        return view('pages.category', compact('category'));
    }

    public function categoryAdd(Request $request)
    {
        $messages = [
            'required' => ':attribute tidak boleh kosong.',
            'unique' => 'Kategori yang ditambahkan sudah tersedia.',
            'min' => 'Nama kategori minimal berjumlah 3 karakter.',
        ];

        $request->validate([
            'name' => 'required|unique:categories|min:3'
        ], $messages);

        if(empty($request->input('slug'))) {
            $slug = str_replace(' ', '-', $request->name);
            Categories::create([
                'name' => ucwords(strtolower($request->name)),
                'slug' => strtolower($slug),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        } else {
            Categories::create([
                'name' => ucwords(strtolower($request->name)),
                'slug' => strtolower(str_replace(' ', '-', $request->slug)),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        return redirect()->route('category')
            ->withSuccess('Kategori telah berhasil ditambahkan!');
    }

    public function delete(Request $request)
    {
        $category = Categories::find($request->id);
        // #Update to New Category
        News::where('categories_id', $category)->update([
            'categories_id' => '1'
        ]);
        $category->delete();

        return redirect()->route('category')->with('success', 'Kategori berhasil dihapus!');
    }

    public function update(Request $request)
    {
        $messages = [
            'required' => ':attribute tidak boleh kosong.',
            'unique' => 'Kategori yang ditambahkan sudah tersedia.',
            'min' => 'Nama kategori minimal berjumlah 3 karakter.',
        ];

        $request->validate([
            'name' => 'required|unique:categories|min:3'
        ], $messages);

        if(empty($request->input('slug'))) {
            $slug = str_replace(' ', '-', $request->name);
            Categories::where('id', $request->id)->update([
                'name' => ucwords(strtolower($request->name)),
                'slug' => strtolower($slug),
                'updated_at' => Carbon::now()
            ]);
        } else {
            Categories::where('id', $request->id)->update([
                'name' => ucwords(strtolower($request->name)),
                'slug' => strtolower(str_replace(' ', '-', $request->slug)),
                'updated_at' => Carbon::now()
            ]);
        }

        return redirect()->route('category')->with('success', 'Kategori berhasil diganti!');
    }


}
