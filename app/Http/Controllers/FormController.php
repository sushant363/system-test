<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomFormRequest;
use App\Models\UserInfo;

class FormController extends Controller
{

    public function index(){
        $users = UserInfo::all();
        return view('user_info',['users' => $users]);
    }

    public function save(CustomFormRequest $request){
        $validated = $request->validated();
        $hobbies = implode(',', $validated['hobbies']);

        $user_info = new UserInfo;

        $user_info->first_name = $validated['first_name'];
        $user_info->last_name = $validated['last_name'];
        $user_info->email = $validated['email'];
        $user_info->mobile = $validated['mobile'];
        $user_info->gender = $validated['gender'];
        $user_info->designation = $validated['designation'];
        $user_info->dob = $validated['dob'];
        $user_info->hobbies = $hobbies;

        $user_info->save();

        return redirect('/')->with('success','User Info Saved Successfully');
    }
}
