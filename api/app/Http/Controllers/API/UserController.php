<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function currentUser()
    {
        return response()->json([
            'meta' => [
                'code' => 200,
                'status' => 'succès',
                'message' => 'User fetched successfully!',
            ],
            'data' => [
                'user' => auth()->user(),
            ],
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = DB::table('users')
            ->get();
        
        return response()->json($users);
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
    public function show(User $user)
    {
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'firstName' => 'required|max:50',
            'lastName' => 'required|max:50',
        ]);

        $user->update(array_merge($request->all()));

        if($request->password !== null){
            $user->password = bcrypt($request['password']);
            $user->save();
        }

        return response()->json([
            'status' => 'Mise à jour avec succès',
            'data' => $user
        ]); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        
        return response()->json([
            'status' => 'Supprimer avec succès'
        ]);
    }
}
