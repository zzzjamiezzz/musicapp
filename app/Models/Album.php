<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    /** @use HasFactory<\Database\Factories\AlbumFactory> */
    use HasFactory;

    protected $table = 'album'; // ✅ Correct table name
    protected $fillable = ['artist_id', 'title', 'cover_image', 'release_date', 'genre'];

    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artist_id');
    }

    public function music()
    {
        return $this->hasMany(Music::class, 'album_id');
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'item');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'item');
    }

    public function playlistItems()
    {
        return $this->morphMany(PlaylistItem::class, 'item');
    }

    public function reports()
    {
        return $this->morphMany(ReportContent::class, 'item');
    }

}
