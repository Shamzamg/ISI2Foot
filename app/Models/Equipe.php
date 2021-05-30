<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nom_equipe'];
    public function joueurs(){
        return $this->hasMany(Joueur::class);
    }

    public function getRouteKeyName()
    {
        return 'nom_equipe';
    }
}
