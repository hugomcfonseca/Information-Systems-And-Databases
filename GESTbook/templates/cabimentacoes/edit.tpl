{* The header file with the main logo and stuff *}
{include file='header.tpl'}

{if $s_type == "admin" || $s_type == "staff"}
  <h1>Editar Cabimentação</h1>

  <ul>
    <li><strong>ID:</strong> {$cabimentacao1.cabimentacao_id}</li>
    <li><strong>Descritivo:</strong> {$cabimentacao1.descritivo}</li>
    <li><strong>Valor Estimado:</strong> {$cabimentacao1.valor_estimado}</li>
    <li><strong>Data de Pedido:</strong> {$cabimentacao1.data_pedido}</li>
    <li><strong>Centro de Custos Associado:</strong> {$cabimentacao1.cativa}</li>
    <li><strong>Funcionário Associado:</strong> {$cabimentacao1.pede}</li>
    <li><strong>Atividade Envolvida:</strong> {$cabimentacao1.envolve}</li>
  </ul>

  <form action="edit_action.php" method="post">
    <input type="hidden" name="cabimentacao_id" value="{$cabimentacao1.cabimentacao_id}" />
    <fieldset>
    <label for="data_decisao">Data de decisão:</label>
    <input type="date" name="data_decisao" id="data_decisao" value="{$cabimentacao1.data_decisao}" required="required" />
    <span class="error">{$s_errors.data_decisao}</span>
    <br /><br />
    <label for="justificacao_decisao">Justificação da Decisão:</label>
    <textarea rows="5" cols="52"  name="justificacao_decisao" id="justificacao_decisao" required="required">{$cabimentacao1.justificacao_decisao}</textarea>
    <span class="error">{$s_errors.justificacao_decisao}</span>
    <br />
    <label for="estado">Estado:</label>
{foreach $status as $state}
    <input type="radio" name="estado" id="estado" align="middle"
    value="{$state}"{if $cabimentacao1==$news1.estado} checked="checked"{/if}> {$state}
{/foreach}
    <p><input type="submit" value="Editar" /></p>
    </fieldset>
  </form>
  {/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
