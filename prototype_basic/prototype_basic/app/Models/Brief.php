<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tache;

class Brief extends Model
{
    use HasFactory;
    protected $table='briefs';
    protected $fillable=['Nom_Brief','Date_livraison','Date_recuperation'];
    public $timestamps=false;
     //one to many
     public function hasmanyTache(){
        return $this->HasMany(Tache::class);
    }
}
