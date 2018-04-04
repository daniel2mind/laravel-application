<?php 

namespace App\Http\Permissions; 

class ClientePermission 
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

       'listagem'     => [ 'controle' => '1', 'familia' => 'Cadastro de Cliente', 'descricao' => 'Listar Cliente'],
       'adicao'       => [ 'controle' => '0', 'familia' => 'Cadastro de Cliente', 'descricao' => 'Tela de cadastro de Cliente'],
       'adiciona'     => [ 'controle' => '1', 'familia' => 'Cadastro de Cliente', 'descricao' => 'Adicionar Cliente'],
       'edicao'       => [ 'controle' => '0', 'familia' => 'Cadastro de Cliente', 'descricao' => 'Tela de edição de Cliente'],
       'edita'        => [ 'controle' => '1', 'familia' => 'Cadastro de Cliente', 'descricao' => 'Editar Cliente'],
       'visualizacao' => [ 'controle' => '1', 'familia' => 'Cadastro de Cliente', 'descricao' => 'Visualizar Cliente'],
       'exclui'       => [ 'controle' => '1', 'familia' => 'Cadastro de Cliente', 'descricao' => 'Excluir Cliente'],
    ];

}