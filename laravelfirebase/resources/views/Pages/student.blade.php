@extends('Layout.app')

@section('content')

    <div class="container m-5">
        <div class="row">

            @if (session('status'))
                <h5 class="alert alert-warning mb-2" > {{ session('status') }} </h5>
            @endif

            <div class="col-md-8">
                <table class="table able table-bordered table-striped">
                    <thead>
                    <tr>
                        <th scope="col">SL No</th>
                        <th scope="col">Student Id</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Father Name</th>
                        <th scope="col">Class</th>
                        <th scope="col">Roll</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @forelse ($studentData as $key => $item)
                        <tr> 
                            <td>{{ $i++ }}</td>
                            <td>{{ $item['std_id'] }}</td>
                            <td>{{ $item['student_name'] }}</td>
                            <td>{{ $item['student_father'] }}</td>
                            <td>{{ $item['student_class'] }}</td>
                            <td>{{ $item['student_roll'] }}</td>
                            <td>
                                <a href="{{ url('edit-student/'.$key) }}" class="btn btn-info" >Edit</a>
                                <a href="{{ url('delete-student/'.$key) }}" class="btn btn-danger" >Delete</a>
                            </td>
                        </tr>
                        @empty
                            <td colspan="7">Data Not Available</td>
                        @endforelse

                    </tbody>
                </table>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center" >Add New Student</h2>
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
                                <label for="exampleFormControlInput1"></label><br>
                                <button id="addBtn" type="submit" name="addBtn" class="btn btn-primary">Add New Student</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

@endsection