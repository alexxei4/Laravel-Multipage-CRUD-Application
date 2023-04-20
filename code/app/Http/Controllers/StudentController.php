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
        $students = Student::all();
        return view ('students.index')->with('students', $students);
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

    public function home(){
        return view('students.home');
    }
    public function about(){
        return view('students.about');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Student::create($input);
        return redirect('student')->with('flash_message', 'Student Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('students', $student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'Student Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'Student deleted!');  
    }

    public function search(Request $request)
    {

        if($request->ajax()) {

            $output = '';

            $students = Student::where('studentid', 'LIKE', '%'.$request->search.'%')
                            ->orWhere('firstname', 'LIKE', '%'.$request->search.'%')
                            ->orWhere('lastname', 'LIKE', '%'.$request->search.'%')
                            ->orWhere('email', 'LIKE', '%'.$request->search.'%')
                            ->orWhere('age', 'LIKE', '%'.$request->search.'%')
                            ->get();

            if($students) {

                foreach($students as $student) {

                    $output .=
                    '<div class="card-body">
                        <h5 class="card-title"><b>'.$student->studentid.'</b></h5>
                        <h5 class="card-title"><b class="text-success">'.$student->firstname.'</b></h5>
                        <h5 class="card-title"><b class="text-success">'.$student->lastname.'</b></h5>
                        <h5 class="card-title"><b class="text-success">'.$student->email.'</b></h5>
                        <h5 class="card-title"><b class="text-success">'.$student->age.'</b></h5>
                    </div>
                  ';

                }

                return response()->json($output);

            }

        }

        return view('students.search');

    }
}
