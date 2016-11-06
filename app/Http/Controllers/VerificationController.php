<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
    public function index()
    {
        if (Auth::user()->code != null) {
            return redirect(url('/account/verify'));
        } else {
            return view('verifyindex');

        }
    }

    public function code()
    {
        if (Auth::guest()) {
            return view('verify');
        }
        if (Auth::user()->status == 'active') {
            return redirect(url('/profile'));
        } else {
            return view('verify');
        }

    }

    public function active(Request $request)
    {

        $message = "";
        $status = "";
        if (User::where('code', $request->code)->exists()) {
            try {
                User::where('code', $request->code)->update(['status' => 'active']);

                $message = "Activation success !";
                $status = "success";
                return view('result', compact('message', 'status'));
            } catch (\Exception $e) {
                $message = "Something went wrong !";
                $status = "error";
                return view('result', compact('message', 'status'));
            }
        } else {
            $message = "Activation code didn't match !";
            $status = "error";
            return view('result', compact('message', 'status'));
        }
    }

}
