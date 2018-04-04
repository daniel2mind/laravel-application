<?php 

namespace App\Http\Locators; 

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Redirect; 
use App\Http\Controllers\Controller; 
use App\Http\Controllers\TecnicoController; 

class TecnicoLocator extends Controller
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
        $controller = new TecnicoController();

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
        $controller = new TecnicoController();

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
        $controller = new TecnicoController();

        $response   = $controller->adiciona($request);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return \redirect('/')->with('log',$response['log']);
    }


    //chamada da tela para editar um objeto
    public function edicao($tecnico_id)
    {
        $controller = new TecnicoController();

        $response   = $controller->edicao($tecnico_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return view($this->basePathViews.'', $response);
    }


    //post para editar um objeto
    public function edita(Request $request, $tecnico_id)
    {
        $controller = new TecnicoController();

        $response   = $controller->edita($request, $tecnico_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return \redirect('/')->with('log',$response['log']);
    }


    //chamada da tela para visualizar um objeto
    public function visualizacao($tecnico_id)
    {
        $controller = new TecnicoController();

        $response   = $controller->visualizacao($tecnico_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return view($this->basePathViews.'', $response);
    }


    //post para excluir um objeto
    public function exclui(Request $request, $tecnico_id)
    {
        $controller = new TecnicoController();

        $response   = $controller->exclui($request, $tecnico_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return \redirect('/')->with('log',$response['log']);
    }


}