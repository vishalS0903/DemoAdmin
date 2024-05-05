<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::get();
        return view('role-permissions.permission.index', compact('permissions'));
    }

    public function create()
    {
        return view('role-permissions.permission.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required', 'string', 'unique:permissions,name'
        ]);
        Permission::create([
            'name' => $request->name
        ]);
        return redirect()->route('permission.index')->with('success','Updated Added');

    }



    public function edit($id)
    {
        $permission = Permission::find($id);
        if ($permission) {

            return view('role-permissions.permission.edit', compact('permission'));
        }

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required', 'string', 'unique:permissions,name'
        ]);
        $permission =    Permission::find($id);

        $permission->name = $request->name;
        $permission->save();

        return redirect()->route('permission.index')->with('success','Updated Permission');
    }
}
