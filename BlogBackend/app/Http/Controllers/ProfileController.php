<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $users = Profile::all();
        return response()->json($users);
    }

    public function show($id)
    {
        $user = Profile::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json($user);
    }

    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    {
                // Log request detail
        
        // Check for duplicate email
        $existingProfile = Profile::where('email', $request->email)->first();
        
        if ($existingProfile) {
            return response()->json(['emailExits' => 'Email already exists.'], 409);
        }

        // Create the profile without detailed validation
        $profile = new Profile();
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->password = bcrypt($request->password);
        $profile->role = $request->role;
        $profile->save();

        return response()->json(['success' => 'Profile created successfully.', 'profile' => $profile], 201);
    }

}
