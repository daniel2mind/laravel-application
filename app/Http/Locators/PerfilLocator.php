<?php 

namespace App\Http\Locators; 

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Redirect; 
use App\Http\Controllers\Controller; 
use App\Http\Controllers\PerfilController; 

class PerfilLocator extends Controller
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
        $controller = new PerfilController();

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
        $controller = new PerfilController();

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
        $controller = new PerfilController();

        $response   = $controller->adicionaPost($request);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return \redirect('/empresas')->with('log',$response['log']);
    }


    //chamada da tela para editar um objeto
    public function edita($perfil_id)
    {
        $controller = new PerfilController();

        $response   = $controller->edita($perfil_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return view($this->basePathViews.'', $response);
    }


    //post para editar um objeto
    public function editaPost(Request $request, $perfil_id)
    {
        $controller = new PerfilController();

        $response   = $controller->editaPost($request, $perfil_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return \redirect('/empresas')->with('log',$response['log']);
    }


    //chamada da tela para visualizar um objeto
    public function visualiza($perfil_id)
    {
        $controller = new PerfilController();

        $response   = $controller->visualiza($perfil_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return view($this->basePathViews.'', $response);
    }


    //post para excluir um objeto
    public function excluiPost(Request $request, $perfil_id)
    {
        $controller = new PerfilController();

        $response   = $controller->excluiPost($request, $perfil_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return \redirect('/empresas')->with('log',$response['log']);
    }


}