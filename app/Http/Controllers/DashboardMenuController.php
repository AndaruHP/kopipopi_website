<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.menu', [
            'menus' => Menu::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('menu-image');    
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'body' => 'required|string',
            'price' => 'required|integer',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('menu_images');
        }

        // Handle file upload
        // $imagePath = $request->file('image')->store('menu_images', 'public');

        // Use create method to create and store a new menu
        Menu::create($validatedData);

        // Redirect back with a success message
        return redirect('/dashboard/menus');

        // dd($request->all());
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
    public function edit(Menu $menu)
    {
        // edit itu untuk nampilin, kalo update untuk ubah
        return view('dashboard.posts.edit', [
            'menu' => $menu,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'body' => 'required|string',
            'price' => 'required|integer',
        ];

        $validatedData = $request->validate($rules);

        if ($request->hasFile('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('menu_images');
        }

        Menu::where('slug', $menu->slug)
            ->update($validatedData);

        return redirect('/dashboard/menus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {

        if ($menu->image) {
            Storage::delete($menu->image);
        }
        Menu::destroy($menu->id);
        return redirect('/dashboard/menus')->with('success', 'Menu deleted successfully');
    }
}
