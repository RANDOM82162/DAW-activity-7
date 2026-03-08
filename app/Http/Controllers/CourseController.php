<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return Course::with(['roboticsKit', 'groups'])->get();
    }

    public function store(Request $request)
    {
        return Course::create($request->all());
    }

    public function show(string $id)
    {
        return Course::with(['roboticsKit', 'groups'])->findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $course = Course::findOrFail($id);
        $course->update($request->all());

        return $course;
    }

    public function destroy(string $id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return response()->json(['message' => 'Course deleted successfully']);
    }
}