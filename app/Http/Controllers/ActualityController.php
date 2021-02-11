<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualityRequest;
use App\Models\Actuality as ActualityModel;
class ActualityController extends Controller
{


    public function newsHomePage()
    {
        $actualities = ActualityModel::all();
        return view('home', compact('actualities'));
    }

    public function listeNewsPage()
    {
        $actualities = ActualityModel::all();
        return view('news', compact('actualities'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actualities = ActualityModel::withTrashed()->get();
        return view('admin/actuality/index', compact('actualities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/actuality/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ActualityRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActualityRequest $request)
    {
        ActualityModel::create($request->all());

        return redirect()
            ->route('actuality.index')
            ->with('info', 'Actualité créée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actuality = ActualityModel::findOrFail($id);
        return view('actuality/show', compact('actuality','actuality'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  ActualityModel  $actuality
     * @return \Illuminate\Http\Response
     */
    public function edit(ActualityModel $actuality)
    {
        return view('admin/actuality/edit', compact('actuality'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ActualityRequest  $request
     * @param  ActualityModel  $actuality
     * @return \Illuminate\Http\Response
     */
    public function update(ActualityRequest $request, ActualityModel $actuality)
    {
        $actuality->update($request->all());

        return redirect()
            ->route('actuality.index')
            ->with('info', 'Actualité mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  ActualityModel  $actuality
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActualityModel $actuality)
    {
        $actuality->delete();

        return back()->with('info', 'Actualité mise dans la corbeille');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  ActualityModel  $actuality
     * @return \Illuminate\Http\Response
     */
    public function forceDestroy($actualityId)
    {
        ActualityModel::withTrashed()->whereId($actualityId)->firstOrFail()->forceDelete();

        return back()->with('info', 'Actualité supprimée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  ActualityModel  $actuality
     * @return \Illuminate\Http\Response
     */
    public function restore($actualityId)
    {
        ActualityModel::withTrashed()->whereId($actualityId)->firstOrFail()->restore();

        return back()->with('info', 'Categorie restaurée');
    }

}

