<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\mytest;
use App\Http\Request\post;
use App\Http\Requests\postsubmit;
use Illuminate\Support\Facades\Session;

class Test extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $posts = mytest::paginate(5);		
        return view('test/index')->with('posts',$posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('test/create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(postsubmit $request)
	{
        $post = new mytest;
        
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();        
        Session::flash('message','Successfully save');        
        Session::flash('alert','alert-success');        
        return redirect('/');        
        
        
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = mytest::find($id);
        
        return view('test/show')->with('post',$post);
        
        
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
