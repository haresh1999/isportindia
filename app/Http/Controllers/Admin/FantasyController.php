<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Fantasy;
use Illuminate\Http\Request;

class FantasyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $fantasys = Fantasy::when(isset($request->search), function ($q) use ($request) {
            $q->where('name', 'like', "%{$request->search}%");
        })
            ->paginate(10);

        return view('admin.fantasy.list', compact('fantasys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fantasy.create');
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
            'name' => 'required|unique:fantasies',
            'link' => 'required|url',
            'status' => 'required|in:1,2',
            'img' => 'required|image|mimes:jpg,pjeg,png,gif,webp'
        ]);

        $input['img'] = uploadImage($input['img']);

        Fantasy::create($input);

        return redirect()
            ->route('fantasy')
            ->with('fantasy.success', 'Fantasy tips created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fantasy  $Fantasy
     * @return \Illuminate\Http\Response
     */
    public function edit(Fantasy $fantasy)
    {
        return view('admin.fantasy.edit', compact('fantasy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fantasy  $Fantasy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fantasy $fantasy)
    {
        $input = $request->validate([
            'name' => 'required|unique:fantasies,title,' . $fantasy->id,
            'link' => 'required|url',
            'status' => 'required|in:1,2',
            'img' => 'nullable|image|mimes:jpg,pjeg,png,gif,webp'
        ]);

        if (isset($input['img'])) {

            $input['img'] = uploadImage($input['img']);

            deleteImage($fantasy->img);
        }

        $fantasy->update($input);

        return redirect()
            ->route('fantasy')
            ->with('Fantasy.success', 'Fantasy tips updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fantasy  $Fantasy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fantasy $Fantasy)
    {
        $Fantasy->delete();

        return redirect()
            ->route('fantasy')
            ->with('fantasy.error', 'Fantasy tips deleted successfully!');
    }
}
