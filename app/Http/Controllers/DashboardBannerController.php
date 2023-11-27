<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.banner', [
            'banners' => Banner::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.banners.create', [
            'banners' => Banner::all()
        ]);
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
            $validatedData['image'] = $request->file('image')->store('banner_images');
        }

        Banner::create($validatedData);
        return redirect('/dashboard/banners');
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
    public function edit(Banner $banner)
    {
        return view('dashboard.banners.edit', [
            'banner' => $banner,
            'banners' => Banner::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $rule = [
            'title' => 'required|string|max:255',
        ];

        $validatedData = $request->validate($rule);

        if ($request->hasFile('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('banner_images');
        }

        Banner::where('slug', $banner->slug)
            ->update($validatedData);

        return redirect('/dashboard/banners');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        if ($banner->image) {
            Storage::delete($banner->image);
        }
        Banner::destroy($banner->id);
        return redirect('/dashboard/banners')->with('success', 'Menu deleted successfully');
    }
}
