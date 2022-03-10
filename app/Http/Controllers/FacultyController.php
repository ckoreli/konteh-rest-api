<?php

namespace App\Http\Controllers;

use App\Models\Faculty;

class FacultyController extends Controller
{
    public function index()
    {
        return response()->json([
            'error' => false,
            'message' => 'Success!',
            'data' => Faculty::all()
        ]);
    }
}
