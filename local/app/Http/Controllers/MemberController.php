<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function addstaff()
    {
        $staff_all = DB::table('users')
            ->join('roles', 'users.user_role', '=', 'roles.roles_id')
            ->get();
        $roles_all = DB::table('roles')
            ->get();
        return view('addstaff',
            array(
                'staff_all' => $staff_all,
                'roles_all' => $roles_all,

            ));
    }

    public function access()
    {
        $staff_all = DB::table('users')
            ->join('roles', 'users.user_role', '=', 'roles.roles_id')
            ->get();
        $roles_all = DB::table('access_role')
            ->join('users', 'access_role.roles_id_no', '=', 'users.id')
            ->get();
        $roles_allin = DB::table('roles')
            ->join('access_role', 'roles.roles_id', '=', 'access_role.roles_id_no')
            ->get();
        return view('access',
            array(
                'staff_all' => $staff_all,
                'roles_all' => $roles_all,
                'roles_allin' => $roles_allin,
            ));
    }

    //ajax request
    public function getMember(Request $request)
    {
        $member = DB::table('users')
            ->join('roles', 'users.user_role', '=', 'roles.roles_id')
            ->where('user_username', $request->id)
            ->first();

        $data['member'] = $member;

        echo json_encode($data);
    }

    //register
    public function add(Request $request)
    {
        $data = array(
            'name' => $request->input('name'),
            'user_role' => $request->input('role'),
            'email' => $request->input('email'),
            'user_username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        );
        DB::table('users')->insert($data);
        return redirect('addstaff')->with('insert', '1');
    }

    public function accessadd(Request $request)
    {
        $count = DB::table('access_role')->where('roles_id_no', '=', $request->input('userid') )->count();
        $data = array(
            'roles_id_no' => $request->input('userid'),
            'access_menu1' => $request->input('access_menu1'),
            'access_menu2' => $request->input('access_menu2'),
            'access_menu3' => $request->input('access_menu3'),
            'access_menu4' => $request->input('access_menu4'),
            'access_menu5' => $request->input('access_menu5'),
        );
        if($count == 0){
            DB::table('access_role')->insert($data);
        }
        else{
            DB::table('access_role')->where('roles_id_no', '=', $request->input('userid'))->update($data);
        }
        return redirect('access')->with('insert', '1');
    }

}
