{* The header file with the main logo and stuff *}
{include file='header.tpl'}

{if $s_type == "user"}
      <h1>Criar Centro de Custos</h1>

      <form action="insert_action.php" method="post">
        <fieldset>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{$centrocustos1.nome}" required="required" />
        <span class="error">{$s_errors.nome}</span>
        <br />
        <label for="nome_curto">Nome Curto:</label>
        <input type="text" name="nome_curto" id="nome_curto" value="{$centrocustos1.nome_curto}" required="required" />
        <span class="error">{$s_errors.nome_curto}</span>
        <br />
        <label for="periodo">Período de Vida:</label>
        <input type="text" size="4" name="periodo" id="periodo" value="{$centrocustos1.periodo}" required="required"/>
        <select name="time_type" id="time_type">
    {foreach $time_type as $tempo}
        <option value="{$tempo}"{if $tempo==$time_type} selected="selected"{/if}> {$tempo}
    {/foreach}
        </select>
        <br />
        <br />
        <label for="valor_orcamentado">Valor Orçamentado:</label>
        <input type="int" name="valor_orcamentado" id="valor_orcamentado" value="{$centrocustos1.valor_orcamentado}" required="required" />
        <span class="error">{$s_errors.valor_orcamentado}</span>
        <br />
        <br />
        <label for="descricao">Descrição:</label>
        <textarea rows="5" cols="52" name="descricao" id="descricao" required="required">{$centrocustos1.descricao}</textarea>
        <span class="error">{$s_errors.descricao}</span>
        <br />
        <label for="responsavel">Responsável:</label>
        <input type="text" name="responsavel" id="responsavel" value="{$responsavel}" required="required" readonly />
        <span class="error">{$s_errors.responsavel}</span>
        <br />
        <label for="tipo_custo">Tipo de Custo:</label>
        <select name="tipo_custo" id="tipo_custo">
    {foreach $cost_type as $tipo}
          <option value="{$tipo}"{if $tipo==$centrocustos1.tipo_custo} selected="selected"{/if}> {$tipo}
    {/foreach}
        </select>
        <br />
        <p><input type="submit" value="Inserir" /></p>
        </fieldset>
      </form>

{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}

