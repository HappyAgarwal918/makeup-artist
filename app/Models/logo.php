<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logo extends Model
{
    use HasFactory;

    protected $table = "logo";

    protected $fillable = ['name', 'url'];

    // public $timestamps = false;
}
