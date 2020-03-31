<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Micropost;

class FavoritesController extends Controller
{
    public function store(Request $request, $id)
    {
        $micropost = \App\Micropost::find($id);

        \Auth::user()->favorite($id);
        return back();
    }

    public function destroy($id)
    {
        \Auth::user()->unfavorite($id);
        return back();
    }
}
