<?php 

namespace App\Http\Controllers; 

use App\User; 
use Illuminate\Http\Request; 
use Validator; 

class UserController extends Controller
{

    //construct
    public function __construct()
    {
         //
    }


    //retorna array do objeto
    public function lista()
    {
        $success = true;
        $log     = [];

        //

        $response['success'] = $success;
        $response['log']     = $log;
        return $response;
    }


    //chamada da tela para adicionar um objeto
    public function adiciona()
    {
        $success = true;
        $log     = [];

        $user = new User();

        $response['success'] = $success;
        $response['log']     = $log;
        $response['user'] = $user;
        return $response;
    }


    //post para adicionar um objeto
    public function adicionaPost(Request $request)
    {
        $success = true;
        $log     = [];

        $rules = [];

        $validator = Validator::make($request->all(), $rules, User::$messages);

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
    public function edita($user_id)
    {
        $success = true;
        $log     = [];

        $user = User::find($user_id);

        if(!isset($user))
        {
            $success = false;
            $log[]   = ['error' => 'Item não encontrado'];
        }

        $response['success'] = $success;
        $response['log']     = $log;
        return $response;
    }


    //post para editar um objeto
    public function editaPost(Request $request, $user_id)
    {
        $success = true;
        $log     = [];

        $user = User::find($user_id);

        if(!isset($user))
        {
            $success = false;
            $log[]   = ['error' => 'Item não encontrado'];
        }
        else
        {
            $rules = [];

           $validator = Validator::make($request->all(), $rules, User::$messages);

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
    public function visualiza($user_id)
    {
        $success = true;
        $log     = [];

        $user = User::find($user_id);

        if(!isset($user))
        {
            $success = false;
            $log[]   = ['error' => 'Item não encontrado'];
        }

        $response['success'] = $success;
        $response['log']     = $log;
        return $response;
    }


    //post para excluir um objeto
    public function excluiPost(Request $request, $user_id)
    {
        $success = true;
        $log     = [];

        $user = User::find($user_id);

        if(!isset($user))
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