<?php 

namespace App\Http\Controllers; 

use App\Pagamento; 
use Illuminate\Http\Request; 
use Validator; 

class PagamentoController extends Controller
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

        $pagamento = new Pagamento();

        $response['success'] = $success;
        $response['log']     = $log;
        $response['pagamento'] = $pagamento;
        return $response;
    }


    //post para adicionar um objeto
    public function adiciona(Request $request)
    {
        $success = true;
        $log     = [];

        $rules = [];

        $validator = Validator::make($request->all(), $rules, Pagamento::$messages);

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
    public function edicao($pagamento_id)
    {
        $success = true;
        $log     = [];

        $pagamento = Pagamento::find($pagamento_id);

        if(!isset($pagamento))
        {
            $success = false;
            $log[]   = ['error' => 'Item não encontrado'];
        }

        $response['success'] = $success;
        $response['log']     = $log;
        return $response;
    }


    //post para editar um objeto
    public function edita(Request $request, $pagamento_id)
    {
        $success = true;
        $log     = [];

        $pagamento = Pagamento::find($pagamento_id);

        if(!isset($pagamento))
        {
            $success = false;
            $log[]   = ['error' => 'Item não encontrado'];
        }
        else
        {
            $rules = [];

           $validator = Validator::make($request->all(), $rules, Pagamento::$messages);

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
    public function visualizacao($pagamento_id)
    {
        $success = true;
        $log     = [];

        $pagamento = Pagamento::find($pagamento_id);

        if(!isset($pagamento))
        {
            $success = false;
            $log[]   = ['error' => 'Item não encontrado'];
        }

        $response['success'] = $success;
        $response['log']     = $log;
        return $response;
    }


    //post para excluir um objeto
    public function exclui(Request $request, $pagamento_id)
    {
        $success = true;
        $log     = [];

        $pagamento = Pagamento::find($pagamento_id);

        if(!isset($pagamento))
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