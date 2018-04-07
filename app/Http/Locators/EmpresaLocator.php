<?php 

namespace App\Http\Locators; 

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Redirect; 
use App\Http\Controllers\Controller; 
use App\Http\Controllers\EmpresaController; 

class EmpresaLocator extends Controller
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
        $controller = new EmpresaController();

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
        $controller = new EmpresaController();

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
        $controller = new EmpresaController();

        $response   = $controller->adicionaPost($request);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return \redirect('/')->with('log',$response['log']);
    }


    //chamada da tela para editar um objeto
    public function edita($empresa_id)
    {
        $controller = new EmpresaController();

        $response   = $controller->edita($empresa_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return view($this->basePathViews.'', $response);
    }


    //post para editar um objeto
    public function editaPost(Request $request, $empresa_id)
    {
        $controller = new EmpresaController();

        $response   = $controller->editaPost($request, $empresa_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return \redirect('/')->with('log',$response['log']);
    }


    //chamada da tela para visualizar um objeto
    public function visualiza($empresa_id)
    {
        $controller = new EmpresaController();

        $response   = $controller->visualiza($empresa_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return view($this->basePathViews.'', $response);
    }


    //post para excluir um objeto
    public function excluiPost(Request $request, $empresa_id)
    {
        $controller = new EmpresaController();

        $response   = $controller->excluiPost($request, $empresa_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return \redirect('/')->with('log',$response['log']);
    }


}