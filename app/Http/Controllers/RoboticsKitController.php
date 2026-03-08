<?php

namespace App\Http\Controllers;

use App\Models\RoboticsKit;
use Illuminate\Http\Request;

class RoboticsKitController extends Controller
{
    public function index()
    {
        return RoboticsKit::all();
    }

    public function store(Request $request)
    {
        return RoboticsKit::create($request->all());
    }

    public function show(string $id)
    {
        return RoboticsKit::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $roboticsKit = RoboticsKit::findOrFail($id);
        $roboticsKit->update($request->all());

        return $roboticsKit;
    }

    public function destroy(string $id)
    {
        $roboticsKit = RoboticsKit::findOrFail($id);
        $roboticsKit->delete();

        return response()->json(['message' => 'Robotics kit deleted successfully']);
    }
}