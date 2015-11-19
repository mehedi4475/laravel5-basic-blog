<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\mytest;
use App\Http\Request\post;
use App\Http\Requests\postsubmit;
use Illuminate\Support\Facades\Session;
use DB;
use Hash;
use Auth;



class Test extends Controller {

	//Home page. Login form
	public function index(){  
        
          if(Auth::check()){
            $loginStatus = "logout";
        }
        else{
            $loginStatus = "login";
        }
        
        $posts = mytest::paginate(5);
        return view('test/index')->with(array('posts' => $posts, 'loginStatus' => $loginStatus)); 
	}
    
    
    //Login page view
    public function login(){
        
        return view('test/login');
        
    }
    
    
    
    //Login form submit data process for login verification
    public function loginVerification(Request $request){
    
        $shareholder = new mytest;        
        echo $username = $request->input('email');
        echo $password = $request->input('password');        
        if (Auth::attempt(array('email' => $username, 'password' => $password))){          
            return redirect('/dashboard');
        }
        else{
            session::flash('message','<b>Username</b> or <b>Password</b> is wrong'); 
            return redirect('/');
        }      
    }
    
    
    
    //Admin dashboard 
    public function dashboard(){  
        
         if(Auth::check()){
            $loginStatus = "logout";
        }
        else{
            $loginStatus = "login";
        } 
        
        if (Auth::check()){            
            $posts = mytest::paginate(5);		
            return view('test/index')->with(array('posts' => $posts, 'loginStatus' => $loginStatus));            
        }
        else{
            return redirect('/');
        }        
    }
    
    
    //Logout 
    public function logout(){
        
        Auth::logout();        
        return redirect('/');
        
    }
    
    
    
    //Create a new post. View the form
	public function create(){
                  
        if(Auth::check()){
            return view('test/create');
        }
        else{
            return redirect('/');
        }		
	}

    
    
    //Save a new post request
	public function store(postsubmit $request){
    
        if(Auth::check()){
            $post = new mytest;

            $post->title = $request->input('title');
            $post->description = $request->input('description');
            $post->save();        
            Session::flash('message','Successfully save');        
            Session::flash('alert','alert-success');        
            return redirect('/dashboard');      
        }
        else{
            return redirect('/');
        }  
	}
    
    

    //Show a single post
	public function show($id)
	{
		$post = mytest::find($id);        
        return view('test/show')->with('post',$post);       
        
	}
    
    

	//Edit a post
	public function edit($id){  
        
        if(Auth::check()){
            $editPost = mytest::find($id);        
            return view('test/edit')->with('editPost', $editPost);
        }
        else{
            return redirect('/');
        }
        
        
	}

	
    //Update post data after edit
	public function update($id, postsubmit $request)
	{             
        
        if(Auth::check()){
            $updatePost = mytest::find($id);        
            $updatePost->title = $request->input('title');
            $updatePost->description = $request->input('description');        
            $updatePost->save();        
            Session::flash('message','Successfully update');
            Session::flash('alert','alert-success');        
            return redirect('/dashboard');
        }
        else{
            return redirect('/');
        }       
        
		
	}

    
    
	//Delete a post
	public function destroy($id){        
        if(Auth::check()){
            $delete = mytest::find($id);         
            //$query = DB::table('mytests')->select('title');
            //$users = $query->addSelect('age')->get();
            //var_dump($query);
            //$delete->delete();
            //Session::flash('message','Successfully Delete');
            //Session::flash('alert','alert-success');
            //return redirect('/');
        }
        else{
            return redirect('/');
        }
	}
    

}
