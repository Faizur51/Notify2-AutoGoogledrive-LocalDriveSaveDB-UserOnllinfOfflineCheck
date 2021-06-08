<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Storage;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        //notify()->success('Laravel Notify is awesome!');
        //emotify('success', 'You are awesome, your data was successfully created');

        //smilify('success', 'You are successfully reconnected');
       // notify()->success('Welcome to Laravel Notify ⚡️');

       $user=auth()->user()->name;
      
       notify()->preset('user-updated', ['title' => $user]);
       //notify()->preset('user-updated');


       $user=User::all();

       Storage::disk('google')->put('hello.txt','Hello world');
        return view('home',compact('user'));
    }
}
