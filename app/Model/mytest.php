<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class mytest extends Model {

        
   public function posts(){
        
       $users = DB::table('users')->get();

        foreach ($users as $user)
        {
            var_dump($user->name);
        }
   }

}
