<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;


class ReportContent extends Model
{
    /** @use HasFactory<\Database\Factories\ReportContentFactory> */
    use HasFactory;
    protected $table = 'reportcontent';
    protected $fillable = ['reporter_id', 'reporter_type', 'item_id', 'item_type', 'reason', 'status'];

    public function reporter()
    {
        return $this->morphTo();
    }

    public function item(): MorphTo
    {
        return $this->morphTo();
    }
}
