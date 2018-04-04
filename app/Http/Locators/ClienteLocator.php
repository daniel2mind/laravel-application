<?php 

namespace App\Http\Locators; 

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Redirect; 
use App\Http\Controllers\Controller; 
use App\Http\Controllers\ClienteController; 

class ClienteLocator extends Controller
{

    //path's name of resources/views
    protected $basePathViews = 'pages.';


    //construct
    public function __construct()
    {
         $this->middleware('permissions', [ 'except' => []]);
    }


    //retorna array do objeto
    public function listagem()
    {
        $controller = new ClienteController();

        $response   = $controller->listagem();

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return view($this->basePathViews.'', $response);
    }


    //chamada da tela para adicionar um objeto
    public function adicao()
    {
        $controller = new ClienteController();

        $response   = $controller->adicao();

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return view($this->basePathViews.'', $response);
    }


    //post para adicionar um objeto
    public function adiciona(Request $request)
    {
        $controller = new ClienteController();

        $response   = $controller->adiciona($request);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return \redirect('/')->with('log',$response['log']);
    }


    //chamada da tela para editar um objeto
    public function edicao($cliente_id)
    {
        $controller = new ClienteController();

        $response   = $controller->edicao($cliente_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return view($this->basePathViews.'', $response);
    }


    //post para editar um objeto
    public function edita(Request $request, $cliente_id)
    {
        $controller = new ClienteController();

        $response   = $controller->edita($request, $cliente_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return \redirect('/')->with('log',$response['log']);
    }


    //chamada da tela para visualizar um objeto
    public function visualizacao($cliente_id)
    {
        $controller = new ClienteController();

        $response   = $controller->visualizacao($cliente_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return view($this->basePathViews.'', $response);
    }


    //post para excluir um objeto
    public function exclui(Request $request, $cliente_id)
    {
        $controller = new ClienteController();

        $response   = $controller->exclui($request, $cliente_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return \redirect('/')->with('log',$response['log']);
    }


}