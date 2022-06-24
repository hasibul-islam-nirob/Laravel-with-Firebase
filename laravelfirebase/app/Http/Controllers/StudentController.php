<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class StudentController extends Controller
{
    public function __construct(Database $database){
        $this->database = $database;
        $this->tablename = "students";
    }

    function index(){
        $studentData = $this->database->getReference($this->tablename)->getValue();
        return view('Pages.student', compact('studentData') );
    }

    function addStudent(){
        return view('Pages.student');
    }

    function store(Request $request){
        
        $postData = [
            'std_id'         => $request->input('studentID'),
            'student_name'   => $request->input('studentName'),
            'student_father' => $request->input('studentFatherName'),
            'student_class'  => $request->input('studentClass'),
            'student_roll'   => $request->input('studentRoll'),
        ];
        $postRef = $this->database->getReference($this->tablename)->push($postData);

        if($postRef){
            return redirect('/')->with("status", "Data Insert Successfully");
        }else{
            return redirect('/')->with("status", "Data Insert Fail");
        }
    }
}
