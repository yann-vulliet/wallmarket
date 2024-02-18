<?php

namespace App\Http\Controllers\API;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = DB::table('categories')
            ->orderby('category', 'desc')
            ->get();
        
        return response()->json($categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|max:50',
        ]);

        $category = Category::create($request->all());
        return response()->json([
            'status' => 'Création effectuée avec succès',
            'data' => $category,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'category' => 'required|max:50',
        ]);

        $category->update(array_merge($request->all()));

        return response()->json([
            'status' => 'Mise à jour effectuée avec succès',
            'data' => $category
        ]); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        
        return response()->json([
            'status' => 'Suppréssion effectuée avec succès'
        ]);
    }
}
