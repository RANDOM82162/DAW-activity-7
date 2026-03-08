<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        return Group::all();
    }

    public function store(Request $request)
    {
        return Group::create($request->all());
    }

    public function show(string $id)
    {
        return Group::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $group = Group::findOrFail($id);
        $group->update($request->all());

        return $group;
    }

    public function destroy(string $id)
    {
        $group = Group::findOrFail($id);
        $group->delete();

        return response()->json(['message' => 'Group deleted successfully']);
    }
}