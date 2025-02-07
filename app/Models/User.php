<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'user'; // ✅ Ensure Laravel uses 'user' instead of 'users'

    protected $fillable = [
        'username',
        'email',
        'password',
        'is_admin',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $primaryKey = 'id'; // ✅ If 'id' is the primary key, this line is optional

    public function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // ✅ One-to-One Relationships
    public function artist()
    {
        return $this->hasOne(Artist::class, 'user_id');
    }

    public function admin()
    {
        return $this->hasOne(Admin::class, 'user_id');
    }

    public function isAdmin()
    {
        return $this->admin()->exists();
    }

    // ✅ Many-to-Many Follow System
    public function followers()
    {
        return $this->belongsToMany(User::class, 'follow', 'followed_id', 'follower_id');
    }

    public function following()
    {
        return $this->belongsToMany(User::class, 'follow', 'follower_id', 'followed_id');
    }

    // ✅ Morph Relationships
    public function likes()
    {
        return $this->morphMany(Like::class, 'user', 'user_type', 'user_id');
    }

    public function reports()
    {
        return $this->morphMany(ReportContent::class, 'reporter', 'reporter_type', 'reporter_id');
    }

    public function feedback()
    {
        return $this->morphMany(Feedback::class, 'submitter', 'submitter_type', 'submitter_id');
    }

    public function notifications()
    {
        return $this->morphMany(Notification::class, 'receiver', 'receiver_type', 'receiver_id');
    }
}
