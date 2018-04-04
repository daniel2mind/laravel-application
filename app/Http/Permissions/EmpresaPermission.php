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

       'listagem'     => [ 'controle' => '1', 'familia' => 'Cadastro de Empresa', 'descricao' => 'Listar Empresa'],
       'adicao'       => [ 'controle' => '0', 'familia' => 'Cadastro de Empresa', 'descricao' => 'Tela de cadastro de Empresa'],
       'adiciona'     => [ 'controle' => '1', 'familia' => 'Cadastro de Empresa', 'descricao' => 'Adicionar Empresa'],
       'edicao'       => [ 'controle' => '0', 'familia' => 'Cadastro de Empresa', 'descricao' => 'Tela de edição de Empresa'],
       'edita'        => [ 'controle' => '1', 'familia' => 'Cadastro de Empresa', 'descricao' => 'Editar Empresa'],
       'visualizacao' => [ 'controle' => '1', 'familia' => 'Cadastro de Empresa', 'descricao' => 'Visualizar Empresa'],
       'exclui'       => [ 'controle' => '1', 'familia' => 'Cadastro de Empresa', 'descricao' => 'Excluir Empresa'],
    ];

}