<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveStudentRequest;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    function index() {
        return view('students.index');
    }

    function save(SaveStudentRequest $request) {
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = Hash::make($request->password);
        $student->save();
        return response()->json(['status' => 1, 'msg' => 'New Student has been successfully registered']);
    }

}
