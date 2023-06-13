<?php

namespace App\Http\Controllers\registration;

use App\Models\registration\RoleModel;
use App\Models\registration\UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function register()
    {
        $Registration_txt = "welcome to registration page";
        $response = RoleModel::where("status", "active")->get();
        return view("register")->with(compact("response"));
    }

    public function create_role(Request $request)
    {
        $role_data = [
            "name" => $request->role_name,
            "status" => $request->status,
            "created_by" => 1,
            "created_at" => date("Y-m-d h:i:s"),
        ];

        RoleModel::create($role_data);
        return redirect()->away("/get_role_list/ALL/NA/ALL");
    }
    public function get_role_list($param_type, $id, $status)
    {
        if ($param_type == "ALL") {
            $response_data = RoleModel::get();
            //select * from t_role_master;
        }

        if ($param_type == "BYID") {
            $response_data = RoleModel::where("id", $id)->get();
            //select * from t_role_master where id='?';
        }

        if ($param_type == "status") {
            $response_data = RoleModel::where("status", $status)->get();
            //select * from t_role_master where status='Active';
        }

        return view("registration/list_role")->with(compact("response_data"));
    }

    public function edit_role($id)
    {
        $data = RoleModel::where("id", $id)->first();
        return view("edit_role")->with(compact("data"));
    }
    public function delete_role($id)
    {
        RoleModel::where("id", $id)->delete();
        return redirect()->away("/get_role_list/ALL/NA/ALL");
    }
    public function update_role(request $request)
    {
        $role_data = [
            "name" => $request->role_name,
            "status" => $request->status,
            "created_by" => 1,
            "created_at" => date("Y-m-d h:i:s"),
        ];
        RoleModel::where("id", $request->record_id)->update($role_data);
        return redirect()->away("/get_role_list/ALL/NA/ALL");
    }

    public function register_new_user(Request $request)
    {
        $user_data = [
            "Full_name" => $request->Full_name,
            "Contact_no" => $request->Contact_no,
            "email" => $request->email,
            "password" => $request->password,
            "role_id" => $request->role,
            "created_by" => 1,
            "created_at" => date("Y-m-d h:i:s"),
        ];
        // dd($user_data);
        Usermodel::create($user_data);
        return redirect()->away("/get_role_list/ALL/NA/ALL");
    }
}
