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
	<li><strong>Password:</strong> ************</li>
  </ul>

{if $s_type == "user"  || $s_type == "admin" || $s_type == "staff"}
  <p>[<a class="navtext" href="../funcionarios/edit_user.php">Editar</a>]
  </p>
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
