{* The header file with the main logo and stuff *}
{include file='header.tpl'}

{if $s_type == "admin" || $s_type == "user" || $s_type == "staff"}
  <center><h1>Lista de Centros de Custos</h1></center>

  <table>
    <tr>
      <th class="left">#ID</th>
      <th class="left">Nome Curto</th>
      <th class="center">Descrição</th>
    </tr>
  {foreach from=$centrocustos item=cc1}
    <tr>
      {if $s_type != "user"}
        <td class="left"><a href="get.php?id={$cc1.centrocustos_id}">{$cc1.centrocustos_id}</a></td>
      {/if}
      {if $s_type == "user"}
        <td class="left">{$cc1.centrocustos_id}</td>
      {/if}
      <td class="left">{$cc1.nome_curto}</td>
      <td class="center">{$cc1.descricao}</td>
    </tr>
  {/foreach}
  </table>

  <p>[<a class="navtext" href="list_page.php">Paginar</a>]</p>

  {if $s_type == "admin" || $s_type == "staff"}
    <p>[<a class="navtext" href="insert.php">Inserir</a>]</p>
  {/if}
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
