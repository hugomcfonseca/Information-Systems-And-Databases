{* The header file with the main logo and stuff *}
{include file='header.tpl'}
 
  <h1>Ver Dados dos utilizadores</h1>

  <ul>
    <li><strong>E-mail:</strong> {$funcionario.email}</li>
	</br> </br>
	<li><strong>NIF:</strong> {$funcionario.nif}</li>
	</br> </br>
    <li><strong>Nome:</strong> {$funcionario.nome}</li>
	</br> </br>
	<li><strong>Tipo:</strong> {$funcionario.tipo}</li>
	</br> </br>
	<li><strong>Categoria:</strong> {$funcionario.categoria}</li>
	</br> </br>
    <li><strong>Telefone:</strong> {$funcionario.telefone}</li>
	</br> </br>
	<li><strong>Morada:</strong> {$funcionario.morada}</li>
	</br> </br>
  </ul>

{if $s_type == "admin"}
  <p>[<a class="navtext" href="edit.php?id={$funcionario.user_id}">Editar</a>] 
     [<a class="navtext" href="delete.php?id={$funcionario.user_id}">Apagar</a>]
	 [<a class="navtext" href="list.php?id={$funcionario.user_id}">Retroceder</a>]
  </p>
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
