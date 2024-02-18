<?php

namespace App\Http\Controllers\API;

use App\Models\Place;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $places = DB::table('places')
            ->orderby('category_id', 'desc')
            ->get();
        
        return response()->json($places);
    }

    public function whereCategory($id)
    {
        $places = DB::table('places')
            ->where('category_id', $id)
            ->orderby('id', 'desc')
            ->get();
        
        return response()->json($places);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $places = DB::table('places')
            ->where('id', $id)
            ->get();

        foreach ($places as $place) {
            $pictures = DB::table('pictures')
                ->where('place_id', $place->id)
                ->get();
        }
        return response()->json([
            'place' => $place,
            'picture' => $pictures
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Place $place)
    {
        //
    }
}
