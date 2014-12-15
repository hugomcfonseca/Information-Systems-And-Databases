{* The header file with the main logo and stuff *}
{include file='header.tpl'}

  <h1>Lista de Cabimentações Pendentes do CC selecionado</h1>

  <table>
    <tr>
      <th class="left">#ID</th>
      <th class="left">Data do Pedido</th>
      <th class="center">Descritivo</th>
    </tr>
{foreach from=$cab_pendente item=cab_pendente1}
    <tr>
      <td class="left"><a href="get_cab.php?id={$cab_pendente1.cabimentacao_id}">{$cab_pendente1.cabimentacao_id}</a></td>
      <td class="left">{$cab_pendente1.data_pedido}</td>
      <td class="center">{$cab_pendente1.descritivo}</td>
    </tr>
{/foreach}
  </table>

  <p>[<a class="navtext" href="list_page.php">Paginar</a>]</p>

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
