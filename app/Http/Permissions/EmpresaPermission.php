<?php 

namespace App\Http\Permissions; 

class EmpresaPermission 
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

       'lista'         => [ 'controle' => '1', 'familia' => 'Cadastro de Empresa', 'descricao' => 'Listar Empresa'],
       'adiciona'      => [ 'controle' => '0', 'familia' => 'Cadastro de Empresa', 'descricao' => 'Tela de cadastro de Empresa'],
       'adicionaPost'  => [ 'controle' => '1', 'familia' => 'Cadastro de Empresa', 'descricao' => 'Adicionar Empresa'],
       'edita'         => [ 'controle' => '0', 'familia' => 'Cadastro de Empresa', 'descricao' => 'Tela de edição de Empresa'],
       'editaPost'     => [ 'controle' => '1', 'familia' => 'Cadastro de Empresa', 'descricao' => 'Editar Empresa'],
       'visualiza'     => [ 'controle' => '1', 'familia' => 'Cadastro de Empresa', 'descricao' => 'Visualizar Empresa'],
       'excluiPost'    => [ 'controle' => '1', 'familia' => 'Cadastro de Empresa', 'descricao' => 'Excluir Empresa'],
    ];

}