<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    // Get all classrooms
    public function index()
    {
        $classrooms = Classroom::all();
        return response()->json([
            'success' => true,
            'data' => $classrooms,
        ], 200);
    }

    // Store a new classroom
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'grade' => 'required|integer',
        ]);

        $classroom = Classroom::create([
            'name' => $request->name,
            'grade' => $request->grade,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Classroom created successfully.',
            'data' => $classroom,
        ], 201);
    }

    // Show a specific classroom
    public function show($id)
    {
        $classroom = Classroom::find($id);

        if (!$classroom) {
            return response()->json([
                'success' => false,
                'message' => 'Classroom not found.',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $classroom,
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $classroom = Classroom::find($id);

        if (!$classroom) {
            return response()->json([
                'success' => false,
                'message' => 'Classroom not found.',
            ], 404);
        }

        $request->validate([
            'name' => 'string|max:255',
            'grade' => 'integer',
        ]);

        $classroom->update($request->only(['name', 'grade']));

        return response()->json([
            'success' => true,
            'message' => 'Classroom updated successfully.',
            'data' => $classroom,
        ], 200);
    }

    public function destroy($id)
    {
        $classroom = Classroom::find($id);

        if (!$classroom) {
            return response()->json([
                'success' => false,
                'message' => 'Classroom not found.',
            ], 404);
        }

        $classroom->delete();

        return response()->json([
            'success' => true,
            'message' => 'Classroom deleted successfully.',
        ], 200);
    }
}