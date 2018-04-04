<?php 

namespace App\Http\Controllers; 

use App\Servico; 
use Illuminate\Http\Request; 
use Validator; 

class ServicoController extends Controller
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

        $servico = new Servico();

        $response['success'] = $success;
        $response['log']     = $log;
        $response['servico'] = $servico;
        return $response;
    }


    //post para adicionar um objeto
    public function adiciona(Request $request)
    {
        $success = true;
        $log     = [];

        $rules = [];

        $validator = Validator::make($request->all(), $rules, Servico::$messages);

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
    public function edicao($servico_id)
    {
        $success = true;
        $log     = [];

        $servico = Servico::find($servico_id);

        if(!isset($servico))
        {
            $success = false;
            $log[]   = ['error' => 'Item não encontrado'];
        }

        $response['success'] = $success;
        $response['log']     = $log;
        return $response;
    }


    //post para editar um objeto
    public function edita(Request $request, $servico_id)
    {
        $success = true;
        $log     = [];

        $servico = Servico::find($servico_id);

        if(!isset($servico))
        {
            $success = false;
            $log[]   = ['error' => 'Item não encontrado'];
        }
        else
        {
            $rules = [];

           $validator = Validator::make($request->all(), $rules, Servico::$messages);

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
    public function visualizacao($servico_id)
    {
        $success = true;
        $log     = [];

        $servico = Servico::find($servico_id);

        if(!isset($servico))
        {
            $success = false;
            $log[]   = ['error' => 'Item não encontrado'];
        }

        $response['success'] = $success;
        $response['log']     = $log;
        return $response;
    }


    //post para excluir um objeto
    public function exclui(Request $request, $servico_id)
    {
        $success = true;
        $log     = [];

        $servico = Servico::find($servico_id);

        if(!isset($servico))
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