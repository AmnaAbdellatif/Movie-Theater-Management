<?php

namespace App\Http\Controllers\Back;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Auth;
use Illuminate\Support\Facades\Hash;


class UsersController extends BaseController
{
   // protected $redirectTo = '/showUsers';
    public function create()
    {
        return view('Back.createUser');
    }

    public function return()
    {
        return view('Front.welcome');
    }


    /**
     * Store a newly created resource in storage.
     *
     */

     /*public function addUser(Request $request, User $users)
     {
         $username = $request->input('name'); // This is better than using $_POST
         $usermail = $request->input('email'); // This is better than using $_POST

         $userpassword = $request->input('password'); // This is better than using $_POST


         $users->name = $username;
         $users->email = $usermail;
         $users->password =>Hash::make($userpassword['password']);
        // 'password' => Hash::make($data['password']),

         $users->save();
         $user = User::create(request(['name', 'email', 'password']));

        // auth()->login($user);

         return redirect()->to('/showUsers');

     }*/
    protected function addUser(Request $data)
    {
        /*$user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $user = User::create(request(['name', 'email', 'password']));
        $users = $this->allUsers();
        return response()->json($users);*/
        $user = User::create([

            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            request(['name', 'email', 'password'])

        ]);
        $Users = User::all();
       // $user = User::create(request(['name', 'email', 'password']));
        return view ('Back.showUsers',compact('Users'));

        //$users=this.allUsers();
        /*$users=this.user;
        return response()->json($users);
        $user = User::create(request(['name', 'email', 'password']));*/


       // return redirect($this->redirectPath())->with('message', 'Your message');
        //return redirect(route('showUsers'));
        //return back();
        //auth()->login($user);
        //return view('/home');
        //return redirect()->route('showUsers');
       // return property_exists($this, 'redirectTo') ? $this->redirectTo : '/showUsers';
        //return redirect('/showUsers');
        //return view('Back.showUsers', array('Users' => $user));
        //return redirect()->to('/home');
    }


    public function allUsers()
    {

        $users = User::all();

        return view('Back.showUsers', array('Users' => $users));
        /* la fonction compact équivaut à array('posts' => $posts)*/
    }


    public function deleteUser($id)
    {
        $booking = User::findOrFail($id);
        var_dump($booking->name);
        $booking->delete();
        //$this->allUsers();
        return redirect('/showUsers');
       /* $users = User::all();
        return view('Back.showUsers', array('Users' => $users));*/

    }

    public function logoutUser(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('Back.EditUser', compact('User', 'id'));
    }

   /* public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'    =>  'required',
            'email'     =>  'required',
            'password'     =>  'required'
        ]);
        $User = User::find($id);
        $User->name = $request->get('name');
        $User->email = $request->get('email');
        $User->save();
        return redirect()->route('home')->with('success', 'Data Updated');
    }*/
    public function editUser(  $id)
    {
        /*$arr['films'] = $films;
        return view('Back.editFilm')->with($arr);*/
        $user= User::find($id);
        return view('Back.EditUser', compact('user', 'id'));

    }
    public function updateUser(Request $request,  $id)
    {
        $User = User::find($id);
        $name = $request->input('name'); // This is better than using $_POST
        $email = $request->input('email'); // This is better than using $_POST

        $User->name = $name;
        $User->email = $email;

        $User->save();
        //return redirect()->route('Back.showFilms');
        return redirect('/showUsers');
    }
   /* public function destroy($id)
    {
        $student = User::find($id);
        $student->delete();
        return view('Back.showUsers')->with('success', 'Data Deleted');


    }*/
   /* public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function destroy(User $user)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->delete();

        return back();
    }*/



}
