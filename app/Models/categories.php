<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\artistservices;
use App\Models\subcategory;

class categories extends Model
{
    use HasFactory;

    protected $table = "categories";

    protected $fillable = ['cat_name', 'cat_slug'];

    // public $timestamps = false;

    public function catservice()
    {
        return $this->hasMany(artistservices::class, 'category_id');
    }

    public function catsubcategory()
    {
        return $this->hasMany(subcategory::class, 'category_id');
    }
}
