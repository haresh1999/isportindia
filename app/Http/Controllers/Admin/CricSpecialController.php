<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\CricSpecial;
use Illuminate\Http\Request;

class CricSpecialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $res = CricSpecial::with('user')
            ->when(isset($request->search), function ($q) use ($request) {
                $q->where('title', 'like', "%{$request->search}%");
                $q->Orwhere('short_description', 'like', "%{$request->search}%");
                $q->Orwhere('description', 'like', "%{$request->search}%");
            })
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('admin.cricspecial.list', compact('res'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cricspecial.create');
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
            'title' => 'required|max:255|unique:cric_specials',
            'short_description' => 'required',
            'description' => 'required',
            'status' => 'required',
            'img' => 'required|image',
            'min' => 'required|numeric'
        ]);

        $v['created_by'] = auth()->id();
        $v['slug'] = \Str::slug($v['title']);
        $v['img'] = uploadImage($v['img'], 'cricspecial');

        CricSpecial::create($v);

        return redirect()->route('cricspecial')->with('cricspecial.success', 'CricSpecial Created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CricSpecial  $cricSpecial
     * @return \Illuminate\Http\Response
     */
    public function show(CricSpecial $cricSpecial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CricSpecial  $cricSpecial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res = CricSpecial::find($id);

        return view('admin.cricspecial.edit', compact('res'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CricSpecial  $cricSpecial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $v = $request->validate([
            'title' => 'required|max:255|unique:cric_specials,title,' . $id,
            'short_description' => 'required',
            'description' => 'required',
            'status' => 'required',
            'img' => 'nullable|image',
            'min' => 'required|numeric'
        ]);

        $v['slug'] = \Str::slug($v['title']);

        if (isset($v['img'])) {

            $v['img'] = uploadImage($v['img'], 'cricspecial');

            $cs = CricSpecial::find($id);

            deleteImage($cs->img);
        } else {

            unset($v['img']);
        }

        CricSpecial::where('id', $id)->update($v);

        return redirect()->route('cricspecial')->with('cricspecial.success', 'CricSpecial Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CricSpecial  $cricSpecial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CricSpecial::destroy($id);

        return redirect()->route('cricspecial')->with('cricspecial.warning', 'CricSpecial Deleted successfully!');
    }
}
