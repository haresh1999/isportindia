<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\{
    Article,
    Fantasy,
    ArticleFantasy
};

use Illuminate\Support\{
    Str,
    Arr
};

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
        $fantasy = Fantasy::where('status', 1)
            ->pluck('name', 'id');

        return view('admin.article.create', compact('fantasy'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'title' => 'required|max:250|unique:articles',
            'description' => 'required',
            'short_description' => 'required',
            'img' => 'required|image',
            'status' => 'required',
            'category' => 'required',
            'cid' => 'required_if:category,==,seasons_update',
            'type' => 'required',
            'min' => 'required|numeric',
            'fantasy_id.*' => 'required|integer|exists:fantasies,id'
        ]);

        $input['img'] = uploadImage($input['img'], 'article');

        $input['slug'] = Str::slug($input['title']);

        $input['created_by'] = auth()->id();

        $res = Article::create(Arr::except($input, 'fantasy_id'));

        foreach ($input['fantasy_id'] as $f_id) {

            ArticleFantasy::create([
                'article_id' => $res->id,
                'fantasy_id' => $f_id
            ]);
        }

        return redirect()
            ->route('article')
            ->with('article.success', 'Article created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        dd($article->fantasy);

        $fantasy = Fantasy::where('status', 1)->pluck('name', 'id');

        return view('admin.article.edit', compact('article', 'fantasy'));
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
            'min' => 'required|numeric',
            'fantasy_id.*' => 'required|integer|exists:fantasies,id'
        ]);

        if (isset($input['img'])) {

            $input['img'] = uploadImage($input['img'], 'article');

            deleteImage($article->img);
        }

        $input['slug'] = Str::slug($input['title']);

        foreach ($input['fantasy_id'] as $f_id) {

            if (
                ArticleFantasy::where('article_id', $article->id)
                ->where('fantasy_id', $f_id)
                ->doesntExist()
            ) {
                ArticleFantasy::create([
                    'article_id' => $article->id,
                    'fantasy_id' => $f_id
                ]);
            }
        }

        $article->update($input);

        return redirect()
            ->route('article')
            ->with('article.success', 'Article updated successfully!');
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
            ->with('article.error', 'Article deleted successfully!');
    }
}
