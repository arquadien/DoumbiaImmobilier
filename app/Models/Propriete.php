<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Propriete extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'surface',
        'prix',
        'piece',
        'chambre',
        'ville',
        'commune',
        'description',
        'image_path',
        'album_paths',
    ];

    protected $casts = [
        'album_paths' => 'array', // Pour caster automatiquement album_paths en tableau JSON
    ];

    /**
     * Obtient l'URL de l'image de présentation
     */
    public function getImageUrlAttribute()
    {
        if ($this->image_path) {
            return asset('storage/' . $this->image_path);
        }
        return asset('images/default.jpg');
    }

    /**
     * Obtient les URLs des images de l'album
     */
    public function getAlbumUrlsAttribute()
    {
        if ($this->album_paths && is_array($this->album_paths)) {
            return array_map(function ($path) {
                return asset('storage/' . $path);
            }, $this->album_paths);    
        }
        return []; // Retourne un tableau vide si aucune image d'album
    }

    /**
     * Supprime les fichiers associés avant de supprimer la propriété
     */
    public function delete()
    {
        // Supprimer l'image de présentation si elle existe
        if ($this->image_path) {
            Storage::disk('public')->delete($this->image_path);
        }

        // Supprimer les images de l'album si elles existent
        if ($this->album_paths && is_array($this->album_paths)) {
            Storage::disk('public')->delete($this->album_paths);
        }

        // Appeler la méthode parent pour supprimer l'enregistrement de la base de données
        parent::delete();
    }
}
