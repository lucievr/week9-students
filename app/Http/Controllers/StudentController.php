<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Detention;

class StudentController extends Controller
{
    
    public function show($student_slug)
    {
        $student = Student::where('slug', $student_slug)->first();

        if (!$student) {
            abort(404, 'Student not found');
        }

        $detentions = Detention::all();

        $view = view('student/show');
        $view->student = $student;
        return $view;
    }

    public function index()
    {
    
        $students = Student::orderBy("name", "asc")->get();
        return view("student/index", compact("students"));

    }

    public function store(Request $request)
    {
        $detentions = Detention::create($request->all());
        return redirect(action('StudentController@index'));
    }
}
