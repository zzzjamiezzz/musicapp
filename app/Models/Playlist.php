<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    /** @use HasFactory<\Database\Factories\PlaylistFactory> */
    use HasFactory;
    protected $table = 'playlist';
    protected $fillable = ['user_id', 'title', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function likes()
    {
        return $this->morphMany(Like::class, 'item');
    }

    public function items()
    {
        return $this->hasMany(PlaylistItem::class, 'playlist_id');
    }


}
