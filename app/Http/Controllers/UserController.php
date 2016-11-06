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



}
