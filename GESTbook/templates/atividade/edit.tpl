{* The header file with the main logo and stuff *}
{include file='header.tpl'}

{if $s_type == "admin" || $s_type == "staff"}
 <center> <h1>Editar Atividade</h1> </center>

  <form action="edit_action.php" method="post">
    <fieldset>
    <input type="hidden" name="atividade_id" value="{$atividade.atividade_id}" />
    
	<label for="descritivo">Descritivo:</label>
    <textarea rows="5" cols="50" name="descritivo" id="descritivo" required="required">{$atividade.descritivo}</textarea>
    <span class="error">{$s_errors.descritivo}</span>
	</br> </br>
	
    <label for="tipo">Tipo:</label>
	<select name="tipo" id="tipo">
	<option value="Estudantes">Estudantes</option>
	<option value="Eventos">Eventos</option>
	<option value="Pessoais">Pessoais</option>
	<option value="Projetos">Projetos</option>
	</select>
	</br> </br>
	
	<label for="data_inicio">Início:</label>
	<input id="data_inicio" name="data_inicio" type="date" value="{$atividade.data_inicio}">
	</br> </br>
	
	<label for="data_fim">Fim:</label>
	<input id="data_fim" name="data_fim" type="date" value="{$atividade.data_fim}">
	</br>
	
 <p><input type="submit" value="Editar" /></p>
 <p>[<a class="navtext" href="get.php?id={$atividade.atividade_id}">Retroceder</a>] 
    </fieldset>
  </form>
  {/if}

{* The footer file with the address and stuff *} 
{include file='footer.tpl'}
