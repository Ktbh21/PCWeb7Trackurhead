<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Trackhead;

class TrackheadController extends Controller
{
    public function index(){
        $user = Auth::user();
        $profile = Trackhead::where('user_id', $user->id)->get();
        $entry = Trackhead::where('user_id', $user->id)->get();
        $headachecount = Trackhead::where('user_id', $user->id)->count();
        // $posts = \App\Models\Post::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        // $numPosts = \App\Models\Post::where('user_id', $user->id)->count();
        

        return view('profile',
         [
            'user' => $user,
            'profile' => $profile,
            'entry' => $entry,
            'headachecount' =>$headachecount
        ]);
     }

    public function create(){
        return view('create');

    }


    public function postCreate() {
        $data = request()->validate([
            'date' => 'required',
            'headacheduration' => 'required',
            'sleepduration' => 'required',
            'painregion' => 'required'
        ]);


        // create a new headache entry, and save it
        $user = Auth::user();
        $profile = new Trackhead();
        $profile->user_id = $user->id;
        $profile->date = request('date');
        $profile->headacheduration = request('headacheduration');
        $profile->sleepduration = request('sleepduration');
        $profile->painregion = request('painregion');


        $saved = $profile->save();

        // if it saved, we send them to the profile page
        if ($saved) {
            return redirect('/profile');
        }


    }

    public function edit(){ 
        $user = Auth::user();
        $profile = Trackhead::where('user_id', $user->id)->first();
        return view('edit', [
        'profile' => $profile,]);
    
    }


    public function postEdit($id)
    {
        $data = request()->validate([
            'date' => 'required',
            'headacheduration' => 'required',
            'sleepduration' => 'required',
            'painregion' => 'required'
        ]);
        // Load the existing profile
        $user = Auth::user();
      
        // Find the corresponding profile with the $id,
        // Create a new profile if its empty
        $entry = Trackhead::where('id', $id)->first();
        // if(empty($entry)){
        //     $entry = new Trackhead();
        //     $entry->user_id = $user->id;
        // }
        $entry->date = request('date');
        $entry->headacheduration = request('headacheduration');
        $entry->sleepduration = request('sleepduration');
        $entry->painregion = request('painregion');
   
 
        // Now, save it all into the database
        $updated = $entry->save();
        if ($updated) {
            return redirect('/profile');
        }
    }



    public function entry($id){
        $user = Auth::user();
        $profile = Trackhead::where('user_id', $user->id)->first();
        $entry = Trackhead::where('id',$id)->first();
        return view('entry',[
            'user' => $user,
            'profile' => $profile,
            'entry' => $entry,
        ]);
    
    }
    

    public function update(){
  
    }
    public function delete($id){

        $entry = Trackhead::where('id', $id)->first()->delete();
        return redirect('/profile');
    
  
    
    }

     



     
}
