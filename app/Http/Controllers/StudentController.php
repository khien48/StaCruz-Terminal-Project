<?php

namespace App\Http\Controllers;
use App\Models\Student;


use Illuminate\Http\Request;

class StudentController extends Controller
{
    function __construct()
    {
        $this->students = new Student;
    }

    function delete($lrn){
        $this->students->deleteStudentList($lrn);
        return back();
    }

    public function index()
    {
        $students = Student::all();
        return response()->json(['students' => $students]);

        print('im here');
    }

}
