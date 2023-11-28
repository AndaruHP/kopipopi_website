<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class DashboardSubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.subcategory', [
            'subcategories' => Subcategory::all(),
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.subcategories.create', [
            'subcategories' => Subcategory::all(),
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id'
        ]);
        Subcategory::create($validatedData);
        return redirect('/dashboard/categories/subcategories');
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
    public function edit(Subcategory $subcategory)
    {
        return view('dashboard.subcategories.edit', [
            'subcategory' => $subcategory,
            'subcategories' => Subcategory::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        $rule = [
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id'
        ];
        $validatedData = $request->validate($rule);
        $subcategory->update($validatedData);
        return redirect('/dashboard/categories/subcategories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory)
    {
        Subcategory::destroy($subcategory->id);
        return redirect('/dashboard/categories');
    }
}
