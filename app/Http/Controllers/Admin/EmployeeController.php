<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Employee;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::get();
        return view('admin.admin.employee', [
            'employees' => $employees
        ]);
    }

    public function add()
    {
        return view('admin.admin.addemployee');
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('admin.admin.editemployee', [
            'employee' => $employee
        ]);
    }

    public function store(Request $request)
    {

        $image_name = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('/public/employees', $image_name);
        $path = '/storage/employees/' . $image_name;

        Employee::create([
            'name' => $request->name,
            'address'=> $request->address,
            'E-mail'=> $request->email,
            'facebook'=> $request->Facebook,
            'line'=> $request->line,
            'image' => $path
        ]);

        return redirect()->route('admin.employee');
    }

    public function update(Request $request, $id)
    {


        $employee = Employee::find($id);

        $employee->update([
            'name' => $request->name,
            'address'=> $request->address,
            'E-mail'=> $request['E-mail'],
            'facebook'=> $request->Facebook,
            'line'=> $request->line,
        ]);

        if ($request->file('image')) {
            $image_name = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/public/employees', $image_name);
            $path = '/storage/employees/' . $image_name;

            $employee->update([
                'image' => $path
            ]);
        }

        return redirect()->route('admin.employee');
    }

    public function delete($id)
    {
        Employee::find($id)->delete();
        return redirect()->back();
    }
}
