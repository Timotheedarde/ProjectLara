<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment as CommentModel;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = CommentModel::withTrashed()->get();
        return view('admin/comment/index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/comment/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CommentRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request)
    {
        CommentModel::create($request->all());

        return redirect()
            ->route('comment.index')
            ->with('info', 'Commentaire créée');
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
     * @param  CommentModel  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(CommentModel $comment)
    {
        return view('admin/comment/edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CommentRequest  $request
     * @param  CommentModel  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(CommentRequest $request, CommentModel $comment)
    {
        $comment->update($request->all());

        return redirect()
            ->route('comment.index')
            ->with('info', 'Commentaire mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  CommentModel  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommentModel $comment)
    {
        $comment->delete();

        return back()->with('info', 'Commentaire mis dans la corbeille');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  CommentModel  $comment
     * @return \Illuminate\Http\Response
     */
    public function forceDestroy($commentId)
    {
        CommentModel::withTrashed()->whereId($commentId)->firstOrFail()->forceDelete();

        return back()->with('info', 'Commentaire supprimé');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  CommentModel  $comment
     * @return \Illuminate\Http\Response
     */
    public function restore($commentId)
    {
        CommentModel::withTrashed()->whereId($commentId)->firstOrFail()->restore();

        return back()->with('info', 'Commentaire restauré');
    }

}

