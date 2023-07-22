<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Article;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
            ->paginate(10);

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
            'short_description' => 'required',
            'img' => 'required|image',
            'status' => 'required',
            'category' => 'required',
            'cid' => 'required_if:category,==,seasons_update',
            'type' => 'required',
            'min' => 'required|numeric'
        ]);

        $v['img'] = uploadImage($v['img'], 'article');

        $v['slug'] = Str::slug($v['title']);

        $v['created_by'] = auth()->id();

        Article::create($v);

        return redirect()
            ->route('article')
            ->with('post.success', 'Article created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admin.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $input = $request->validate([
            'title' => 'required|max:250|unique:articles,title,' . $article->id,
            'description' => 'required',
            'short_description' => 'required',
            'img' => 'nullable|image',
            'status' => 'required',
            'category' => 'required',
            'cid' => 'required_if:category,==,seasons_update',
            'type' => 'required',
            'min' => 'required|numeric'
        ]);

        if (isset($input['img'])) {

            $input['img'] = uploadImage($input['img'], 'article');

            deleteImage($article->img);
        }

        $input['slug'] = Str::slug($input['title']);

        $article->update($input);

        return redirect()
            ->route('article')
            ->with('post.success', 'Article updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()
            ->back()
            ->with('article.success', 'Article deleted successfully!');
    }
}
