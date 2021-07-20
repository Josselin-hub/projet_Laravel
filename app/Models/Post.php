<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class Post
 * @package App\Models
 */
class Post extends Model
{
    use HasFactory;

    /**
     * Retourne les commentaires des derniers films à l'affiche
     */
    public static function getCommentairesByLastFilms()
    {
        $films = DB::table('posts')->join('films', 'posts.film_id', '=', 'films.id_film' )
            ->select('posts.content', 'posts.film_id')
            ->orderBy('films.date_debut_affiche', 'desc')
            ->get();

        return $films;

    }
}
