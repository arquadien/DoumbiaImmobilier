<?php

namespace App\Http\Controllers;

use App\Models\Propriete;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class AdminCotroller extends Controller
{

    public function login()
    {
        return view('admin.connexion');
    }

    public function do_login(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // dd($credentials);

        //verification des parametres et authentification de l'utilisayeur
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();;
            //dd(Auth::user()->photo);

            return redirect()->intended(route('dashboard'))->with('msg', 'Vous êtes connecté à votre compte!');
        }

        return redirect()->back()->with('erreur', 'Parametre de connexion incorret !')->onlyInput('phone');
    }
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        $proprietes = Propriete::all();
        return view('admin.dashboard', ['proprietes' => $proprietes]);
    }

    public function ajout()
    {
        return view('admin.ajout_bien');
    }

    /**
     * mise en ligne des images de nouvelles propriétés.
     */
    public function create(Request $request)
    {
        // Valider les données du formulaire
        try {
            $validatedData = $request->validate(
                [
                    'titre' => 'required',
                    'surface' => 'required',
                    'prix' => 'required',
                    'piece' => 'required',
                    'chambre' => 'required',
                    'ville' => 'required',
                    'commune' => 'required',
                    'description' => 'required',
                    'image' => 'required', // Image unique, max 2 Mo
                    'album' => 'required', // Pour plusieurs images
                    'album.*' => 'required', // Chaque image de l'album, max 2 Mo
                ],
                [
                    'titre.required' => 'Le titre de la propriété est obligatoire.',
                    'surface.required' => 'La surface est obligatoire.',
                    'surface.numeric' => 'La surface doit être un nombre.',
                    'prix.required' => 'Le prix est obligatoire.',
                    'prix.numeric' => 'Le prix doit être un nombre.',
                    'piece.required' => 'Le nombre de pièces est obligatoire.',
                    'piece.integer' => 'Le nombre de pièces doit être un entier.',
                    'chambre.required' => 'Le nombre de chambres est obligatoire.',
                    'chambre.integer' => 'Le nombre de chambres doit être un entier.',
                    'ville.required' => 'La ville est obligatoire.',
                    'commune.required' => 'La commune ou le quartier est obligatoire.',
                    'image.required' => 'L’image de présentation est obligatoire.',
                    'image.image' => 'Le fichier doit être une image.',
                    'image.mimes' => 'L’image doit être au format JPEG, PNG, GIF ou WebP.',
                    'image.max' => 'L’image ne doit pas dépasser 2 Mo.',
                    'album.*.image' => 'Chaque fichier de l’album doit être une image.',
                    'album.*.mimes' => 'Les images de l’album doivent être au format JPEG, PNG, GIF ou WebP.',
                    'album.*.max' => 'Chaque image de l’album ne doit pas dépasser 2 Mo.',
                    'album.max' => 'Vous ne pouvez uploader au maximum 10 images dans l’album.',
                ]
            );

            // Stocker l'image de présentation avec Storage
            $imagePath = null;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $imagePath = $file->store('prepriete', 'public');
            }

            // Stocker les images de l'album avec Storage
            $albumPaths = [];
            if ($request->hasFile('album')) {
                foreach ($request->file('album') as $file) {
                    $albumPaths[] = $file->store('album', 'public');
                }
            }

            // Enregistrer les données dans la base de données (exemple avec un modèle)
            $propriete = Propriete::create([
                'titre' => $validatedData['titre'],
                'surface' => $validatedData['surface'],
                'prix' => $validatedData['prix'],
                'piece' => $validatedData['piece'],
                'chambre' => $validatedData['chambre'],
                'ville' => $validatedData['ville'],
                'commune' => $validatedData['commune'],
                'description' => $validatedData['description'],
                'image_path' => $imagePath ?? null, // Chemin de l'image principale ou null si absent
                'album_paths' => json_encode($albumPaths), // Chemins des images de l'album en JSON
            ]);
           
            return redirect()->back()->with('success', 'Propriété enregistrée avec succès !');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Gestion des erreurs de validation
            Log::warning('Erreur de validation : ' . $e->getMessage());
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Gestion des erreurs générales
            Log::error('Erreur générale lors de l’enregistrement : ' . $e->getMessage());
            return redirect()->back()->with('error', 'Une erreur inattendue est survenue : ' . $e->getMessage());
        }
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
        //
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
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index');
    }
}
