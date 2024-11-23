<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the subjects.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Subject::all(), 200);
    }

    /**
     * Store a newly created subject in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $subject = Subject::create($validated);
        return response()->json($subject, 201);
    }

    /**
     * Display the specified subject.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $subject = Subject::find($id);

        if (!$subject) {
            return response()->json(['message' => 'Subject not found'], 404);
        }

        return response()->json($subject, 200);
    }

    /**
     * Update the specified subject in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $subject = Subject::find($id);

        if (!$subject) {
            return response()->json(['message' => 'Subject not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $subject->update($validated);
        return response()->json($subject, 200);
    }

    /**
     * Remove the specified subject from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $subject = Subject::find($id);

        if (!$subject) {
            return response()->json(['message' => 'Subject not found'], 404);
        }

        $subject->delete();
        return response()->json(['message' => 'Subject deleted'], 200);
    }
}