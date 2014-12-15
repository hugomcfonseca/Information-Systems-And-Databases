{* The header file with the main logo and stuff  *}
{include file='header.tpl'}

{if $s_user}
  <h1>Listar Cabimentações</h1>

  <table>
    <tr>
      <th class="left">#ID</th>
      <th class="left">Data do Pedido</th>
      <th class="center">Descritivo</th>
    </tr>
{foreach from=$cabimentacao1 item=cabimentacao}
    <tr>
      <td class="left"><a href="get.php?id={$cabimentacao.cabimentacao_id}">{$cabimentacao.cabimentacao_id}</a></td>
      <td class="left">{$cabimentacao.data_pedido}</td>
      <td class="center">{$cabimentacao.descritivo}</td>
    </tr>
{/foreach}
  </table>

  <p>[<a class="navtext" href="insert.php">Pedir Cabimentação</a>] 
  </p>
{/if}

{* The footer file with the address and stuff  *}
{include file='footer.tpl'}
