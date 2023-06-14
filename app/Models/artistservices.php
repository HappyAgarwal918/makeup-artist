<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\categories;
use App\Models\subcategory;
use App\Models\artistlocation;
use App\Models\packages;


class artistservices extends Model
{
    use HasFactory;

    protected $table = "artist_services";

    protected $fillable = ['name', 'type', 'category_id', 'artist_id', 'location_id', 'price'];

    // public $timestamps = false;

    public function servicecat(): BelongsTo
    {
        return $this->belongsTo(categories::class, 'category_id');
    }

    // public function servicesubcat(): BelongsTo
    // {
    //     return $this->belongsTo(subcategory::class, 'subcategory_id');
    // }

    public function serviceartist(): BelongsTo
    {
        return $this->belongsTo(User::class, 'artist_id');
    }

    public function serviceloc()
    {
        return $this->belongsTo(artistlocation::class, 'location_id');
    }

   }
