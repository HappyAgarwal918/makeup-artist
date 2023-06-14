<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class artistreview extends Model
{
    use HasFactory;

    protected $table = "artist_review";

    protected $fillable = ['rating', 'review', 'artist_id', 'user_id'];

    // public $timestamps = false;

    public function artistrev(): BelongsTo
    {
        return $this->belongsTo(User::class, 'artist_id');
    }

    public function userrev(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
