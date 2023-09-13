<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscrip extends Model
{
    use HasFactory;
    protected $fillable = ['nom','postnom','prenom','Profession','section','promotion','matricule'];
}
