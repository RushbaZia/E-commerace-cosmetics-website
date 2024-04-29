<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;


class PermissionController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('permission:view-permission|create-permission|update-permission|delete-permission', ['only' => ['index', 'show']]);
    //     $this->middleware('permission:create-permission', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:edit-permission', ['only' => ['edit', 'update']]);
    //     $this->middleware('permission:delete-permission', ['only' => ['destroy']]);
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permission = Permission::get();
        return view('admin.role-permission.permission.index', compact('permission'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.role-permission.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Permission::create([
            'name' => $request->name
        ]);
        return redirect()->route('permissions.index')->with('status', 'Permission Created successfully');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {

        return view('admin.role-permission.permission.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        $permission->update([
            'name' => $request->name
        ]);
        return redirect()->route('permissions.index')->with('status', 'Permission Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        // $permission=Permission::find($permissionId);
        $permission->delete();
        return redirect()->back()->with('delete', "Deleted Successfully");
    }
}
