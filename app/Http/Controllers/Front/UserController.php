<?php


namespace App\Http\Controllers\Front;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends BaseController
{
    public function loginUserPage()
    {
        $current_user=Auth::user();
        //echo json_encode($current_user->roles);die();
        $is_connected=false;
        if(isset($current_user->roles) && count($current_user->roles) >0){
            foreach($current_user->roles as $role){
                if($role->title == "User"){
                    $is_connected=true;
                    break;
                }
            }
        }
        if($is_connected ==true){
            return redirect("/profile");
        }else{
            return view("front.login");
        }

    }

    public function registerPage()
    {
        $current_user=Auth::user();
        $is_connected=false;
        if(isset($current_user->roles) && count($current_user->roles) >0){
            foreach($current_user->roles as $role){
                if($role->title == "User"){
                    $is_connected=true;
                    break;
                }
            }
        }
        if($is_connected ==true){
            return redirect("/profile");
        }else{
            return view("front.register");
        }

    }

    public function loginUser(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $booking_data = session('booking_data');
            $user=Auth::user();
            if(isset($booking_data)){
                $booking_data_ar=json_decode($booking_data,true);
                $booking_data_ar["user_id"]=$user->id;
                $booking = Booking::create($booking_data_ar);
                session(['booking_data' => null]);
                $type=$booking_data_ar["type"];
                if(isset($booking->id)){
                    return redirect("/profile")->with(["success"=>"Your booking is created but  not yet confirmed."]);
                }else{
                    if($type =="table"){
                        $error_msg="error has occurred while trying to book a table";
                    }else{
                        $error_msg="error has occurred while trying to book a event";
                    }
                    return redirect("/profile")->with(["error"=>$error_msg]);
                }
            }
            return redirect("/profile");
        }else{
            return back()->with(["error"=>"Authentication failed: User not found"]);
        }
    }
    public function registerUser(Request $request)
    {
        $data_user=$request->all();
        $data_user["name"]=$data_user["first_name"]." ".$data_user["last_name"];
        $user = User::create($data_user);
        $user->roles()->sync(["2"]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $booking_data = session('booking_data');
            $booking_data["user_id"]=$user->id;
            if(isset($booking_data)){
                $booking_data_ar=json_decode($booking_data,true);
                $booking = Booking::create($booking_data_ar);
                $type=$booking_data_ar["type"];
                if(isset($booking->id)){
                    return redirect("/profile")->with(["success"=>"Your booking is created but  not yet confirmed."]);
                }else{
                    if($type =="table"){
                        $error_msg="error has occurred while trying to book a table";
                    }else{
                        $error_msg="error has occurred while trying to book a event";
                    }
                    return redirect("/profile")->with(["error"=>$error_msg]);
                }
            }
            return redirect("/profile");
        }
        return back()->with(["error"=>"Register failed: User not found"]);
    }
    public function profileUser()
    {
        $current_user=Auth::user();
        $is_connected=false;
        if(isset($current_user->roles) && count($current_user->roles) >0){
            foreach($current_user->roles as $role){
                if($role->title == "User"){
                    $is_connected=true;
                    break;
                }
            }
        }
        if($is_connected ==true){
            return view("front.profile", compact('current_user'));
        }else{

            return redirect("/loginUser");
        }
    }

    public function logoutUser(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

