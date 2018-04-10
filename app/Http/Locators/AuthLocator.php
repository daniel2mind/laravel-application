<?php 

namespace App\Http\Locators; 

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Redirect; 
use App\Http\Controllers\Controller; 
use App\Http\Controllers\AuthController; 

class AuthLocator extends Controller
{

    //path's name of resources/views
    protected $basePathViews = 'pages.';


    //construct
    public function __construct()
    {
         $this->middleware('permissions', [ 'except' => ['login','loginPost']]);
    }


    //chamada da tela para realizar login
    public function login()
    {
        $controller = new AuthController();

        $response   = $controller->login();

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return view($this->basePathViews.'', $response);
    }


    //post para realizar login
    public function loginPost(Request $request)
    {
        $controller = new AuthController();

        $response   = $controller->loginPost($request);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return \redirect('/home')->with('log',$response['log']);
    }



}