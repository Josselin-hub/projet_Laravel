<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Profile extends Model
{
    protected $primaryKey = 'id_profile';
    protected $fillable = [
        'id_profile',
        'name_profile',
        'type_profile',
    ];
    use HasFactory;

    /**
     * @param $request
     * créé un profile user en même temps que le register
     */
    public static function create($request)
    {
        $profile = new Profile;
        $profile->name_profile = $request->name;
        $profile->id_profile = Auth::id();
        $profile->save();

    }

}
