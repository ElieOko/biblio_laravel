<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionProf extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['fk_prof','fk_promotion'];
}
