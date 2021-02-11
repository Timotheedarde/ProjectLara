<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category as CategoryModel;

class CategoryController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryModel::withTrashed()->get();
        return view('admin/category/index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/category/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        CategoryModel::create($request->all());

        return redirect()
            ->route('category.index')
            ->with('info', 'Catégorie créée');
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
     * @param  CategoryModel  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryModel $category)
    {
        return view('admin/category/edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CategoryRequest  $request
     * @param  CategoryModel  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, CategoryModel $category)
    {
        $category->update($request->all());

        return redirect()
            ->route('category.index')
            ->with('info', 'Catégorie mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  CategoryModel  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryModel $category)
    {
        $category->delete();

        return back()->with('info', 'Catégorie mise dans la corbeille');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  CategoryModel  $category
     * @return \Illuminate\Http\Response
     */
    public function forceDestroy($categoryId)
    {
        CategoryModel::withTrashed()->whereId($categoryId)->firstOrFail()->forceDelete();

        return back()->with('info', 'Catégorie supprimée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  CategoryModel  $category
     * @return \Illuminate\Http\Response
     */
    public function restore($categoryId)
    {
        CategoryModel::withTrashed()->whereId($categoryId)->firstOrFail()->restore();

        return back()->with('info', 'Categorie restaurée');
    }

}

