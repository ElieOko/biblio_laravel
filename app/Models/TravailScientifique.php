<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravailScientifique extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nom','description','fichier','autorisation','fk_etudiant','prof',"annee"];
}
