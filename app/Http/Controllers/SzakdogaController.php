<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Szakdoga;

class SzakdogaController extends Controller
{
    public function index(Request $request)
    {
        return Szakdoga::all();  
    }
    

    public function store(Request $request)
    {
        return Szakdoga::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Szakdoga::find($id);
        $article->update($request->all());
        
        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Szakdoga::find($id);
        $article->delete();
        return ['message' => 'Törölve'];
    }
}
