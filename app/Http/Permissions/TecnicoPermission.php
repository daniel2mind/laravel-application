<?php 

namespace App\Http\Permissions; 

class TecnicoPermission 
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

       'listagem'     => [ 'controle' => '1', 'familia' => 'Cadastro de Tecnico', 'descricao' => 'Listar Tecnico'],
       'adicao'       => [ 'controle' => '0', 'familia' => 'Cadastro de Tecnico', 'descricao' => 'Tela de cadastro de Tecnico'],
       'adiciona'     => [ 'controle' => '1', 'familia' => 'Cadastro de Tecnico', 'descricao' => 'Adicionar Tecnico'],
       'edicao'       => [ 'controle' => '0', 'familia' => 'Cadastro de Tecnico', 'descricao' => 'Tela de edição de Tecnico'],
       'edita'        => [ 'controle' => '1', 'familia' => 'Cadastro de Tecnico', 'descricao' => 'Editar Tecnico'],
       'visualizacao' => [ 'controle' => '1', 'familia' => 'Cadastro de Tecnico', 'descricao' => 'Visualizar Tecnico'],
       'exclui'       => [ 'controle' => '1', 'familia' => 'Cadastro de Tecnico', 'descricao' => 'Excluir Tecnico'],
    ];

}