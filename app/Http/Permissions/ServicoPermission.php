<?php 

namespace App\Http\Permissions; 

class ServicoPermission 
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

       'listagem'     => [ 'controle' => '1', 'familia' => 'Cadastro de Servico', 'descricao' => 'Listar Servico'],
       'adicao'       => [ 'controle' => '0', 'familia' => 'Cadastro de Servico', 'descricao' => 'Tela de cadastro de Servico'],
       'adiciona'     => [ 'controle' => '1', 'familia' => 'Cadastro de Servico', 'descricao' => 'Adicionar Servico'],
       'edicao'       => [ 'controle' => '0', 'familia' => 'Cadastro de Servico', 'descricao' => 'Tela de edição de Servico'],
       'edita'        => [ 'controle' => '1', 'familia' => 'Cadastro de Servico', 'descricao' => 'Editar Servico'],
       'visualizacao' => [ 'controle' => '1', 'familia' => 'Cadastro de Servico', 'descricao' => 'Visualizar Servico'],
       'exclui'       => [ 'controle' => '1', 'familia' => 'Cadastro de Servico', 'descricao' => 'Excluir Servico'],
    ];

}