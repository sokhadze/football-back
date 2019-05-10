<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $data = Articles::all();
        return response()->json($data);
    }

    public function show($id)
    {
        return Articles::find($id);
    }

}
