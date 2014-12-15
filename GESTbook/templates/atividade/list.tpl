{* The header file with the main logo and stuff  *}
{include file='header.tpl'}

{if $s_user && $s_type != "user"}
  <center><h1>Lista de Atividades</h1></center>

  <table>
    <tr>
      <th class="left">ID</th>
      <th class="left">Tipo</th>
	  <th class="left">Descritivo</th>
     
    </tr>
{foreach from=$atividades item=atividade}
    <tr>
      <td class="left"><a href="get.php?id={$atividade.atividade_id}">{$atividade.atividade_id}</a></td>
       <td class="left">{$atividade.tipo}</td>
	  <td class="center">{$atividade.descritivo}</td>
    </tr>
{/foreach}
  </table>
  

  <p>[<a class="navtext" href="insert.php">Inserir</a>] 
  </p>
  <p>[<a class="navtext" href="../operacoes/list_moves.php">Ver Todas as Operações</a>] 
  </p>
  
{/if}

{* The footer file with the address and stuff  *}
{include file='footer.tpl'}
