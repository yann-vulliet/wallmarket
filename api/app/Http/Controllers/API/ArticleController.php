<?php

namespace App\Http\Controllers\API;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = DB::table('articles')
            ->get();

        foreach ($articles as $article) {
            $pictures = DB::table('pictures')
                ->where('article_id', $article->id)
                ->get();
                $article->pictures = $pictures;
            }

        return response()->json($articles);
    }

    public function random()
    {
        $articles = DB::table('articles')
            ->inRandomOrder()
            ->limit(3)
            ->get();

        foreach ($articles as $article) {
            $article->pictures = DB::table('pictures')
                ->where('article_id', $article->id)
                ->get();
        }

        foreach ($articles as $article) {
            if ($article->place_id !== null){
                $article->place_id = DB::table('places')
                ->where('id', $article->place_id)
                ->get();
            }
        }

        return response()->json($articles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {        
        $article = Article::create(array_merge($request->all()));
        return response()->json([
            'status' => 'Success',
            'data' => $article,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $articles = DB::table('articles')
            ->where('id', $id)
            ->get();

        foreach ($articles as $article) {
            $pictures = DB::table('pictures')
                ->where('article_id', $article->id)
                ->get();
        }
        return response()->json([
            'article' => $article,
            'picture' => $pictures
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {

        $article->update($request->all());

        return response()->json([
            'status' => 'Mise à jour effectuée avec succès',
            'data' => $article
        ]); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        
        return response()->json([
            'status' => 'Supprimer avec succès'
        ]);
    }
}
