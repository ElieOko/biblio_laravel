<?php

namespace App\Models;

use App\Models\Prof;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grade extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nom'];
    public function prof()
    {
        return $this->hasMany(Prof::class,"fk_grade");
    }
}
