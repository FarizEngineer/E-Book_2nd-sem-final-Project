<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Pest\Support\View;

class authController extends Controller
{

    function regform(){
        return view('auth.register');
    }
    function register(Request $request){
        $request->validate([
            "username"=>"required",
            "usermail"=>"required|email|unique:users,email",
            "userpass"=>"required|min:3|max:15",
            "role"=>"required"
        ]);
$user=new User();
$user->name=$request->username;
$user->email=$request->usermail;
$user->password=$request->userpass;
$user->role=$request->role;
if($user->save()){
    return redirect()->route('loginform')->with('success',"USER IS CREATED");
}
else{
    return redirect()->route('errorpage');
}
    }
    function fatch(){
        $alluser=User::all();
        return view('admin.userfatch',compact('alluser'));

    }
    function delete($id){
        $user=User::find($id);
    User::destroy($user->id);
     return redirect()->route('userfatch')->with('success',"USER IS DELETED");
    }
   function edit($id){
    $data=User::find($id);
    return view('admin.edit',compact('data'));
   }


   function update($id,Request $request){
    $data=User::find($id);
      $data->name=$request->username;
         $data->email=$request->usermail;
$data->role=$request->role;

if ($request->password) {
    $data->password = bcrypt($request->password);
}
         if($data->save()){
     return redirect()->route('userfatch')->with('success',"USER IS UPDATED");

         }
         else{
  return redirect()->route('errorpage');
}}

function adminupdate($id, Request $request){
     $data=User::find($id);
      $data->name=$request->username;
         $data->email=$request->usermail;
$data->role=$request->role;

if ($request->password) {
    $data->password = bcrypt($request->password);
}
         if($data->save()){
     return redirect()->route('dashboard')->with('success',"Your profile has been updated, successfuly...");

         }
         else{
  return redirect()->route('errorpage');
}
}

    // Login Form
    function loginform()
    {
        return view('auth.login');
    }

    // Login
    function login(Request $request)
    {
        $request->validate([
            'usermail' => 'required|email',
            'userpass' => 'required',
        ]);

        $credentials = [
            'email' => $request->usermail,
            'password' => $request->userpass,
        ];

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->route('bookshows')
                ->with('success', 'LOGIN SUCCESSFUL');
        }
else{
       return redirect()->route('errorpage');
        }

    }

    function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('loginform');
    }

    function profile(){
        return view('user.profile');
    }
    function authprofile($id){
 $books = book::where('author_id', $id)->get();
        return view('user.authorprofile', compact('books'));
    }

}


