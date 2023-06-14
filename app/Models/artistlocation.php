<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\artistservices;

class artistlocation extends Model
{
    use HasFactory;

    protected $table = "artist_location";

    protected $fillable = ['longitude','latitude','locality','address', 'city_id', 'country_id','state_id', 'postcode', 'artist_id'];

    // public $timestamps = false;

    public function artistloc(): BelongsTo
    {
        return $this->belongsTo(User::class, 'artist_id');
    }

    public function locationserv()
    {
        return $this->hasMany(artistservices::class, 'location_id');
    }
}
