<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'date',
        'lieu',
        'image',
        'prix',
        'nbre_place',
        'categorie_id'
    ];

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
}
