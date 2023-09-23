<?php

namespace App\Models;

use App\Models\Prof;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sujet extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nom','description','fichier','autorisation','fk_etudiant','fk_prof'];
    public function prof()
    {
        return $this->belongsTo(Prof::class, 'fk_prof','id');
    }
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'fk_etudiant','id');
    }
}
