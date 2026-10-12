<?php

namespace App\Http\Controllers;
use App\Models\users;

use Illuminate\Http\Request;

// use Illuminate\Support\facades\Validator;
use Illuminate\Support\Facades\Validator;

class studentController extends Controller
{
    function list (){
return users::all();

    }





 
function addStudent(Request $request)
{
    $rules = [
        'username' => 'required|min:2|max:10',
        'email' => 'required|email',
        'passward' => 'required',
        'address' => 'required'
    ];

    $validation = Validator::make($request->all(), $rules);

    if ($validation->fails()) {
        return response()->json([
            'errors' => $validation->errors()
        ], 422);
    }

    $student = new users();
    $student->username = $request->username;
    $student->email = $request->email;
    $student->passward = $request->passward;
    $student->address = $request->address;

    if ($student->save()) {
        return response()->json([
            'result' => 'Student added successfully'
        ], 201);
    }

    return response()->json([
        'result' => 'Student failed'
    ], 500);
}


 
}










 function updateStudent(Request $request)
{
    $student = users::find($request->id);
    $student->username=$request->username;
    $student->email=$request->email;
    $student->passward=$request->passward;
    $student->address=$request->address;

   if($student->save()){
   return ["result"=>"student data updated"];
   }else{
return ["result"=>"student data updated failed"];

   }
     
}

function deleteStudent(Request $request)
{
    $id = $request->id;

    $student = users::find($id);

    if (!$student) {
        return response()->json([
            "result" => "Student not found"
        ], 404);
    }

    $student->delete();

    return response()->json([
        "result" => "Student deleted successfully"
    ]);
}









