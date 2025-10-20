<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        return response()->json(Note::all());
    }

    public function show($id)
    {
        return response()->json(Note::findOrFail($id));
    }

    public function store(Request $request)
    {
        $note = Note::create($request->all());
        return response()->json($note, 201);
    }

    public function update(Request $request, $id)
    {
        $note = Note::findOrFail($id);
        $note->update($request->all());
        return response()->json($note);
    }

    public function destroy($id)
    {
        Note::destroy($id);
        return response()->json(['message' => 'Note deleted successfully']);
    }
}
