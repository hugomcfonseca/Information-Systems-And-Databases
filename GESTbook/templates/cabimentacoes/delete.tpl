{* The header file with the main logo and stuff *}
{include file='header.tpl'}

{if $s_type == "admin" || $s_type == "staff"}
  <h1>Remover Centro de Custos</h1>

  <ul>
    <li><strong>ID:</strong> {$cabimentacao1.cabimentacao_id}</li>
    <li><strong>Estado:</strong> {$cabimentacao1.estado}</li>
    <li><strong>Descritivo:</strong> {$cabimentacao1.descritivo}</li>
    <li><strong>Valor Estimado:</strong> {$cabimentacao1.valor_estimado}</li>
    <li><strong>Data de Pedido:</strong> {$cabimentacao1.data_pedido}</li>
    <li><strong>Centro de Custos Associado:</strong> {$cabimentacao1.cativa}</li>
    <li><strong>Funcionário Associado:</strong> {$cabimentacao1.pede}</li>
    <li><strong>Atividade Envolvida:</strong> {$cabimentacao1.envolve}</li>
    <li><strong>Justificação da decisão:</strong> {$cabimentacao1.justificacao_decisao}</li>
    <li><strong>Data da Decisão:</strong> {$cabimentacao1.data_decisao}</li>
  </ul>

  <p>Tem a certeza? 
     [<a class="navtext" href="delete_action.php?id={$cabimentacao1.cabimentacao_id}">Sim</a>] 
     [<a class="navtext" href="get.php?id={$cabimentacao1.cabimentacao_id}">Não</a>]
  </p>
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
