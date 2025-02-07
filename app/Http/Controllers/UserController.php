<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import the User model

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Fetch all users
        return response()->json($users); // Return JSON response
    }
}

