{* The header file with the main logo and stuff *}
{include file='header.tpl'}

{if $s_type == "admin" || $s_type == "staff"}
  <h1>Remover Atividade</h1>

  <ul>
    <li><strong>Atividade nº:</strong> {$atividade.atividade_id}</li>
  </br>
    <li><strong>Tipo:</strong> {$atividade.tipo}</li>
  </br>
    <li><strong>Descritivo:</strong> {$atividade.descritivo}</li>
  </br>
    <li><strong>Início:</strong> {$atividade.data_inicio}</li>
  </br>
    <li><strong>Fim:</strong> {$atividade.data_fim}</li>
  </ul>

  <p>Tem a certeza? 
     [<a class="navtext" href="delete_action.php?id={$atividade.atividade_id}">Sim</a>] 
     [<a class="navtext" href="get.php?id={$atividade.atividade_id}">Não</a>]
  </p>
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
