<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    /** @use HasFactory<\Database\Factories\NotificationFactory> */
    use HasFactory;
    protected $table = 'notifications';
    protected $fillable = ['receiver_id', 'receiver_type', 'type', 'message', 'status'];

    public function receiver()
    {
        return $this->morphTo();
    }
}
