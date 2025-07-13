<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $students=Student::all();

        return  view('backend.students.list',compact('students'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
         //return 'stroe';
        $studentName= $request->studentName;
        $studentAge= $request->studentAge;
        $studentGender=$request->gender;
        $studentAddress=$request->address;
        //validation
        $request->validate([
            'studentName'=>'required|min:3',
            'address'=>'required|min:3',
        ]);
       
        Student::create([
            'name'=>$studentName,
            'age'=>$studentAge,
            'gender'=>$studentGender,
            'address'=>$studentAddress,
        ]);
        //redirect to list page
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $students=Student::find($id);
        $students->delete();
        return redirect()->route('students.index');
    }
}