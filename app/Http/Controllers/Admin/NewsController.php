<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $news = News::with('user')
            ->when(isset($request->search), function ($q) use ($request) {
                $q->where('title', 'like', "%{$request->title}%");
                $q->Orwhere('short_description', 'like', "%{$request->short_description}%");
                $q->Orwhere('description', 'like', "%{$request->description}%");
            })
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('admin.news.list', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            'title' => 'required|max:255|unique:news',
            'short_description' => 'required',
            'description' => 'required',
            'status' => 'required',
            'img' => 'required|image',
            'min' => 'required|numeric'
        ]);

        $v['created_by'] = auth()->id();
        $v['slug'] = Str::slug($v['title']);
        $v['img'] = uploadImage($v['img'], 'news');

        News::create($v);

        return redirect()->route('news')->with('news.success', 'News created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);

        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $v = $request->validate([
            'title' => 'required|max:255|unique:news,title,' . $id,
            'short_description' => 'required',
            'description' => 'required',
            'status' => 'required',
            'img' => 'nullable|image',
            'min' => 'required|numeric'
        ]);

        $v['created_by'] = auth()->id();
        $v['slug'] = Str::slug($v['title']);

        if (isset($v['img'])) {

            $v['img'] = uploadImage($v['img'], 'news');

            $news = News::find($id);

            deleteImage($news);
        }

        News::where('id', $id)->update($v);

        return redirect()->route('news')->with('news.success', 'News updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);

        return redirect()->route('news')->with('news.success', 'News updated successfully');
    }
}
