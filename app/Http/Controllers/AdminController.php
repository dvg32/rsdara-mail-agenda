<?php

namespace App\Http\Controllers;

use App\Models\personnel;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }

    public function employee_management()
    {
        return view('admin.employee_management',[
            'employee' => personnel::filter()->latest()->get()
        ]);
    }

    public function addEmployee(Request $request)
    {
        $addEmployee = $request->validate([
            'fullname'  => 'required',
            'nip'       => 'required|unique:personnels'
        ]);
        $addEmployee ['status'] = 1;
        personnel::create($addEmployee);
        if ($addEmployee) {
            Alert::success('Pegawai Berhasil Ditambahkan');
        }
        return back();
    }

    public function searchEmployeeUsername($id)
    {
        $employee = personnel::with('user')->find($id);
        return response()->json($employee);
    }

    public function addUsername(Request $request)
    {
        $id = $request->id;
        $validateUsername = $request->validate([
            'employee_id'   => 'required',
            'name'          => 'required|unique:users',
            'password'      => 'required',
            'role'          => 'required'
        ]);
        $validateUsername['password'] = bcrypt($validateUsername['password']);
        User::updateOrInsert(['id'=> $id, 'status'=>1], $validateUsername);
        if ($validateUsername) {
            Alert::success('Username Telah Terinput/Terupdate');
        }
        return back();
    }

    public function user_management()
    {
        return view('admin.user_management');
    }
}
