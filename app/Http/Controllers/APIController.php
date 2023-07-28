<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getMatch(Request $request)
    {
        $res = getSeasonsDetails($request->cid);

        return response()->json($res);
    }
}
