<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brief;

class Tache extends Model
{
    use HasFactory;
    protected $table='taches';
    protected $fillable=['Nom_Tache','Date_debut','Date_fin','Descrition','Brief_id' ];
    public $timestamps=false;

}
