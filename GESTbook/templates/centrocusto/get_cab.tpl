{* The header file with the main logo and stuff *}
{include file='header.tpl'}

  <h1>Ver Cabimentação Pendente Selecionada</h1>

  <ul>
    <li><strong>ID:</strong> {$cabimentacao.cabimentacao_id}</li>
    <li><strong>Estado:</strong> {$cabimentacao.estado}</li>
    <li><strong>Descritivo:</strong> {$cabimentacao.descritivo}</li>
    <li><strong>Valor Estimado:</strong> {$cabimentacao.valor_estimado}</li>
    <li><strong>Data de Pedido:</strong> {$cabimentacao.data_pedido}</li>
    <li><strong>Centro de Custos Associado:</strong> {$cabimentacao.cativa}</li>
    <li><strong>Funcionário Associado:</strong> {$cabimentacao.pede}</li>
    <li><strong>Atividade Envolvida:</strong> {$cabimentacao.envolve}</li>
    <li><strong>Justificação da decisão:</strong> {$cabimentacao.justificacao_decisao}</li>
    <li><strong>Data da Decisão:</strong> {$cabimentacao.data_decisao}</li>
  </ul>

  <p>[<a class="navtext" href="get_cab.php?id={$cabimentacao.cabimentacao_id+1}">Próximo</a>] 
      [<a class="navtext" href="../operacoes/list.php?id={$cabimentacao.cabimentacao_id}">Ver Operações Associadas</a>]
{if $s_type == "admin"}
     [<a class="navtext" href="edit_cab.php?id={$cabimentacao.cabimentacao_id}">Editar</a>] 
     <!-- [<a class="navtext" href="delete_cab.php?id={$cabimentacao.cabimentacao_id}">Apagar</a>] -->
{/if} 
  </p>

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
