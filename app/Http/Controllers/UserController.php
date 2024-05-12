<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('permission:view-user|create-user|update-user|delete-user', ['only' => ['index', 'show']]);
    //     $this->middleware('permission:create-user', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:edit-user', ['only' => ['edit', 'update']]);
    //     $this->middleware('permission:delete-user', ['only' => ['destroy']]);
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        return view('admin.role-permission.user.index', compact('users'));
    }
    // public function userCount()
    // {
    //     $users = User::get();
    //     return view('admin.dashboard', compact('users'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.role-permission.user.create', compact('roles'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect('/users')->with('status', 'User Created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        $userRoles = $user->roles->all();
        return view('admin.role-permission.user.edit', compact('user', 'roles', 'userRoles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user->update($input);

        $user->assignRole($request->input('roles'));

        return redirect('/users')->with('status', 'User Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('delete', "User Deleted Successfully");
    }
}
