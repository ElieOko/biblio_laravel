<?php

namespace App\Models;

use App\Models\Sujet;
use App\Models\Section;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promotion extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nom','isTerminal','fk_section','abreviation'];
    public function section()
    {
        return $this->belongsTo(Section::class, 'fk_section','id');
    }
    public function etudiant()
    {
        return $this->hasMany(Etudiant::class,"fk_promotion");
    }
    public function sujet()
    {
        return $this->hasMany(Sujet::class,"fk_promotion");
    }

}
