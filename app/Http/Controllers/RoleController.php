<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;



class RoleController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('permission:view-role|create-role|update-role|delete-role', ['only' => ['index', 'show']]);
    //     $this->middleware('permission:create-role', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:edit-role', ['only' => ['edit', 'update']]);
    //     $this->middleware('permission:delete-role', ['only' => ['destroy']]);
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role = Role::get();
        return view('admin.role-permission.role.index', compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.role-permission.role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Role::create([
            'name' => $request->name
        ]);
        return redirect()->route('roles.index')->with('status', 'Role Created successfully');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {

        return view('admin.role-permission.role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $role->update([
            'name' => $request->name
        ]);
        return redirect()->route('roles.index')->with('status', 'Role Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        // $permission=Permission::find($permissionId);
        $role->delete();
        return redirect()->back()->with('delete', "Deleted Successfully");
    }
    public function addPermissionToRole($roleId)
    {
        $permissions = Permission::get();
        $role = Role::findOrFail($roleId);
        $rolePermissions = DB::table('role_has_permissions')->WHERE('role_has_permissions.role_id', $role->id)->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')->all();

        return view('admin.role-permission.role.addPermissions', compact('permissions', 'role', 'rolePermissions'));
    }
    public function givePermissionToRole(Request $request, $roleId)
    {
        $role = Role::findOrFail($roleId);
        $role->syncPermissions($request->permission);
        return redirect()->back()->with('status', "Permissions added to role");
    }
}
