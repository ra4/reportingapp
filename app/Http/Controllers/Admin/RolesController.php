<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use Route;
use App\Report;
use App\Role;
use App\WorkType;
use App\Attendence;
use DB;
use Input;
use Validator;


class RolesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $users_list = User::all();
        $roles = Role::all();
        return view('admin.roles.index', compact('users_list', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
         if ($id) {
            $user =  User::find($id);
            return response()->json(['role_id' => $user->role_id]);
         }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        
            }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        
    }
    
     /**
     * Assign roles to users (admin,user etc).
     *
     * @param  Request  $request
     * @return Response
     */

    public function assign(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'role_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/roles')
                        ->withErrors($validator)
                        ->withInput();
        }

       
        extract($request->all());
        DB::table('users')
                ->where('id', $user_id)
                ->update(['role_id' => $role_id]);
        
         \Session::flash('message', 'User Role has been changed by Super admin.!'); 
         \Session::flash('messsage-type', 'sucess'); 
        return redirect('/roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
