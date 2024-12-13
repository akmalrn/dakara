<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('backend.videos.index', compact('videos'));
    }

    public function create()
    {
        return view('backend.videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'youtube' => 'required',
            'title' => 'required|string|max:255',
        ]);

        Video::create([
            'youtube' => $request->youtube,
            'title' => $request->title,
        ]);

        return redirect()->route('videos.index')->with('success', 'Video created successfully');
    }

    public function edit($id)
    {
        $video = Video::findOrFail($id);
        return view('backend.videos.edit', compact('video'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'youtube' => 'required',
            'title' => 'required|string|max:255',
        ]);

        $video = Video::findOrFail($id);
        $video->update([
            'youtube' => $request->youtube,
            'title' => $request->title,
        ]);

        return redirect()->route('videos.index')->with('success', 'Video updated successfully');
    }

    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();

        return redirect()->route('videos.index')->with('success', 'Video deleted successfully');
    }
}
