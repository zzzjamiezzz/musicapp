<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;


class PlaylistItem extends Model
{
    /** @use HasFactory<\Database\Factories\PlaylistItemFactory> */
    use HasFactory;
    protected $table = 'playlist_item';
    protected $fillable = ['playlist_id', 'item_id', 'item_type'];


    public function playlist()
    {
        return $this->belongsTo(Playlist::class, 'playlist_id');
    }

    public function item(): MorphTo
    {
        return $this->morphTo();
    }
}
