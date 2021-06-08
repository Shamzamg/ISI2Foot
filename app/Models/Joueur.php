<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = ['id']; 

    public function equipe(){
        return $this->belongsTo(Equipe::class);
    }
}
