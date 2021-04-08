<?php

namespace App\Http\Controllers;

use App\User;
use App\UserDetail;
use Inertia\Inertia;
use Illuminate\Http\Request;

class UserController extends Controller {
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return Inertia::render('Users/Index', [
            'users' => User::all()->map(function ($user) {
                return [
                    'id' => $user->user_key,
                    'name' => $user->user_name,
                    'email' => $user->user_email,
                    'edit_url' => URL::route('users.edit', $user)
                ];
            }),
            'create_url' => URL::route('users.create')

        ]);

        #$users = User::all();
        #return Inertia::render('Users/Index',['users' => $users,]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return Inertia::render('Users/Create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $uuid = Uuid::generate();

        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:16',
            'user_name_title' => 'required',
            'user_name_given' => 'required',
            'user_name_last' => 'required',
        ]);

        User::create([
            'user_key' => $uuid,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        UserDetail::create([
            'user_key' => $uuid,
            'user_name_title' => $request->user_name_title,
            'user_name_given' => $request->user_name_given,
            'user_name_middle' => $request->user_name_middle,
            'user_name_last' => $request->user_name_last,
            'user_dateofbirth' => $request->user_dateofbirth,
            'user_gender' => $request->user_gender

        ]);
        
        ## Success Msg ##
        return redirect()->route('users.index')->with('successMsg','User successfully added.');
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user) {
        return Inertia::render('Users/Edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user) {
        $request->validate([
            'email' => 'required|unique:users,email,'.$user->user_key,
        ]);

        $user->update([
            'email' => $request->email
        ]);

        return redirect()->route('users.index')->with('successMsg', 'User successfully modified.');
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user) {
        $user->delete();

        return redirect()->route('users.index')->with('successMsg', 'User successfully deleted.');
    }
}
