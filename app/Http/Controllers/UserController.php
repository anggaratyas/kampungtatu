<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.users.index');
    }

    public function getdatauser()
    {
        $users = User::select('users.*');
        return \DataTables::eloquent($users)
        ->addColumn('nama_link',function($p){
            return '<a href="/users/'.$p->id.'">'.$p->name.'</a>';
        })
        ->rawColumns(['nama_link'])
        ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::orderBy('name', 'ASC')->get();
        return view('layouts.users.register', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate($request, [
            'name' => 'required',
            'password' => 'required',
            'role' => 'required|exists:roles,name'
        ]);

        $user = User::firstOrCreate([
            'name' => $request->name
        ],[
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'remember_token' => Str::random(60),
            'status' => true
        ]);
        $user->assignRole($request->role);

        return redirect('/user')->with('status', 'Data Admin berhasil ditambahkan');
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
