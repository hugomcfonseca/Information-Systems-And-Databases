{* The header file with the main logo and stuff *}
{include file='header.tpl'}

{if $s_type == "admin" || $s_type == "staff" || $login == $funcionario.user_id}
  <h1>Ver Cabimentação Selecionada</h1>

  <ul>
    <li><strong>ID:</strong> {$cabimentacao.cabimentacao_id}</li>
    <li><strong>Estado:</strong> {$cabimentacao.estado}</li>
    <li><strong>Descritivo:</strong> {$cabimentacao.descritivo}</li>
    <li><strong>Valor Estimado:</strong> {$cabimentacao.valor_estimado}</li>
    <li><strong>Data de Pedido:</strong> {$cabimentacao.data_pedido}</li>
    <li><strong>Centro de Custos Associado:</strong> <a href="../mycentrocusto/get.php?id={$centrocusto.centrocustos_id}"> {$centrocusto.nome_curto}</a> (ID: {$cabimentacao.cativa})</li>
    <li><strong>Funcionário Associado:</strong> <a href="../funcionarios/get.php?id={$funcionario.user_id}">{$funcionario.nome}</a> (ID: {$cabimentacao.pede})</li>
    <li><strong>Atividade Envolvida:</strong> {$cabimentacao.envolve}</li>
    <li><strong>Justificação da decisão:</strong> {$cabimentacao.justificacao_decisao}</li>
    <li><strong>Data da Decisão:</strong> {$cabimentacao.data_decisao}</li>
  </ul>

  <p>[<a class="navtext" href="get.php?id={$cabimentacao.cabimentacao_id+1}">Próximo</a>] 
     [<a class="navtext" href="../operacoes/list.php?id={$cabimentacao.cabimentacao_id}">Ver Operações Associadas</a>]
{if $s_type == "admin" || $s_type == "staff"}
     [<a class="navtext" href="edit.php?id={$cabimentacao.cabimentacao_id}">Editar</a>] 
{/if}
{if $s_type == "admin"}
     [<a class="navtext" href="delete.php?id={$cabimentacao.cabimentacao_id}">Apagar</a>]
{/if} 
  </p>
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
