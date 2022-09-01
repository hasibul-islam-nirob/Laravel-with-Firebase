@extends('Layout.app')

@section('content')

    <div class="container m-5">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center" >Update Student Information</h2>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('update-student/'.$key) }}" method="post" id="createStudentForm">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Student ID</label>
                                <input type="text" class="form-control" name="studentID" value="{{ $editStudentData['std_id'] }}" id="studentID" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Student Name</label>
                                <input type="text" class="form-control" name="studentName" value="{{ $editStudentData['student_name'] }}" id="studentName" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Father Name</label>
                                <input type="text" class="form-control" name="studentFatherName" value="{{ $editStudentData['student_father'] }}" id="studentFatherName">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Class</label>
                                <input type="text" class="form-control" name="studentClass" value="{{ $editStudentData['student_class'] }}" id="studentClass" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Roll</label>
                                <input type="text" class="form-control" name="studentRoll" value="{{ $editStudentData['student_roll'] }}" id="studentRoll" >
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1"></label><br>
                                <button id="updateBtn" type="submit" name="addBtn" class="btn btn-primary">Update Student Information</button>
                                <a href="/" id="updateBtn" type="submit" name="addBtn" class="btn btn-danger">Cancel</a>

                            </div>
    
                            
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

@endsection