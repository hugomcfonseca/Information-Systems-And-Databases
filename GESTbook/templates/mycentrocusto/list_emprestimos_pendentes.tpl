{* The header file with the main logo and stuff *}
{include file='header.tpl'}

{if $s_type == "user"}
  <center><h1>Empréstimos à espera de resposta:</h1></center>

  <table>
    <tr>
      <th class="left">#ID</th>
      <th class="left">Descrição</th>
      <th class="center">Data</th>
      <th class="left">Estado</th>
    </tr>
  {foreach from=$my_emprestimos item=cc1}
    <tr>
      <td class="left"><a href="get_emprestimo_pendente.php?id={$cc1.emprestimo_id}">{$cc1.emprestimo_id}</a></td>
      <td class="left">{$cc1.descritivo}</td>
      <td class="center">{$cc1.data}</td>
      <td class="center">{$cc1.resposta}</td>
    </tr>
  {/foreach}
  </table>

  <p>
     [<a class="navtext" href="list_emprestimos.php">Voltar à página anterior</a>]
  </p>
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}