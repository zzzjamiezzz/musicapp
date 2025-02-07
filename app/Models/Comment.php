<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;


class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;
    protected $table = 'comment';
    protected $fillable = ['user_id', 'item_id', 'item_type', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function item(): MorphTo
    {
        return $this->morphTo();
    }

    public function reports()
    {
        return $this->morphMany(ReportContent::class, 'item');
    }

}
