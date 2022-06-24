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



    function editStudent($id){
        $key = $id;
        $editStudentData = $this->database->getReference($this->tablename)->getChild($key)->getValue();
        
        if ($editStudentData) {
            return view('Pages.edit', compact('editStudentData','key') );
        }else{
            return redirect('/edit-student')->with("status", "Stdent Data Not Found");
        } 
        
    }

    function updateStudent(Request $request, $id){
        $key = $id;
        $updateData = [
            'std_id'         => $request->input('studentID'),
            'student_name'   => $request->input('studentName'),
            'student_father' => $request->input('studentFatherName'),
            'student_class'  => $request->input('studentClass'),
            'student_roll'   => $request->input('studentRoll'),
        ];

        $res_update = $this->database->getReference($this->tablename.'/'.$key)->update($updateData);

        if ($res_update) {
            return redirect('/')->with("status", "Data Update Successfully");
        }else{
            return redirect('/')->with("status", "Data Update Fail");
        }
    }


    function deleteStudent($id){
        $key = $id;

        $ref_delete = $this->database->getReference($this->tablename.'/'.$key)->remove();
        if ($ref_delete) {
            return redirect('/')->with("status", "Data Delete Successfully");
        }else{
            return redirect('/')->with("status", "Data Delete Fail");
        }

    }


}
