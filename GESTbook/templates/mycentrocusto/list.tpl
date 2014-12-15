{* The header file with the main logo and stuff *}
{include file='header.tpl'}

{if $s_type == "user"}
  <center><h1>Os Meus Centros de Custos</h1></center>

  <table>
    <tr>
      <th class="left">#ID</th>
      <th class="left">Nome Curto</th>
      <th class="center">Descrição</th>
    </tr>
  {foreach from=$mycentrocustos item=cc1}
    <tr>
      <td class="left"><a href="get.php?id={$cc1.centrocustos_id}">{$cc1.centrocustos_id}</a></td>
      <td class="left">{$cc1.nome_curto}</td>
      <td class="center">{$cc1.descricao}</td>
    </tr>
  {/foreach}
  </table>

  <p>[<a class="navtext" href="insert.php">Criar Centro de Custos</a>]
     [<a class="navtext" href="../centrocusto/list.php">Ver Centros de Custos Existentes</a>]</p>
  <p>[<a class="navtext" href="list_emprestimos.php">Ver Empréstimos</a>]</p>
  <p>[<a class="navtext" href="list_page.php">Paginar</a>]</p>
  
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}