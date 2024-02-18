<?php

namespace App\Http\Controllers\API;

use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pictures = DB::table('pictures')
            ->get();
        
        return response()->json($pictures);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $filename = "";
        if ($request->hasFile('picture')) {
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            $filenameWithExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $filename = $filenameWithExt. '_' .time().'.'.$extension;
            $request->file('picture')->storeAs('public/uploads', $filename);

        } else {
            $filename = null;
        }

        $picture = Picture::create(array_merge($request->all(), ['picture' => $filename], ['alt_picture' => $filenameWithExt]));

        return response()->json([
            'status' => 'Succès',
            'data' => $picture,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Picture $picture)
    {
        //
    }

    public function article($articleId)
    {
        $pictures = DB::table('pictures')
            ->where('article_id', $articleId)
            ->get();
        
        return response()->json($pictures);
    }

    public function place($placeId)
    {
        $pictures = DB::table('pictures')
            ->where('place_id', $placeId)
            ->get();
        
        return response()->json($pictures);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Picture $picture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Picture $picture)
    {
        $file = 'public/uploads/'.$picture->picture;

        if(Storage::exists($file)){
            Storage::delete($file);

            $picture->delete();
            
            return response()->json([
                'status' => 'Supprimer avec succès'
            ]);
        }else{
            return response()->json(['status' => 'Erreur, image introuvable']);
        }
    }
}
