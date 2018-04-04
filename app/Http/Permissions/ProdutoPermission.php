<?php 

namespace App\Http\Permissions; 

class ProdutoPermission 
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

       'listagem'     => [ 'controle' => '1', 'familia' => 'Cadastro de Produto', 'descricao' => 'Listar Produto'],
       'adicao'       => [ 'controle' => '0', 'familia' => 'Cadastro de Produto', 'descricao' => 'Tela de cadastro de Produto'],
       'adiciona'     => [ 'controle' => '1', 'familia' => 'Cadastro de Produto', 'descricao' => 'Adicionar Produto'],
       'edicao'       => [ 'controle' => '0', 'familia' => 'Cadastro de Produto', 'descricao' => 'Tela de edição de Produto'],
       'edita'        => [ 'controle' => '1', 'familia' => 'Cadastro de Produto', 'descricao' => 'Editar Produto'],
       'visualizacao' => [ 'controle' => '1', 'familia' => 'Cadastro de Produto', 'descricao' => 'Visualizar Produto'],
       'exclui'       => [ 'controle' => '1', 'familia' => 'Cadastro de Produto', 'descricao' => 'Excluir Produto'],
    ];

}