<?php 

namespace App\Http\Permissions; 

class PerfilPermission 
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

       'lista'         => [ 'controle' => '1', 'titulo' => 'Cadastro de Perfil', 'descricao' => 'Listar Perfil'],
       'adiciona'      => [ 'controle' => '0', 'titulo' => 'Cadastro de Perfil', 'descricao' => 'Tela de cadastro de Perfil'],
       'adicionaPost'  => [ 'controle' => '1', 'titulo' => 'Cadastro de Perfil', 'descricao' => 'Adicionar Perfil'],
       'edita'         => [ 'controle' => '0', 'titulo' => 'Cadastro de Perfil', 'descricao' => 'Tela de edição de Perfil'],
       'editaPost'     => [ 'controle' => '1', 'titulo' => 'Cadastro de Perfil', 'descricao' => 'Editar Perfil'],
       'visualiza'     => [ 'controle' => '1', 'titulo' => 'Cadastro de Perfil', 'descricao' => 'Visualizar Perfil'],
       'excluiPost'    => [ 'controle' => '1', 'titulo' => 'Cadastro de Perfil', 'descricao' => 'Excluir Perfil'],
    ];

}