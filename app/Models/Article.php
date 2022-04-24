<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'titre',
        'contenu',
        'langue',
        'user_id'
    ];

    public function articleHasUser(){
        return $this->hasOne(User::class);
    }
}
