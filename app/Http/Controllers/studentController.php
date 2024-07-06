<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use App\Models\student;

class studentController extends Controller
{
    public function index(){
        $students = student::all();
        return view('home', compact('students'));
    }
    public function create(){
        return view('create');
    }
    public function show(string $id){
        $students = student::find($id);
        return view('singledata' , compact('students'));
    }
    public function store(Request $request){
        //return $request;
        // $student= new student;
        // $student->name = $request->username;
        // $student->email = $request->email;
        // $student->age = $request->age;
        // $student->city = $request->city;
        // $student -> save();
        // return redirect()->route('user.index');

        student::create(
            [
                'name'=>$request->username,
                'email'=>$request->email,
                'age'=>$request->age,
                'city'=>$request->city,
                
            ]);
            return redirect()->route('user.index')->with('status', 'Data Added Successfully');


    }
    public function edit(string $id){
        $students = student::find($id);
        return view('update', compact('students'));
    }
    public function update(Request $request , string $id){
        $students= student::find($id)
        ->update(
            [
                'name'=>$request->username,
                'email'=>$request->email,
                'age'=>$request->age,
                'city'=>$request->city
            ]
            );
        return redirect()->route('user.index')->with('status', 'Data Updated Successfully');
    }
    public function destroy(string $id){
        $students = student::find($id);
        $students -> delete();
        return redirect()->route('user.index')->with('status', 'Data Deleted Successfully');
    }
    
    
}
