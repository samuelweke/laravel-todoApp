<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mylist;

class MylistController extends Controller
{
    public function home(){
   		 $mylists = Mylist::all();
    	return view('home', ['mylists' => $mylists]);

    }



    public function add(Request $request){
    	$this->validate($request,  [
    		'todo' => 'required',
    		'description'=>'required'
        ]);

        
        $mylists = new Mylist;
        $mylists ->name =$request->input('todo');
        $mylists ->details =$request->input('description');
        $mylists ->save();
        return redirect('/')->with('info', 'Todo saved Successfully!');

    }

    public function view($id){
    	 $mylists = Mylist::find($id);
    	
    	return view('view', compact('mylists'));
    }
}
