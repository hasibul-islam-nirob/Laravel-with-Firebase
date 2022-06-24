@extends('Layout.app')

@section('content')

    <div class="container m-5">
        <div class="row">

            @if (session('status'))
                <h3 class="alert alert-warning mb-2" > {{ session('status') }} </h3>
            @endif

            <div class="col-md-8">
                <table class="table able table-bordered table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Father Name</th>
                        <th scope="col">Class</th>
                        <th scope="col">Roll</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <th scope="row">1</th>
                        <td>Nirob</td>
                        <td>Rafiqul</td>
                        <td>Ten</td>
                        <td>1</td>
                        <td>
                            <button class="btn btn-info" >Edit</button>
                            <button class="btn btn-danger" >Delete</button>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">1</th>
                        <td>Nirob</td>
                        <td>Rafiqul</td>
                        <td>Ten</td>
                        <td>1</td>
                        <td>
                            <button class="btn btn-info" >Edit</button>
                            <button class="btn btn-danger" >Delete</button>
                        </td>
                    </tr>


                    </tbody>
                </table>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h2>Add New Student</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/add-student') }}" method="post" id="createStudentForm">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Student ID</label>
                                <input type="text" class="form-control" name="studentID" id="studentID" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Student Name</label>
                                <input type="text" class="form-control" name="studentName" id="studentName" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Father Name</label>
                                <input type="text" class="form-control" name="studentFatherName" id="studentFatherName">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Class</label>
                                <input type="text" class="form-control" name="studentClass" id="studentClass" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Roll</label>
                                <input type="text" class="form-control" name="studentRoll" id="studentRoll" >
                            </div>

                            <div class="form-group">
                                <button id="addBtn" type="submit" name="addBtn" class="btn btn-primary">Add New Student</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

@endsection