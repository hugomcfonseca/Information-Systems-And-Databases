{* The header file with the main logo and stuff *}
{include file='header.tpl'}
	{if $s_user}
  <center><h1>Ver Atividade</h1></center>

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

  <p>[<a class="navtext" href="get.php?id={$atividade.atividade_id-1}">Anterior</a>] 
     [<a class="navtext" href="get.php?id={$atividade.atividade_id+1}">Próxima</a>] 
     [<a class="navtext" href="../cabimentacoes/list.php?id={$atividade.atividade_id}">Ver Cabimentações</a>]
{if $s_type != "user"}
     [<a class="navtext" href="edit.php?id={$atividade.atividade_id}">Editar</a>] 
     [<a class="navtext" href="delete.php?id={$atividade.atividade_id}">Apagar</a>]
{/if}
	[<a class="navtext" href="list.php">Ver lista</a>] 
  </p>
	{/if}
{* The footer file with the address and stuff *}
{include file='footer.tpl'}
