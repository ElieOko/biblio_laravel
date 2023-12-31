<?php

namespace App\Models;

use App\Models\Section;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Demande extends Model
{
    use HasFactory;
    protected $fillable = ['annee','state','fk_etudiant','isActive'];
    public $timestamps = false;

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'fk_etudiant','id');
    }
}
