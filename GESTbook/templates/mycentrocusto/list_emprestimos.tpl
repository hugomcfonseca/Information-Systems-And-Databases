{* The header file with the main logo and stuff *}
{include file='header.tpl'}

{if $s_type == "user"}
  <center><h1>Os meus empréstimos:</h1></center>

  <table>
    <tr>
      <th class="left">#ID</th>
      <th class="left">Descrição</th>
      <th class="center">Data</th>
      <th class="left">Estado</th>
    </tr>
  {foreach from=$my_emprestimos item=cc1}
    <tr>
      <td class="left"><a href="get_emprestimo.php?id={$cc1.emprestimo_id}">{$cc1.emprestimo_id}</a></td>
      <td class="left">{$cc1.descritivo}</td>
      <td class="center">{$cc1.data}</td>
      <td class="center">{$cc1.resposta}</td>
    </tr>
  {/foreach}
  </table>

  <p>[<a class="navtext" href="insert_emprestimo.php">Pedir novo Empréstimo</a>]
     [<a class="navtext" href="list_emprestimos_pendentes.php">Ver os Meus pedidos de Empréstimos</a>]
     [<a class="navtext" href="list.php">Retroceder</a>]
  </p>
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}