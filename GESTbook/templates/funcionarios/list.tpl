{* The header file with the main logo and stuff *}
{include file='header.tpl'}

  <h1>Listar Funcionários</h1>

  <table>
    <tr>
      <th class="left">Numero ID</th>
      <th class="left">Nome</th>
      <th class="left">Email</th>
    </tr>
{foreach from=$funcionarios1 item=funcionario}
    <tr>
      <td class="left"><a href="get.php?id={$funcionario.user_id}">{$funcionario.user_id}</a></td>
      <td class="left">{$funcionario.nome}</td>
      <td class="left">{$funcionario.email}</td>
    </tr>
{/foreach}
  </table>

{if $s_type == "admin"}
  <p>[<a class="navtext" href="insert.php">Inserir</a>]</p>
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
