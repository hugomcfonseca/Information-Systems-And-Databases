{* The header file with the main logo and stuff *}
{include file='header.tpl'}
    
{if $s_user}
	<center> <h1>Inserir Atividade</h1> </center>

	<form action="insert_action.php" method="post">
    <fieldset>

    <label for="descritivo">Descritivo:</label>
    <textarea rows="5" cols="52" name="descritivo" id="descritivo" required="required">{$atividade.descritivo}</textarea>
    <span class="error">{$s_errors.descritivo}</span>
    </br> </br>
	
	<label for="tipo">Tipo:</label>
	<select name="tipo">
	<option value="Estudantes">Estudantes</option>
	<option value="Eventos">Eventos</option>
	<option value="Pessoais">Pessoais</option>
	<option value="Projetos">Projetos</option>
	</select>
	</br> </br>
	
	<label for="data_inicio">Início:</label>
	<input id="data_inicio" name="data_inicio" type="date">
	</br> </br>
	
	<label for="data_fim">Fim:</label>
	<input id="data_fim" name="data_fim" type="date">
	</br> </br>

    <p><input type="submit" value="Inserir" /></p>

    {if $s_type != "user"}
 		<p> [<a class="navtext" href="list.php">Retroceder</a>] </p> 
 	{/if}
 	{if $s_type == "user"}
 		<p> [<a class="navtext" href="listByMyCC.php">Retroceder</a>] </p> 
 	{/if}
    </fieldset>
  </form>	
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}

