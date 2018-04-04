<?php 

namespace App\Http\Locators; 

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Redirect; 
use App\Http\Controllers\Controller; 
use App\Http\Controllers\PagamentoController; 

class PagamentoLocator extends Controller
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
        $controller = new PagamentoController();

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
        $controller = new PagamentoController();

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
        $controller = new PagamentoController();

        $response   = $controller->adiciona($request);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return \redirect('/')->with('log',$response['log']);
    }


    //chamada da tela para editar um objeto
    public function edicao($pagamento_id)
    {
        $controller = new PagamentoController();

        $response   = $controller->edicao($pagamento_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return view($this->basePathViews.'', $response);
    }


    //post para editar um objeto
    public function edita(Request $request, $pagamento_id)
    {
        $controller = new PagamentoController();

        $response   = $controller->edita($request, $pagamento_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return \redirect('/')->with('log',$response['log']);
    }


    //chamada da tela para visualizar um objeto
    public function visualizacao($pagamento_id)
    {
        $controller = new PagamentoController();

        $response   = $controller->visualizacao($pagamento_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return view($this->basePathViews.'', $response);
    }


    //post para excluir um objeto
    public function exclui(Request $request, $pagamento_id)
    {
        $controller = new PagamentoController();

        $response   = $controller->exclui($request, $pagamento_id);

        if(!$response['success'])
        {
            return Redirect::back()->withInput()->with('log',$response['log']);
        }

        return \redirect('/')->with('log',$response['log']);
    }


}