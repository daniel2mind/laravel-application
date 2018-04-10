<?php 

namespace App\Http\Locators; 

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Redirect; 
use App\Http\Controllers\Controller; 
use App\Http\Controllers\UserController; 

class UserLocator extends Controller
{

    //path's name of resources/views
    protected $basePathViews = 'pages.';


    //construct
    public function __construct()
    {
         $this->middleware('permissions', [ 'except' => []]);
    }


    //retorna array do objeto
    public function lista()
    {
        $controller = new UserController();

        $response   = $controller->lista();

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return view($this->basePathViews.'', $response);
    }


    //chamada da tela para adicionar um objeto
    public function adiciona()
    {
        $controller = new UserController();

        $response   = $controller->adiciona();

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return view($this->basePathViews.'', $response);
    }


    //post para adicionar um objeto
    public function adicionaPost(Request $request)
    {
        $controller = new UserController();

        $response   = $controller->adicionaPost($request);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return \redirect('/users')->with('log',$response['log']);
    }


    //chamada da tela para editar um objeto
    public function edita($user_id)
    {
        $controller = new UserController();

        $response   = $controller->edita($user_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return view($this->basePathViews.'', $response);
    }


    //post para editar um objeto
    public function editaPost(Request $request, $user_id)
    {
        $controller = new UserController();

        $response   = $controller->editaPost($request, $user_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return \redirect('/users')->with('log',$response['log']);
    }


    //chamada da tela para visualizar um objeto
    public function visualiza($user_id)
    {
        $controller = new UserController();

        $response   = $controller->visualiza($user_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return view($this->basePathViews.'', $response);
    }


    //post para excluir um objeto
    public function excluiPost(Request $request, $user_id)
    {
        $controller = new UserController();

        $response   = $controller->excluiPost($request, $user_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return \redirect('/users')->with('log',$response['log']);
    }


}