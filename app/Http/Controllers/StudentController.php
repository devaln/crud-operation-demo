<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::latest()->paginate(10);
        return view('students.index',compact('students'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'first_name' => 'required',
        'middle_name' => 'required',
        'last_name' => 'required',
        'contact' => 'required',
        'date_of_birth' => 'required',
        'gender' => 'required'
        ]);

        // $students = new Student;
        // $students->first_name=$request->input('first_name');
        // $students->middle_name=$request->input('middle_name');
        // $students->last_name=$request->input('last_name');
        // $students->contact=$request->input('contact');
        // $students->date_of_birth=$request->input('date_of_birth');
        // $students->gender=$request->input('gender');
        // $students->save();
        Student::create($request->all());
        return redirect()->route('students.index')->with('success','Student created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        // return view('studenteditdata',compact('students','id'));
        // $students =Student::find($id);
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {

        $request->validate([
        'first_name' => 'required',
        'middle_name' => 'required',
        'last_name' => 'required',
        'contact' => 'required',
        'date_of_birth' => 'required',
        'gender' => 'required'
        ]);

        // $students=Student::find($id);
        // $students->first_name=$request->input('first_name');
        // $students->middle_name=$request->input('middle_name');
        // $students->last_name=$request->input('last_name');
        // $students->contact=$request->input('contact');
        // $students->date_of_birth=$request->input('date_of_birth');
        // $students->gender=$request->input('gender');
        // $students->save();
        $student->update($request->all());
        return redirect()->route('students.index')->with('success','Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        // $students=Student::find($id);
        $student->delete();
        return redirect()->route('students.index')->with('success','Student deleted successfully');
    }
}
