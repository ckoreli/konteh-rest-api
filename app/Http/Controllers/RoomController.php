<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Faculty;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(Request $request)
    {
        if (null !== $request->input('faculty')) {
            if (Faculty::where('id', $request->input('faculty'))->exists()) {
                return response()->json([
                    'error' => false,
                    'message' => 'Success!',
                    'data' => Faculty::find($request->input('faculty'))->rooms
                ]);
            }
            return response()->json([
                'error' => true,
                'message' => 'Faculty with id ' . $request->input('faculty') . ' not found.',
                'data' => null
            ], 404);
        }
        return response()->json([
            'error' => false,
            'message' => 'Success!',
            'data' => Room::all()
        ]);
    }
}
