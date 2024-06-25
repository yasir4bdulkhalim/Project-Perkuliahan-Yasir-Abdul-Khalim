<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paper;
use Illuminate\Support\Facades\Storage;

class PaperController extends Controller
{
    public function index()
    {
        $papers = Paper::all();
        return view('papers.index', compact('papers'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:2048',
            'author' => 'required|string',
            'topic' => 'required|string'
        ]);

        $file = $request->file('file');
        $directory = $file->store('papers');

        $paper = new Paper();
        $paper->tittle = $file->getClientOriginalName();
        $paper->fil_dir = $directory;
        $paper->author = $request->input('author');
        $paper->topic = $request->input('topic');
        $paper->save();

        return back()->with('success', 'File uploaded successfully');
    }

    public function download($id)
    {
        $paper = Paper::findOrFail($id);
        return Storage::download($paper->fil_dir, $paper->tittle);
    }

    public function edit($id)
    {
        $paper = Paper::findOrFail($id);
        return view('papers.edit', compact('paper'));
    }

    public function update(Request $request, $id)
    {
        $paper = Paper::findOrFail($id);

        $request->validate([
            'author' => 'required|string',
            'topic' => 'required|string'
        ]);

        $paper->author = $request->input('author');
        $paper->topic = $request->input('topic');
        $paper->save();

        return redirect()->route('papers.index')->with('success', 'Paper updated successfully');
    }

    public function destroy($id)
    {
        $paper = Paper::findOrFail($id);

        // Hapus file dari storage
        Storage::delete($paper->fil_dir);

        // Hapus record dari database
        $paper->delete();

        return back()->with('success', 'Paper deleted successfully');
    }
}
