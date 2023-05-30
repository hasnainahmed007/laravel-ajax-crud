<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::paginate(5);
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
       
        return view('student.add_student');
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
            'student_name' => 'required',
            'student_roll' => 'required|max:5',
            'student_phone' => 'required|max:11|min:11',
            'student_email' => 'required|email',
            'student_image' => 'required|mimes:jpg,svg,png,jpeg',
        ]);
        
        $student = new Student;
        $student->name = $request->input('student_name');
        $student->roll = $request->input('student_roll');
        $student->phone = $request->input('student_phone');
        $student->email = $request->input('student_email');
        $student->image = $request->input('student_image');
        $student->save();
        return redirect()->back()->with('status','Student Added Successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $show= DB::table('students')->where('name','rafi ansari')->exists(); 
         dd($show);
       
    //     $show=DB::table('students')->pluck('name','phone');
    //    return view('student.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Student::find($id);
        return view('student.editStudent',compact('edit'));
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
        $request->validate([
            'student_name' => 'required',
            'student_roll' => 'required|max:5',
            'student_phone' => 'required|max:11|min:11',
            'student_email' => 'required|email',
        ]);
        
        $student = Student::find($id);
        $student->name = $request->input('student_name');
        $student->roll = $request->input('student_roll');
        $student->phone = $request->input('student_phone');
        $student->email = $request->input('student_email');
        $student->save();
        return redirect()->route('student.index')->with('status','Student Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->back();
    }
}
