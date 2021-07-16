<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listAdmin = admin::paginate(3);
        return view('admin.index', [
            'listAdmin' => $listAdmin
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->get('name');
        $DoB = $request->get('DoB');
        $gender = $request->get('gender');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $email = $request->get('email');
        $username = $request->get('username');
        $password = $request->get('password');
        $role = $request->get('role');
        $status = $request->get('status');

        $admin = new admin();
        $admin->Name_Admin = $name;
        $admin->DoB = $DoB;
        $admin->Gender = $gender;
        $admin->Phone_Number = $phone;
        $admin->Address = $address;
        $admin->Email = $email;
        $admin->User_Name = $username;
        $admin->PassWord = $password;
        $admin->Role = $role;
        $admin->Status = $status;

        $admin->save();

        return redirect(route('admin.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = admin::find($id);
        return view('admin.edit', [
            'admin' => $admin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->get('name');
        $DoB = $request->get('DoB');
        $gender = $request->get('gender');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $email = $request->get('email');
        $username = $request->get('username');
        $password = $request->get('password');
        $role = $request->get('role');
        $status = $request->get('status');

        $admin = admin::find($id);
        $admin->Name_Admin = $name;
        $admin->DoB = $DoB;
        $admin->Gender = $gender;
        $admin->Phone_Number = $phone;
        $admin->Address = $address;
        $admin->Email = $email;
        $admin->User_Name = $username;
        $admin->PassWord = $password;
        $admin->Role = $role;
        $admin->Status = $status;

        $admin->save();

        return redirect(route('admin.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
