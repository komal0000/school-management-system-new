<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $students = DB::table('students')->get();
        return view('admin.student.index', compact('students'));
    }

    public function add(Request $request)
    {
        if ($request->getMethod() == "POST") {
            $student = new Student();
            $student->name = $request->name;
            $student->address = $request->address;
            $student->email = $request->email;
            $student->phone = $request->phone;
            $student->school_class_id = $request->class_id;
            $student->section_id = $request->section_id;
            $student->age = $request->age;
            $student->save();
            return redirect()->back();
        } else {
            $classes = DB::table('school_classes')->get();
            return view('admin.student.add', compact('classes'));
        }
    }
    public function edit(Request $request, $student_id)
    {
        $student = Student::where('id', $student_id)->first();
        if ($request->getMethod() == "POST") {
            $student->name = $request->name;
            $student->address = $request->address;
            $student->email = $request->email;
            $student->phone = $request->phone;
            $student->class_id = $request->class_id;
            $student->section_id = $request->section_id;
            $student->age = $request->age;
            $student->save();
            return redirect()->back();
        } else {
            $classes = DB::table('school_classes')->get();
            return view('admin.student.edit', compact('classes','student'));
        }
    }
    public function del($student_id)
    {
        Student::where('id', $student_id)->delete();
        return redirect()->back();
    }
}
