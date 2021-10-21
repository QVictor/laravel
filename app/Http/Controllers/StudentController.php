<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveStudentRequest;
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

        $values = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        $query = DB::table('students')->insert($values);
        if ($query) {
            return response()->json(['status' => 1, 'msg' => 'New Student has been successfully registered']);
        }
    }
}
