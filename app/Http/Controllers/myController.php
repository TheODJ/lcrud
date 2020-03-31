<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\myModel;

class myController extends Controller
{
    public function index()
    {
        $students= myModel::paginate(3);
        return view('welcome', compact('students'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required',
        'department' => 'required',
        'phone' => 'required'
        ]);

        $student= new myModel;
        $student->first_name = $request->firstname;
        $student->last_name = $request->lastname;
        $student->email = $request->email;
        $student->department = $request->department;
        $student->phone_number = $request->phone;
        $student->save();
        return redirect(route('home'))->with('successMsg', 'Student successfully added');
    }
    public function edit($id)
    {
        $student=myModel::find($id);
        return view('edit',compact('student'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'department' => 'required',
            'phone' => 'required'
            ]);
    
            $student= myModel::find($id);
            $student->first_name = $request->firstname;
            $student->last_name = $request->lastname;
            $student->email = $request->email;
            $student->department = $request->department;
            $student->phone_number = $request->phone;
            $student->save();
            return redirect(route('home'))->with('successMsg', 'Student successfully Updated');
    }
    public function delete($id)
    {
        myModel::find($id)->delete();
        return redirect(route('home'))->with('successMsg', 'Student deleted successfully');
    }
}
