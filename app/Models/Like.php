<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;


class Like extends Model
{
    /** @use HasFactory<\Database\Factories\LikeFactory> */
    use HasFactory;
    protected $table = 'like';
    protected $fillable = ['user_id', 'item_id', 'item_type'];

    public function user()
    {
        return $this->morphTo();
    }

    public function item(): MorphTo
    {
        return $this->morphTo();
    }
}
