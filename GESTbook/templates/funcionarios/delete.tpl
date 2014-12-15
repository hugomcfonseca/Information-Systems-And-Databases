{* The header file with the main logo and stuff *}
{include file='header.tpl'}

  <h1>Remover Funcionário</h1>

  <ul>
    <li><strong>E-mail:</strong> {$employee.email}</li>
  </br> </br>
  <li><strong>NIF:</strong> {$employee.nif}</li>
  </br> </br>
    <li><strong>Nome:</strong> {$employee.nome}</li>
  </br> </br>
  <li><strong>Tipo:</strong> {$employee.tipo}</li>
  </br> </br>
  <li><strong>Categoria:</strong> {$employee.categoria}</li>
  </br> </br>
    <li><strong>Telefone:</strong> {$employee.telefone}</li>
  </br> </br>
  <li><strong>Morada:</strong> {$employee.morada}</li>
  </br> </br>
  </ul>

{if $s_type == "admin"}
  <p>Tem a certeza? 
    [<a class="navtext" href="delete_action.php?id={$employee.user_id}">Sim</a>]
    [<a class="navtext" href="get.php?id={$employee.user_id}">Não</a>]
  </p>
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
