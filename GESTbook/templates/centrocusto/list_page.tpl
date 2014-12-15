{* The header file with the main logo and stuff *}
{include file='header.tpl'}

{if $s_type == "admin" || $s_type == "user" || $s_type == "staff"}
  <h1>Listar Centros de Custos</h1>

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

  <p>
  {if $npage > 1}
    [<a class="navtext" href="list_page.php?page={$npage-1}">Prev</a>] | 
  {/if}
    [<span class="navtext">{$npage}</span>]
  {if $npage * $limit <= $nrows}
    [<a class="navtext" href="list_page.php?page={$npage+1}">Next</a>]
  {/if}
  </p>

  {if $s_type == "admin"  || $s_type == "staff"}
    <p>[<a class="navtext" href="insert.php">Inserir</a>]</p>
  {/if}
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
