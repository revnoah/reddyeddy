<?php

namespace App\Http\Controllers;

use Auth;
use App\Signup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $signup = new Signup();

        return view('signup.create', compact('signup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $signup = new Signup();

        return view('signup.create', compact('signup'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $email = $request->input('email');

        $signup_exists = Signup::where('email', '=', $email)->first();

        if ($signup_exists) {
            $signup_exists->delete();
        } else {
            $signup = new Signup;
            $signup->email = $email;
            
            $item_saved = $signup->save();
        }

        //handle item after saved
        if($signup_exists) {
            //display message to display to user
            $request->session()->flash('message', 'Your email address has been removed');
            $request->session()->flash('status', 'info');
        } elseif ($item_saved) {
            //display message to display to user
            $request->session()->flash('message', 'You have signed up');
            $request->session()->flash('status', 'success');
        } else {
            //display message to display to user
            $request->session()->flash('message', 'Unable to sign up');
            $request->session()->flash('status', 'danger');
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function show(Signup $signup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function edit(Signup $signup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Signup $signup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Signup $signup)
    {
        //
    }
}
