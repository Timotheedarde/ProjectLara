<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrackRequest;
use App\Models\Track as TrackModel;

class TrackController extends Controller
{

    public function tracksHomePage()
    {
        $tracks = TrackModel::latest()->paginate(2);
        return view('home', compact('tracks'));
    }

    public function listeJukeboxPage()
    {
        $tracks = TrackModel::all();
        return view('jukebox', compact('tracks'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tracks = TrackModel::withTrashed()->get();
        return view('admin/track/index', compact('tracks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/track/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TrackRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrackRequest $request)
    {
        TrackModel::create($request->all());

        return redirect()
            ->route('track.index')
            ->with('info', 'Track créée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  TrackModel  $track
     * @return \Illuminate\Http\Response
     */
    public function edit(TrackModel $track)
    {
        return view('admin/track/edit', compact('track'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TrackRequest  $request
     * @param  TrackModel  $track
     * @return \Illuminate\Http\Response
     */
    public function update(TrackRequest $request, TrackModel $track)
    {
        $track->update($request->all());

        return redirect()
            ->route('track.index')
            ->with('info', 'Track mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  TrackModel  $track
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrackModel $track)
    {
        $track->delete();

        return back()->with('info', 'Track mise dans la corbeille');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  TrackModel  $track
     * @return \Illuminate\Http\Response
     */
    public function forceDestroy($trackId)
    {
        TrackModel::withTrashed()->whereId($trackId)->firstOrFail()->forceDelete();

        return back()->with('info', 'Track supprimée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  TrackModel  $track
     * @return \Illuminate\Http\Response
     */
    public function restore($trackId)
    {
        TrackModel::withTrashed()->whereId($trackId)->firstOrFail()->restore();

        return back()->with('info', 'Track restaurée');
    }

}

