<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $data = Articles::paginate(10);


        return response()->json($data->orderBy('data_ora', 'desc'));
    }

    public function show($id)
    {
        return Articles::find($id);
    }

    public function delete($id)
    {
        return Articles::table('articles')->delete($id);
    }

    public function create(Request $request)
    {

//        $input = $request->all();

        return Articles::create($request);
    }


}
