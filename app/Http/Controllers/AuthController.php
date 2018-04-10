<?php 

namespace App\Http\Controllers; 

use App\PerfilPermissao;
use App\Permissao;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Validator;

class AuthController extends Controller
{

    //construct
    public function __construct()
    {
         //
    }


    //chamada da tela para realizar login
    public function login()
    {
        $success = true;
        $log     = [];

        //

        $response['success'] = $success;
        $response['log']     = $log;
        return $response;
    }


    //post para realizar login
    public function loginPost(Request $request)
    {
        $success = true;
        $log     = [];

        /*
         * Busca os dados do User para realizar a autenticação
         *
         */
        $user = User::where('email','=',$request['email'])->first();

        if(!$user)
        {
            $success = false;
            $log     = ['error' => 'Usuário não encontrado'];
        }
        else
        {
            /*
             * verifica se User está inativo
             *
             */
            if((int)$user->status == 0)
            {
                $success = false;
                $log     = ['error' => 'Usuário inativo. Em caso de dúvidas, contatar o administrador do sistema.'];
            }

        }

        /*
         *  Se não ocorrer nenhum erro, tentará fazer o login
         *
         */
        if($success)
        {
            $credentials    = $request->only(['email', 'password']);
            $remember       = $request->has('remember');

            if(!Auth::attempt($credentials, $remember))
            {
                $success = false;
                $log     = ['error' => 'Senha incorreta.'];
            }
            else
            {
                /*
                 * Busca as permissões do User para gravar em Cache os acessos permitidos
                 *
                 */
                $permissoes = PerfilPermissao::where('perfil_id','=',$user->perfil_id)->get();
                $functions  = [];

                foreach($permissoes as $item)
                {
                    $permissao = Permissao::find($item->permissao_id);

                    if(isset($permissao))
                    {
                        $functions[] = "{$permissao->locator}@{$permissao->function}";
                    }
                }

                Cache::forever($user->id.'-permissions', $functions);

                $log = ['error' => 'Usuário autenticado com sucesso'];
            }

        }


        $response['success'] = $success;
        $response['log']     = $log;
        return $response;
    }


}