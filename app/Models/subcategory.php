<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\categories;
use App\Models\artistservices;

class subcategory extends Model
{
    use HasFactory;

    protected $table = "subcategories";

    protected $fillable = ['sub_name', 'sub_slug', 'category_id'];

    // public $timestamps = false;

    public function subcat(): BelongsTo
    {
        return $this->belongsTo(categories::class, 'category_id');
    }

    public function subcatserv()
    {
        retunr $this->hasMany(artistservices::class, 'subcategory_id');
    }
}
