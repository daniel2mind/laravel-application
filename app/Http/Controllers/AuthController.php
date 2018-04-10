<?php 

namespace App\Http\Controllers; 

use App\Auth; 
use Illuminate\Http\Request; 
use Validator; 

class AuthController extends Controller
{

    //construct
    public function __construct()
    {
         //
    }


    //chamada da tela para realizar login
    public function login()
    {
        $success = true;
        $log     = [];

        //

        $response['success'] = $success;
        $response['log']     = $log;
        return $response;
    }


    //post para realizar login
    public function loginPost(Request $request)
    {
        $success = true;
        $log     = [];

        //

        $response['success'] = $success;
        $response['log']     = $log;
        return $response;
    }


}