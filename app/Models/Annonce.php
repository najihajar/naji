<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Annonce extends Model
{
    use HasFactory;

    protected $table = 'annonces';
    protected $fillable = ['titre', 'contenu'];
    protected $dates = ['created_at', 'updated_at'];
}