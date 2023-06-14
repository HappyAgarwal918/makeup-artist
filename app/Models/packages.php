<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\artistservices;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\User;

class packages extends Model
{
    use HasFactory;

    protected $table = "service_packages";

    protected $fillable = ['services', 'offer', 'offer_type', 'artist_id'];

    public function artistdata(): BelongsTo
    {
        return $this->belongsTo(User::class, 'artist_id');
    }

}
