<?php 

namespace App\Http\Permissions; 

class PagamentoPermission 
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

       'listagem'     => [ 'controle' => '1', 'familia' => 'Cadastro de Pagamento', 'descricao' => 'Listar Pagamento'],
       'adicao'       => [ 'controle' => '0', 'familia' => 'Cadastro de Pagamento', 'descricao' => 'Tela de cadastro de Pagamento'],
       'adiciona'     => [ 'controle' => '1', 'familia' => 'Cadastro de Pagamento', 'descricao' => 'Adicionar Pagamento'],
       'edicao'       => [ 'controle' => '0', 'familia' => 'Cadastro de Pagamento', 'descricao' => 'Tela de edição de Pagamento'],
       'edita'        => [ 'controle' => '1', 'familia' => 'Cadastro de Pagamento', 'descricao' => 'Editar Pagamento'],
       'visualizacao' => [ 'controle' => '1', 'familia' => 'Cadastro de Pagamento', 'descricao' => 'Visualizar Pagamento'],
       'exclui'       => [ 'controle' => '1', 'familia' => 'Cadastro de Pagamento', 'descricao' => 'Excluir Pagamento'],
    ];

}