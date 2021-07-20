<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class Film
 * @package App\Models
 */
class Film extends Model
{
    protected $primaryKey = 'id_film';
    use HasFactory;

    /**
     * Retourne le dernier film à l'affiche
     * @return \Illuminate\Support\Collection
     */
    public static function getLastFilm()
    {
        $lastDate = DB::table('films')->max('date_debut_affiche');
        $film = DB::table('films')->select('titre', 'id_film')->where('date_debut_affiche', '=', $lastDate)->get();

        return $film;
    }

    /**
     * Retourne la liste des films par ordre des dernières sorties
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function getLastFilms()
    {
        $films = DB::table('films')
            ->select('titre', 'id_film')
            ->orderBy('date_debut_affiche', 'desc')
            ->paginate(3);

        return $films;
    }
}
