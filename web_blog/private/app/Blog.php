<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class Blog extends Model
{
    use SoftDeletes;
    protected $dates = ['delete_at'];


    protected $table = "datafilm";
    protected $fillable = [
     'judul', 'sinopsis_film', 'genre', 'foto'
    ];
}