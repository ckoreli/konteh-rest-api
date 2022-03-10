<?php

namespace App\Http\Controllers;

use App\Models\Desk;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DeskController extends Controller
{
    public function index(Request $request)
    {
        if (null !== $request->input('room')) {
            if (Room::where('id', $request->input('room'))->exists()) {
                return response()->json([
                    'error' => false,
                    'message' => 'Success!',
                    'data' => Room::find($request->input('room'))->desks
                ]);
            }
            return response()->json([
                'error' => true,
                'message' => 'Room with id ' . $request->input('room') . ' not found.',
                'data' => null
            ], 404);
        }
        return response()->json([
            'error' => false,
            'message' => 'Success!',
            'data' => Desk::all()
        ]);
    }

    public function store(Request $request)
    {
        if (null === $request->room_id) {
            return response()->json([
                'error' => true,
                'message' => 'room_id field must be included.',
                'data' => null
            ], 400);
        }

        if (Room::where('id', $request->room_id)->doesntExist()) {
            return response()->json([
                'error' => true,
                'message' => "Room with id $request->room_id not found.",
                'data' => null
            ], 418);
        }

        $desk = new Desk;

        $desk->id = substr(Str::uuid()->getHex(), 0, 24);
        $desk->room_id = $request->room_id;
        $desk->order = Room::find($request->room_id)->desks->max('order') + 1;

        $desk->save();

        return response()->json([
            'error' => false,
            'message' => 'Success!',
            'data' => $desk
        ]);
    }

    public function destroy($id)
    {
        if (Desk::where('id', $id)->doesntExist()) {
            return response()->json([
                'error' => true,
                'message' => "Desk with id $id not found.",
                'data' => null
            ], 404);
        }

        Desk::destroy($id);

        return response()->json([
            'error' => false,
            'message' => 'Success!',
            'data' => $id
        ]);
    }
}
