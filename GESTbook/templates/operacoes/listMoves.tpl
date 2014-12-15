{* The header file with the main logo and stuff  *}
{include file='header.tpl'}

{if $s_user && $s_type != "user"}
  <h1>Lista de Operações</h1>

  <table>
    <tr>
      <th class="left">#ID</th>
      <th class="left">Tipo de movimento</th>
      <th class="center">Descritivo</th>
    </tr>
{foreach from=$operacao1 item=operacao}
    <tr>
      <td class="left"><a href="../operacoes/get.php?id={$operacao.operacao_id}">{$operacao.operacao_id}</a></td>
      <td class="left">{$operacao.tipo_movimento}</td>
      <td class="center">{$operacao.descritivo}</td>
    </tr>
{/foreach}
  </table>

{if $s_user != NULL}
  <p>[<a class="navtext" href="insert_enter.php">Inserir Movimento de Entrada</a>] 
  </p>
{/if}
{/if}

{* The footer file with the address and stuff  *}
{include file='footer.tpl'}
