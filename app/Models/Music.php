<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    /** @use HasFactory<\Database\Factories\MusicFactory> */
    use HasFactory;

    protected $table = 'music'; // ✅ Ensure correct table
    protected $fillable = ['album_id', 'title', 'duration', 'audio_file'];

    public function album()
    {
        return $this->belongsTo(Album::class, 'album_id');
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
