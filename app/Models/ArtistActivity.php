<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistActivity extends Model
{
    /** @use HasFactory<\Database\Factories\ArtistActivityFactory> */
    use HasFactory;
    protected $table = 'artistactivity';
    protected $fillable = ['artist_id', 'type', 'description'];

    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artist_id');
    }
}
