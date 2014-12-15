{* The header file with the main logo and stuff *}
{include file='header.tpl'}

{if $s_user}
      <h1>Pedir Nova Cabimentação</h1>

      <form action="insert_act_action.php" method="post">
        <fieldset>
        <label for="descritivo">Descrição:</label>
        <input type="text" size="42" name="descritivo" id="descritivo" value="{$cabimentacao1.descritivo}" required="required" />
        <span class="error">{$s_errors.descritivo}</span>
        <br />
        <label for="valor_estimado">Valor Estimado:</label>
        <input type="int" size="24" name="valor_estimado" id="valor_estimado" value="{$cabimentacao1.valor_estimado}" required="required" />
        <span class="error">{$s_errors.valor_estimado}</span>
        <br /><br />
        <label for="centro_custos">Centro de Custos a cativar:</label>
        <input type="int" size="24" name="centro_custos" id="centro_custos" value="{$cabimentacao1.centro_custos}" required="required" />
        <span class="error">{$s_errors.aphone}</span>
        <br /><br /><br /><br />
        <label for="funcionario">Funcionário que pede: </label>
        <input type="int" size="24" name="funcionario" id="funcionario" value="{$responsavel}" readonly />
        <span class="error">{$s_errors.aage}</span>
        <br /><br /><br />
        <label for="atividade">Atividade relacionada (ALTERAR): </label>
        <input type="int" size="24" name="atividade" id="atividade" value="{$atividade_id}" readonly />
        <span class="error">{$s_errors.aage}</span>
        <br />
        <p><input type="submit" value="Inserir" /></p>
        </fieldset>
      </form>
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
