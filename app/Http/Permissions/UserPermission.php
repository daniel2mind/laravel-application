<?php 

namespace App\Http\Permissions; 

class UserPermission 
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

       'lista'         => [ 'controle' => '1', 'titulo' => 'Cadastro de User', 'descricao' => 'Listar User'],
       'adiciona'      => [ 'controle' => '0', 'titulo' => 'Cadastro de User', 'descricao' => 'Tela de cadastro de User'],
       'adicionaPost'  => [ 'controle' => '1', 'titulo' => 'Cadastro de User', 'descricao' => 'Adicionar User'],
       'edita'         => [ 'controle' => '0', 'titulo' => 'Cadastro de User', 'descricao' => 'Tela de edição de User'],
       'editaPost'     => [ 'controle' => '1', 'titulo' => 'Cadastro de User', 'descricao' => 'Editar User'],
       'visualiza'     => [ 'controle' => '1', 'titulo' => 'Cadastro de User', 'descricao' => 'Visualizar User'],
       'excluiPost'    => [ 'controle' => '1', 'titulo' => 'Cadastro de User', 'descricao' => 'Excluir User'],
    ];

}