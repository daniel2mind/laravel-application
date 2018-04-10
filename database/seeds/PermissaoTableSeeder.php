<?php

use Illuminate\Database\Seeder;
use App\Permissao;
use App\PerfilPermissao;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PermissaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*
         * Atualiza o cache de perfis
         *
         */
        Cache::forget('permissions');


        /*
         * Busca todos os arquivos de controle de permissões
         *
         */
        $arquivos = File::allFiles(base_path('app/Http/Permissions'));


        /*
         * Inicializa array que contém somente locators válidos e  funções válidas
         *
         */
        $availableLocators  = [];
        $availableFunctions = [];


        foreach($arquivos as $arquivo)
        {
            $basename  = str_replace(".php","", $arquivo->getBasename());
            $locator   = str_replace("Permission","Locator", $basename);
            $arquivo   = "\App\Http\Permissions\\".$basename;
            $class     = new $arquivo();
            $functions = $class::$functions;

            foreach($functions as $key => $value)
            {

                /*
                 * Verifica se a função já está cadastrada no banco de dados
                 *
                 * para cadastrar ou atualizar o cadastro da permissão
                 *
                 */
                $permissao = Permissao::where('function','=', $key)
                    ->where('locator','=',$locator)
                    ->first();

                if(!isset($permissao))
                {
                    DB::table('permissoes')->insert([
                        'locator'    => $locator,
                        'function'   => $key,
                        'titulo'     => $value['titulo'],
                        'descricao'  => $value['descricao'],
                        'controle'   => $value['controle'],
                        'created_at' => new \DateTime(),
                        'updated_at' => new \DateTime()
                    ]);
                }
                else
                {
                    $permissao->locator    = $locator;
                    $permissao->function   = $key;
                    $permissao->titulo     = $value['titulo'];
                    $permissao->descricao  = $value['descricao'];
                    $permissao->controle   = $value['controle'];
                    $permissao->updated_at = new \DateTime();
                    $permissao->save();
                }

                $availableFunctions[$locator][] = $key;
            }

            $availableLocators[] = $locator;
        }


        /**
         * Verifica quais locators cadastrados serão apagados, por não estarem na listagem obtida
         *
         */
        $locators = Permissao::whereNotIn('locator',$availableLocators)->get();

        foreach ($locators as $item)
        {
            /**
             * Apaga a permissão dos perfis vinculados
             *
             */
            PerfilPermissao::where('permissao_id','=',$item->id)->delete();

            $item->delete();
        }

        /**
         * Verifica quais functions cadastradas serão apagadas, por não estarem na listagem obtida
         *
         */
        $functions = Permissao::get();

        foreach ($functions as $item)
        {
            /**
             * Apaga a permissão dos perfis vinculados
             *
             */
            if(!in_array($item->function, $availableFunctions[$item->locator]))
            {
                PerfilPermissao::where('permissao_id','=',$item->id)->delete();

                $item->delete();
            }
        }
    }
}
