<?php 

namespace App\Http\Controllers; 

use App\Empresa; 
use Illuminate\Http\Request; 
use Validator; 

class EmpresaController extends Controller
{

    //construct
    public function __construct()
    {
         //
    }


    //retorna array do objeto
    public function listagem()
    {
        $success = true;
        $log     = [];

        //

        $response['success'] = $success;
        $response['log']     = $log;
        return $response;
    }


    //chamada da tela para adicionar um objeto
    public function adicao()
    {
        $success = true;
        $log     = [];

        $empresa = new Empresa();

        $response['success'] = $success;
        $response['log']     = $log;
        $response['empresa'] = $empresa;
        return $response;
    }


    //post para adicionar um objeto
    public function adiciona(Request $request)
    {
        $success = true;
        $log     = [];

        $rules = [];

        $validator = Validator::make($request->all(), $rules, Empresa::$messages);

        if ($validator->fails())
        {
            $success = false;

            foreach($validator->messages()->all() as $message)
            {
                $log[] = ['error' => $message];
            }
        }

        if ($success)
        {
            //
        }

        $response['success'] = $success;
        $response['log']     = $log;
        return $response;
    }


    //chamada da tela para editar um objeto
    public function edicao($empresa_id)
    {
        $success = true;
        $log     = [];

        $empresa = Empresa::find($empresa_id);

        if(!isset($empresa))
        {
            $success = false;
            $log[]   = ['error' => 'Item não encontrado'];
        }

        $response['success'] = $success;
        $response['log']     = $log;
        return $response;
    }


    //post para editar um objeto
    public function edita(Request $request, $empresa_id)
    {
        $success = true;
        $log     = [];

        $empresa = Empresa::find($empresa_id);

        if(!isset($empresa))
        {
            $success = false;
            $log[]   = ['error' => 'Item não encontrado'];
        }
        else
        {
            $rules = [];

           $validator = Validator::make($request->all(), $rules, Empresa::$messages);

           if ($validator->fails())
           {
               $success = false;

               foreach($validator->messages()->all() as $message)
               {
                   $log[] = ['error' => $message];
               }
           }

           if ($success)
           {
               //
           }

        }

        $response['success'] = $success;
        $response['log']     = $log;
        return $response;
    }


    //chamada da tela para visualizar um objeto
    public function visualizacao($empresa_id)
    {
        $success = true;
        $log     = [];

        $empresa = Empresa::find($empresa_id);

        if(!isset($empresa))
        {
            $success = false;
            $log[]   = ['error' => 'Item não encontrado'];
        }

        $response['success'] = $success;
        $response['log']     = $log;
        return $response;
    }


    //post para excluir um objeto
    public function exclui(Request $request, $empresa_id)
    {
        $success = true;
        $log     = [];

        $empresa = Empresa::find($empresa_id);

        if(!isset($empresa))
        {
            $success = false;
            $log[]   = ['error' => 'Item não encontrado'];
        }
        else
        {
            //
        }

        $response['success'] = $success;
        $response['log']     = $log;
        return $response;
    }


}