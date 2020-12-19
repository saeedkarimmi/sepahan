<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

use Validator;

class DashboardController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        return view('management');
    }

    public function getIndex(){
        return view('dashboard.index');
    }
    public function getprofile(){
        return view('dashboard.profile');
    }
    public function getUsers(){
        $data = [
            'users'=> User::all(),
            'title'=>'مدیریت کاربران ادمین',
            'action'=>'add'
        ];
        if (auth()->check() && auth()->user()->isSuperUser){
            return view('dashboard.users', $data);
        }
        return back();
    }

    public function createUser(Request $request){
        $validator = $request->validate([
            'firstname' => 'required|min:3|max:255',
            'lastname' => 'required|min:3|max:255',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:5',
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make( $request->password ),
        ]);

        $data = [
            'users'=> User::all(),
            'title'=>'مدیریت کاربران ادمین',
            'action'=>'add',
            'message'=>'User created successfully.'
        ];
        if (auth()->check() && auth()->user()->isSuperUser){
            return view('dashboard.users', $data);
        }
        return back();
    }

    public function editUser($id){
        $data = [
            'users'=> User::all(),
            'title'=>'Edit User',
            'action'=>'edit',
            'currentUser'=> User::findOrFail($id)
        ];
        if (auth()->check() && auth()->user()->isSuperUser){
            return view('dashboard.users', $data);
        }
        return back();
    }

    public function updateUser($id, Request $request){
        $validator = $request->validate([
            'firstname' => 'required|min:3|max:255',
            'lastname' => 'required|min:3|max:255',
            'email' => 'required|email:rfc,dns',
            'password' => 'nullable|min:5',
        ]);

        $currentUser = User::findOrFail($id);
        $currentUser->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email
        ]);
        if( $request->password ){
            $currentUser->update([
                'password' => Hash::make( $request->password )
            ]);
        }

        $data = [
            'users'=> User::all(),
            'title'=>'Edit User',
            'action'=>'edit',
            'currentUser'=> $currentUser,
            'message'=>'User updated successfully.'
        ];
        if (auth()->check() && auth()->user()->isSuperUser){
            return view('dashboard.users', $data);
        }
        return back();
    }

    public function deleteUser($id){
        $data = [
            'users'=> User::all(),
            'title'=>'Delete User',
            'action'=>'delete',
            'currentUser'=> User::findOrFail($id)
        ];
        if (auth()->check() && auth()->user()->isSuperUser){
            return view('dashboard.users', $data);
        }
        return back();
    }

    public function removeUser($id, Request $request){
        $currentUser = User::findOrFail($id);
        $currentUser->delete();

        $data = [
            'users'=> User::all(),
            'title'=>'Add User',
            'action'=>'add',
            'message'=>'User deleted successfully.'
        ];
        if (auth()->check() && auth()->user()->isSuperUser){
            return view('dashboard.users', $data);
        }
        return back();
    }
}
