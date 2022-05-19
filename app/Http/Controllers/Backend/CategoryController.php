<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreCategoryRequest;
use App\Http\Requests\Dashboard\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.category.index')->with('categories',Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        try {
            Category::create($request->all());
            session()->flash('success', 'Categoria criada com sucesso.');
            return redirect()->route('category.index');
        } catch (\Throwable $e) {
            throw $e;
            session()->flash('error', 'Erro na criação da categoria.');
            return redirect()->route('category.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('backend.category.create_edit')->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {

        try {
            $category->update($request->all());
            session()->flash('success', 'categoria actualizada com sucesso.');
            return redirect()->route('category.index');
        } catch (\Throwable $e) {
            session()->flash('error', 'Erro na actualização da categoria.');
            return redirect()->route('category.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if (!is_null($category) && $category->posts->isEmpty()) {
            try {
                $category->delete();
                session()->flash('success', 'Categoria deletada com sucesso.');
                return redirect()->route('category.index');
            } catch (\Throwable $e) {
                session()->flash('error', 'Erro ao deletar: " Contacte o administrador do sistema."');
                return redirect()->route('category.index');
            }
        } else {
            session()->flash('error', 'Não se pode deletar categoria de possue Postagen\'s  \n Por favor Apague os Post\'s primeiro.');
            return redirect()->route('category.index');
        }
    }
}
