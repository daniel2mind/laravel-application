<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class CheckPermission
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        /*
         * Busca permissão que tem o nome da função, para validar a permissão
         *
         */
        $function  = $request->route()->getActionMethod();

        /*
         * Verifica a partir de qual Locator foi instanciado, para consultar no arquivo de permissões correto
         *
         */
        $locator = get_class($request->route()->getController());
        $locator = substr($locator, strrpos($locator, "\\") + 1);
        $object  = str_replace('Locator', '', $locator);


        /*
         * Se não achar a permissão aplicada ao perfil, retornará status 403
         *
         */
        $check = $this->check($function, $object);

        if(!$check)
        {
            abort(403);
        }

        return $next($request);
    }


    public static function check($function, $object)
    {
        $name      = "\App\Http\Permissions\\".$object.'Permission';
        $class     = new $name();
        $functions = $class::$functions;

        /**
         * Se a função não estiver listada no array, a permissão é negada
         *
         */
        if(!array_key_exists($function, $functions))
        {
            return false;
        }

        /**
         * Se a função estiver listada mas o controle for negativo (0) a permissão é concedida
         *
         */
        if($functions[$function]['controle'] == '0')
        {
            return true;
        }

        /**
         * Se a função estiver listada com controle positivo, mas o usuário nao possuir a permissão, o acesso é bloqueado
         *
         */
        if(!in_array("{$object}Locator@{$function}", Cache::get(Auth::user()->id.'-permissions')))
        {
            return false;
        }


        return true;
    }

}
