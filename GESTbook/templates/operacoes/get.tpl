{* The header file with the main logo and stuff *}
{include file='header.tpl'}

{if $s_user}
  <h1>Ver Operação</h1>

  <ul>
    <li><strong>ID:</strong> {$operacao.operacao_id}</li>
	</br>
    <li><strong>Descritivo:</strong> {$operacao.descritivo}</li>
	</br>
    <li><strong>Tipo de movimento:</strong> {$operacao.tipo_movimento}</li>
	</br>
	<li><strong>Tipo de suporte:</strong> {$operacao.tipo_suporte}</li>
	</br>
	<li><strong>Montante:</strong>{$operacao.montante} €</li>
	</br>
    <li><strong>Data:</strong> {$operacao.data}</li>
	</br>
	{if $s_user != NULL && $s_type != "user"}
  		<li><strong>Beneficiante:</strong> <a href="../funcionarios/get.php?id={$operacao.beneficiante}">{$beneficiante_name}</a></li> 
	{/if}
	{if $s_user != NULL && $s_type == "user"}
  		<li><strong>Beneficiante:</strong> {$beneficiante_name}</a></li> 
	{/if}
	</br>
  </ul>

 <p>[<a class="navtext" href="get.php?id={$operacao.operacao_id-1}">Anterior</a>] 
    [<a class="navtext" href="get.php?id={$operacao.operacao_id+1}">Próxima</a>] 
{if $s_type == "admin"}
    [<a class="navtext" href="edit.php?id={$operacao.operacao_id}">Editar</a>] 
{/if}
	  [<a class="navtext" href="list.php?id={$operacao.requer}">Ver lista</a>] 
 </p>
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}

