<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model 
{
	protected $table = 'serie';

	protected $fillable = ['name', 'season'];
}