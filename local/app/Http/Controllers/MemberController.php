<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Session;
use DateTime;
use Response;
use Yajra\Datatables\Datatables;

class MemberController extends Controller
{
    public function addstaff()
    {
        $staff_all = DB::table('users')
            ->join('roles', 'users.user_role', '=', 'roles.roles_id')
            ->get();
        return view('addstaff',
            array(
                'staff_all' => $staff_all,
                
            ));
    }



    //register
    public function add(Request $request){
        $data = array(
         'name' => $request->input('name'),
         'user_role' => $request->input('role'),
         'email' => $request->input('email'),
         'user_username' => $request->input('name'),
         'password' => bcrypt($request->input('password')),
         'created_at' => date('Y-m-d H:i:s'),
         'updated_at' => date('Y-m-d H:i:s'),
        );
        DB::table('users')->insert($data);
        return redirect('addstaff')->with('insert','1');
          }
}
