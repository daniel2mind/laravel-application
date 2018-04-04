<?php 

namespace App\Http\Permissions; 

class ExamplePermission 
{

    /**
     * @var array
     * 
     * Array que contém as descrições, famílias e controle de permissões das funções do Locator,
     * 
     * O array é lido toda vez que as permissões forem atualizadas no banco de dados,
     * 
     * Para atualizar as funções disponíveis na tela de cadastro de perfil
     * 
     */ 
    public static $functions = [

       'listagem'     => [ 'controle' => '1', 'familia' => 'Cadastro de Example', 'descricao' => 'Listar Example'],
       'adicao'       => [ 'controle' => '0', 'familia' => 'Cadastro de Example', 'descricao' => 'Tela de cadastro de Example'],
       'adiciona'     => [ 'controle' => '1', 'familia' => 'Cadastro de Example', 'descricao' => 'Adicionar Example'],
       'edicao'       => [ 'controle' => '0', 'familia' => 'Cadastro de Example', 'descricao' => 'Tela de edição de Example'],
       'edita'        => [ 'controle' => '1', 'familia' => 'Cadastro de Example', 'descricao' => 'Editar Example'],
       'visualizacao' => [ 'controle' => '1', 'familia' => 'Cadastro de Example', 'descricao' => 'Visualizar Example'],
       'exclui'       => [ 'controle' => '1', 'familia' => 'Cadastro de Example', 'descricao' => 'Excluir Example'],
    ];

}