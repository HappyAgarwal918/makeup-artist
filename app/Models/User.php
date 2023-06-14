<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\artistreview;
use App\Models\artistlocation;
use App\Models\artistservices;
use App\Models\packages;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
        'about',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function type(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["none", "admin", "artist", "user"][$value],
        );
    }

    public function reviewartist()
    {
        return $this->hasMany(artistreview::class, 'artist_id');
    }

    public function reviewuser()
    {
        return $this->hasMany(artistreview::class, 'user_id');
    }

    public function artlocation()
    {
        return $this->hasMany(artistlocation::class, 'artist_id');
    }

    public function artservice()
    {
        return $this->hasMany(artistservices::class, 'artist_id');
    }

    public function packservice()
    {
        return $this->hasMany(packages::class, 'artist_id');
    }
}
