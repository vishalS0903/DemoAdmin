<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('role-permissions.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('role-permissions.user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:25',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|max:25',
            'role' => 'required',
        ]);




        // dd($request->all());
        $user=User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);
        $user->syncRoles($request->role);
        return redirect('users')->with('success',' User Added!');


    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        $userroles = $user->roles->pluck('name','name')->all();
        // dd($userroles);
        return view('role-permissions.user.edit',compact('user','roles','userroles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:25',
            'password' => 'nullable|string|min:8|max:255',
            'role' => 'required',
        ]);

        $data = [
            'name'=> $request->name,
            'email'=> $request->email,
        ];

        if(!empty($request->password))
        {
            $data += [
                'password'=> Hash::make($request->name),

            ];
        }


        // dd($request->all());
        $user->update(
            $data
        );
        $user->syncRoles($request->role);

        return redirect('users')->with('success',' User Updated with Roles!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($userId)
    {
        $user = User::findOrFail($userId);
        $user->delete();
        return redirect('users')->with('success',' User deleted with Roles!');

    }
}
