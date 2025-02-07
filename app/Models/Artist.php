<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Artist extends Model
{
    //
    use HasFactory; // Make sure this is included

    protected $table = 'artist'; // ✅ Make sure it uses 'artist', not 'artists    protected $fillable = ['user_id', 'stagename', 'genre', 'socialmedialinks', 'website', 'biography'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function albums()
    {
        return $this->hasMany(Album::class, 'artist_id');
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'follow', 'followed_id', 'follower_id');
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'user');
    }

    public function reports()
    {
        return $this->morphMany(ReportContent::class, 'reporter');
    }

    public function feedback()
    {
        return $this->morphMany(Feedback::class, 'submitter');
    }

    public function notifications()
    {
        return $this->morphMany(Notification::class, 'receiver');
    }

}
