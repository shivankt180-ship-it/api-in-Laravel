<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
class UserAuthController extends Controller
{



function login(Request $request)
{
    return "Login function called";









    

}










public function signup(Request $request)
{
    $input = $request->all();

    $input['passward'] = bcrypt($input['passward']);

    $user = Users::create($input);

    $success['token'] = $user->createToken('MyApp')->plainTextToken;

    $success['name'] = $user->name;

    return [
        'success' => true,
        'result' => $success,
        'msg' => 'User registered successfully'
    ];
}






}
