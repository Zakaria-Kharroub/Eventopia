<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evenement;
use App\Models\User;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'prix',
        'quantite',
        'type',
        'event_id'
    ];

   public function evenement(){
        return $this->belongsTo('Evenement::class');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }


}
