<?php

namespace App\Models;

use App\Models\Grade;
use App\Models\Sujet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prof extends Model
{
    use HasFactory;
    protected $fillable = ['nom','postnom','prenom','genre','matricule','fk_grade'];
    public function grade()
    {
        return $this->belongsTo(Grade::class, 'fk_grade','id');
    }
    public function sujet(): HasMany
    {
        return $this->hasMany(Sujet::class,"fk_prof");
    }
}
