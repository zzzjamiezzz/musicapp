<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;


class Feedback extends Model
{
    /** @use HasFactory<\Database\Factories\FeedbackFactory> */
    use HasFactory;

    protected $table = 'feedback';
    protected $fillable = ['submitter_id', 'submitter_type', 'category', 'message', 'status'];

    public function submitter(): MorphTo
    {
        return $this->morphTo();
    }
}
