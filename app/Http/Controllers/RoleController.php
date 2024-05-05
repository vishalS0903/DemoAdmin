<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function create()
    {
        return view('role-permissions.role.create');
    }

    public function index()
    {
        $roles = Role::get();
        return view('role-permissions.role.index',compact('roles'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'Required','string','unique:roles,name',

        ]);

        Role::create([
            'name'=> $request->name,
        ]);
        return redirect('roles')->with('success',' Role Added!');

    }


    public function edit( Role $role)
    {
        // return view('role-permissions.role.index',compact('roleIds'));

        return view('role-permissions.role.edit',[
            'role' => $role]);

    }


    public function update(Request $request,Role $role){
        $request->validate([
            'name'=>[
                    'required',
                    'string',
                    'unique:roles,name'.$role->id,
                ]
        ]);
        $role->update([
            'name'=> $request->name,
        ]);
        return redirect('roles')->with('success','updated Role!');

    }

    public function destroy($permissionId)
    {
        $role = Role::find($permissionId);
        $role->delete();
        return redirect('roles')->with('success','Deleted Role!');

    }

    public function addPermission($roleId)
    {
        $role = Role::findOrFail($roleId);
        $permissions = Permission::all();
        $rolesPermission = DB::table('role_has_permissions')
                        ->where('role_has_permissions.role_id',$role->id)
                        ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
                        ->all();
        // dd($rolesPermission);
        return view('role-permissions.role.add-permission',compact('role','permissions','rolesPermission'));
    }


    public function givePermission(Request $request,$roleId)
    {
        // dd($request->all());

        $request->validate([
            'permissions' => 'required',
        ]);

        $role = Role::findOrFail($roleId);
        $role->syncPermissions($request->permissions);

        return redirect('roles')->with('success','Permissions added to Role!');

    }
}
