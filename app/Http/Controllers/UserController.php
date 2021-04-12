<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {
    /**
     * Display a listing of the users.
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $users = DB::table('users')
                    ->join('user_details', 'users.user_key', '=', 'user_details.user_key')
                    ->select('users.user_key','user_details.name_given', 'user_details.name_last', 'users.email')
                    ->get();

        return Inertia::render('Users/Index', [
            'users' => $users,

            'susers' => User::all()->map(function ($user) {
                return [
                    'Key' => $user->user_key,
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
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int User $user
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
     * @param  int User $user
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
     * @param  int User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user) {
        $user->delete();

        return redirect()->route('users.index')->with('successMsg', 'User successfully deleted.');
    }
}
