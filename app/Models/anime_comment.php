<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class anime_comment extends Model
{
    public $fillable = ["mal_id","email","comment"];
}
