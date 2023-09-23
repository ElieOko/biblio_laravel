<?php

namespace App\Models;

use App\Models\Prof;
use App\Models\Etudiant;
use App\Models\Promotion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attribution extends Model
{
    use HasFactory;
    protected $fillable = ['fk_prof','fk_etudiant','fk_promotion'];
    public $timestamps = false;
    public function prof()
    {
        return $this->belongsTo(Prof::class, 'fk_prof','id');
    }
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'fk_etudiant','id');
    }
    public function promotion()
    {
        return $this->belongsTo(Promotion::class, 'fk_promotion','id');
    }
}
