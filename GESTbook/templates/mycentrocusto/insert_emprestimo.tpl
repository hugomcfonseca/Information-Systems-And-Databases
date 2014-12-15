{* The header file with the main logo and stuff *}
{include file='header.tpl'}

{if $s_type == "user"}
  <h1>Inserir Emprestimo</h1>

    <form action="insert_action_emprestimo.php" method="post">
    <fieldset>

    <label for="financiado">A financiar:</label>
    <select name="financiado" id="financiado">
    {foreach $centrocustos as $cc}
        <option value="{$cc.centrocustos_id}"{if $financia.financiado==$cc.centrocustos_id} selected="selected"{/if}>{$cc.nome_curto} (ID: {$cc.centrocustos_id}) 
    {/foreach}
    </select>
    <br /></br>

    <label for="financiador">Financiador:</label>
    <select name="financiador" id="financiador">
    {foreach $centrocustos as $cc}
        <option value="{$cc.centrocustos_id}"{if $financia.financiador==$cc.centrocustos_id} selected="selected"{/if}>{$cc.nome_curto} (ID: {$cc.centrocustos_id}) 
    {/foreach}
    </select>
    <br /></br>

    <label for="descritivo">Descrição:</label>
    <input type="text" name="descritivo" id="descritivo" value="" required="required" size="70" />
    <span class="error">{$s_errors.descritivo}</span>
    </br> </br>

    <label for="montante">Montante:</label>
    <input type="text" name="montante" id="montante" value="" required="required" size="30" />
    <span class="error">{$s_errors.montante}</span>
    </br> </br>
    
    <label for="data">Data:</label>
    <input type="date" id="data" name="data" required="required">
    <span class="error">{$s_errors.data}</span>
    </br> </br>
    
    <p><input type="submit" value="Inserir" /></p>
     <p>[<a class="navtext" href="list_emprestimos.php">Retroceder</a>] 
  </p>
    </fieldset>
  </form>

{/if}
{* The footer file with the address and stuff *}
{include file='footer.tpl'}
