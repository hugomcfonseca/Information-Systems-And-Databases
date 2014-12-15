{* The header file with the main logo and stuff *}
{include file='header.tpl'}

if {$s_user}
  <h1>Inserir Operação de Entrada</h1>

  <form action="insert_enter_action.php" method="post">
    <fieldset>
    <input type="hidden" name="operacao_id" value="{$operacao1.operacao_id}" />
    
    <label for="descritivo">Descritivo:</label>
    <textarea rows="5" cols="50" name="descritivo" id="descritivo" required="required">{$operacao1.descritivo}</textarea>
    <span class="error">{$s_errors.descritivo}</span>
    </br> </br> </br>
    
     <label for="tipo_movimento">Tipo de movimento:</label>
    <input id="tipo_movimento" name="tipo_movimento" type="text" value="Entrada" readonly>
    </br> </br> </br>
    
    <label for="tipo_suporte">Tipo de suporte:</label>
    <select name="tipo_suporte" id="tipo_suporte">
    <option value="Instituicao">Instituicao</option>
    <option value="Pessoal">Pessoal</option>
    </select>
    </br> </br> </br>
    
    <label for="montante">Montante:</label>
    <input id="montante" name="montante" type="int" value="{$operacao1.montante}">
    </br> </br>

    <label for="beneficiante">Beneficiante:</label>
    <input id="beneficiante" name="beneficiante" type="int" value="{$operacao1.beneficiante}" >
    </br> </br>

    <label for="suporta">Responsável pelo suporte:</label>
    <input id="suporta" name="suporta" type="int" value="{$operacao1.suporta}">
    </br> </br>
    
    <p><input type="submit" value="Inserir" /></p>
    </fieldset>
  </form>
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
