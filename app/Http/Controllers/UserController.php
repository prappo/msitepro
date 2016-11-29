<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        return view('profile');
    }

    public function profileUpdate(Request $request)
    {
        try {
            User::where('email', Auth::user()->email)->update([
                'name' => $request->name,
                'occupation' => $request->occupation,
                'about' => $request->about,
                'mobile' => $request->mobile,
                'nationality'=>$request->nationality,
                'knownAs'=>$request->knownAs,
                'knownAt'=>$request->knownAt,
                'address'=>$request->address,
                'landmark'=>$request->landmark,
                'district'=>$request->district,
                'area'=>$request->area,
                'postalCode'=>$request->postalCode,
                'website'=>$request->website,
                'facebookId'=>$request->facebookId,
            ]);
            return "success";
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function passwordUpdate(Request $request)
    {
        $oldPass = $request->oldPass;
        $newPass = $request->newPass;
        $rePass = $request->rePass;
        if($rePass == $newPass){
            return "Password didn't match";
        }

        if ($oldPass == "") {
            return "Please input old password";
        } else {
            if (Hash::check($oldPass, Auth::user()->password)) {
                User::where('email', Auth::user()->email)->update([

                    'password' => bcrypt($newPass)
                ]);
                return "success";
            } else {
                return "Old password didn't match";
            }
        }

    }

    public function updateImage(Request $request){
        try{
            User::where('email',Auth::user()->email)->update([
                "image"=>$request->image
            ]);
            return "success";
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }

    public function imageUpdate(Request $request)
    {
        $file = $request->file('file');
        $fileName = date('YmdHis');
        $fileType = $file->getClientMimeType();
        if ($fileType == 'image/jpeg' || $fileType == 'image/png') {
            try {
                Input::file('file')->move(public_path() . '/uploads/', $fileName . "." . $file->getClientOriginalExtension());
                return response()->json(["status" => "success", "fileName" => $fileName . "." . $file->getClientOriginalExtension()]);
            } catch (\Exception $e) {
                echo "error";
            }
        } else {
            echo "invalid File";
        }
    }

    public function addUserIndex(){
        return view('addUser');
    }

    public function addUser(Request $request){
//        bcrypt
        if($request->name == ""){
            return "Name required";
        }

        if($request->email == ""){
            return "Email required";
        }

        if($request->pass == ""){
            return "Password required";
        }
        if(User::where('email',$request->email)->exists()){
            return "Email already exists";
        }
        try{
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->pass);
            $user->status = "active";
            $user->save();
            return "success";
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }

    public function editUser($userId){
        $datas = User::where('id',$userId)->get();
        return view('edituser',compact('datas'));
    }

    public function userList(){
        $datas = User::all();
        return view('userlist',compact('datas'));
    }

    public function changeStatus(Request $request){
        $id = $request->id;
        $status = $request->status;
        if(User::where('id',$id)->value('email') == Auth::user()->email){
            return "You can't change your own account's status";
        }
        try{
            User::where('id',$id)->update([
                'status'=>$status
            ]);
            return "success";
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }


}
