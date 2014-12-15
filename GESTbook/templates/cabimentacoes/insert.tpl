{* The header file with the main logo and stuff *}
{include file='header.tpl'}

{if $s_type == "admin" || $s_type == "user" || $s_type == "staff"}
      <h1>Pedir Nova Cabimentação</h1>

      <form action="insert_action.php" method="post">
        <fieldset>
        <label for="descritivo">Descrição:</label>
        <input type="text" size="42" name="descritivo" id="descritivo" value="{$cabimentacao1.descritivo}" required="required" />
        <span class="error">{$s_errors.descritivo}</span>
        <br />
        <label for="aemail">Valor Estimado:</label>
        <input type="int" size="24" name="valor_estimado" id="valor_estimado" value="{$cabimentacao1.valor_estimado}" required="required" />
        <span class="error">{$s_errors.valor_estimado}</span>
        <br /><br />
        <label for="centro_custos">Centro de Custos a cativar:</label>
        <select name="centro_custos" id="centro_custos">
        {foreach $centrocustos as $cc}
          <option value="{$cc.centrocustos_id}"{if $cabimentacao1.cativa==$cc.centrocustos_id} selected="selected"{/if}>{$cc.nome_curto} (ID: {$cc.centrocustos_id}) 
        {/foreach}
        </select>
        <br /><br /><br /><br />

        {if $s_type == "user"}
        <label for="funcionario">Funcionário que pede: </label>
        <input type="int" size="24" name="funcionario" id="funcionario" value="{$funcionarios}" readonly />
        <span class="error">{$s_errors.aage}</span>
        {/if}
        {if $s_type == "admin" || $s_type == "staff"}
        <label for="funcionario">Funcionário que pede: </label>
        <select name="funcionario" id="funcionario">
        {foreach $funcionarios as $funcionario}
          <option value="{$funcionario.user_id}"{if $cabimentacao1.pede==$funcionario.user_id} selected="selected"{/if}>{$funcionario.nome} (ID: {$funcionario.user_id}) 
        {/foreach}
        </select>
        {/if}
        <br /><br /><br />
        <label for="atividade">Atividade relacionada: </label>
        <select name="atividade" id="atividade">
        {foreach $atividades as $atividade}
          <option value="{$atividade.atividade_id}"{if $cabimentacao1.envolve==$atividade.atividade_id} selected="selected"{/if}>{$atividade.atividade_id}
        {/foreach}
        </select>
        <br />
        <p><input type="submit" value="Inserir" /></p>
        </fieldset>
      </form>
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
