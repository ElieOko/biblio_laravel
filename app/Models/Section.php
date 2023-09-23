<?php

namespace App\Models;

use App\Models\Etudiant;
use App\Models\Promotion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nom'];
    public function etudiant()
    {
        return $this->hasMany(Etudiant::class,"fk_section");
    }
    public function promotion()
    {
        return $this->hasMany(Promotion::class,"fk_section");
    }
}
