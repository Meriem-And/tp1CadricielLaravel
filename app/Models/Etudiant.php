<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model

{
    use HasFactory;


    protected $fillable = [
        'id',
        'nom',
        'adresse',
        'phone',
        'email',
        'naissance' ,
        'ville_id',
    ];

    public function etudiantHasVille(){
        return $this->hasOne(Ville::class);
    }

}
