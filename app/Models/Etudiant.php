<?php

namespace App\Models;

use App\Models\User;
use App\Models\Sujet;
use App\Models\Demande;
use App\Models\Section;
use App\Models\Promotion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = ['matricule','nom','postnom','prenom','genre','fk_section','fk_promotion','fk_user','role'];
    public $timestamps = false;
    public function promotion()
    {
        return $this->belongsTo(Promotion::class, 'fk_promotion','id');
    }
    public function section()
    {
        return $this->belongsTo(Section::class, 'fk_section','id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'fk_user','id');
    }
    public function sujet(): HasMany
    {
        return $this->hasMany(Sujet::class,"fk_etudiant");
    }
    public function demande()
    {
        return $this->hasMany(Demande::class,"fk_etudiant",'id');
    }
}
