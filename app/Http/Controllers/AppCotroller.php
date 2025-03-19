<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Propriete;


class AppCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proprietes = Propriete::orderBy('created_at', 'desc')->take(3)->get(); // 3 derniers éléments ajoutés
        return view('index', compact('proprietes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function catalogue()
    {
        $proprietes = Propriete::all();
        return view('catalogue', compact('proprietes'));
    }

    public function actualite()
    {
        return view('actualite');
    }

    public function lire()
    {
        return view('lire');
    }

    public function contact()
    {
        return view('contact');
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
    public function show(string $id)
    {
        $propriete= Propriete::find($id);
        $albumPaths = json_decode($propriete->album_paths, true) ?? []; // Décode le JSON en tableau PHP, ou un tableau vide si null
        return view('detail_bien', compact('propriete', 'albumPaths'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
