<?php 

namespace App\Http\Controllers; 

use App\Example; 
use Illuminate\Http\Request; 
use Validator; 

class ExampleController extends Controller
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

        $example = new Example();

        $response['success'] = $success;
        $response['log']     = $log;
        $response['example'] = $example;
        return $response;
    }


    //post para adicionar um objeto
    public function adiciona(Request $request)
    {
        $success = true;
        $log     = [];

        $rules = [];

        $validator = Validator::make($request->all(), $rules, Example::$messages);

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
    public function edicao($example_id)
    {
        $success = true;
        $log     = [];

        $example = Example::find($example_id);

        if(!isset($example))
        {
            $success = false;
            $log[]   = ['error' => 'Item não encontrado'];
        }

        $response['success'] = $success;
        $response['log']     = $log;
        return $response;
    }


    //post para editar um objeto
    public function edita(Request $request, $example_id)
    {
        $success = true;
        $log     = [];

        $example = Example::find($example_id);

        if(!isset($example))
        {
            $success = false;
            $log[]   = ['error' => 'Item não encontrado'];
        }
        else
        {
            $rules = [];

           $validator = Validator::make($request->all(), $rules, Example::$messages);

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
    public function visualizacao($example_id)
    {
        $success = true;
        $log     = [];

        $example = Example::find($example_id);

        if(!isset($example))
        {
            $success = false;
            $log[]   = ['error' => 'Item não encontrado'];
        }

        $response['success'] = $success;
        $response['log']     = $log;
        return $response;
    }


    //post para excluir um objeto
    public function exclui(Request $request, $example_id)
    {
        $success = true;
        $log     = [];

        $example = Example::find($example_id);

        if(!isset($example))
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