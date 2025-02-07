<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangeNameRequest extends Model
{
    /** @use HasFactory<\Database\Factories\ChangeNameRequestFactory> */
    use HasFactory;
    protected $table = 'changenamerequest';
    protected $fillable = ['artist_id', 'current_name', 'requested_name', 'reason', 'status'];

    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artist_id');
    }
}
