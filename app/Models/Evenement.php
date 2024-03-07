<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;
use App\Models\User;
use App\Models\Ticket;

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

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tickets(){
        return $this->hasMany(Ticket::class, 'event_id');
    }

    public function reservations(){
        return $this->hasMany(Reservation::class);
    }
}
