<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.gallery', [
            'galleries' => Gallery::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('gallery_images');
        }

        Gallery::create($validatedData);

        return redirect('/dashboard/galleries');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('dashboard.galleries.edit', [
            'galleries' => $gallery
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ];

        $validatedData = $request->validate($rules);

        if ($request->hasFile('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('gallery_images');
        }

        Gallery::where('slug', $gallery->slug)
            ->update($validatedData);

        return redirect('/dashboard/galleries');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        if ($gallery->image) {
            Storage::delete($gallery->image);
        }

        Gallery::destroy($gallery->id);
        return redirect('/dashboard/galleries');
    }
}
