<?php

namespace App\Http\Controllers;

use App\ArticleModel;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    
    public function index()
    {
        $articles = ArticleModel::index();
        // dd($articles);
        return view('artikel.index', compact('articles'));
    }

    public function create()
    {
        return view('artikel.create');
    }

    public function store(Request $request)
    {   
        ArticleModel::save($request->all());
        return redirect('/artikel');
    }


    public function show($id)
    {
        $content = ArticleModel::show($id);
        return view('artikel.show', compact('content'));
    }


    public function edit($id)
    {
        $content = ArticleModel::show($id);
        return view('artikel.edit', compact('content'));
    }


    public function update(Request $request, $id)
    {
        ArticleModel::update($request->all(),$id);
        return redirect('/artikel');
    }


    public function destroy($id)
    {
        ArticleModel::destroy($id);
        return redirect('/artikel');
    }
}
