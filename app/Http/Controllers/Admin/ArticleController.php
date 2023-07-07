<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $res = Article::with('user')
            ->when(isset($request->search), function ($q) use ($request) {
                $q->where('title', 'like', "%{$request->search}%");
                $q->Orwhere('description', 'like', "%{$request->search}%");
            })
            ->orderBy('id', 'desc')
            ->paginate(100);

        return view('admin.article.list', compact('res'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $v = $request->validate([
            'title' => 'required|max:250|unique:articles',
            'description' => 'required',
            'img' => 'required|image',
            'status' => 'required',
            'category' => 'required',
            'cid' => 'required_if:category,==,seasons_update',
            'type' => 'required',
            'min' => 'required|numeric'
        ]);

        $v['img'] = uploadImage($v['img'], 'article');

        $v['slug'] = \Str::slug($v['title']);

        $v['created_by'] = auth()->id();

        Article::create($v);

        return redirect()->route('article')->with('post.success', 'Article created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);

        return view('admin.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $v = $request->validate([
            'title' => 'required|max:250|unique:articles,title,' . $id,
            'description' => 'required',
            'img' => 'nullable|image',
            'status' => 'required',
            'category' => 'required',
            'cid' => 'required_if:category,==,seasons_update',
            'type' => 'required',
            'min' => 'required|numeric'
        ]);

        if (isset($v['img'])) {

            $v['img'] = uploadImage($v['img'], 'article');

            $article = Article::find($id);

            deleteImage($article->img);
        } else {

            unset($v['img']);
        }

        $v['slug'] = \Str::slug($v['title']);

        Article::where('id', $id)->update($v);

        return redirect()->route('article')->with('post.success', 'Article updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);

        return redirect()->back()->with('article.success', 'Article deleted successfully!');
    }
}
