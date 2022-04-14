<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fellow;

class FellowController extends Controller
{
    public function home(){
        return view('home');
    }

    public function register(){
        return view('register');
    }

    public function create(){
        return view('register');
    }

    public function list(){
        $fellow=Fellow::all();
        return view('list')->with('fellow', $fellow);
    }

    public function store(Request $request){
        Fellow::create($request->all());
        return redirect('/list');
    }

    public function edit($id){
        $fellow=Fellow::find($id);
        return view('editfellow')->with('fellow', $fellow);
    }

    public function update(Request $request, $id){
        $fellow=Fellow::find($id);
        $fellow->fname=$request->fname;
        $fellow->lname=$request->lname;
        $fellow->update();
        return redirect('/list');
    }

    public function delete($id){
        Fellow::destroy($id);
        return back();
    }
}
