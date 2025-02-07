<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    //
    use HasFactory; // Make sure this is included

    protected $table = 'admin'; // ✅ Ensure it uses the correct table
    protected $fillable = ['user_id']; // Define mass-assignable fields

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
