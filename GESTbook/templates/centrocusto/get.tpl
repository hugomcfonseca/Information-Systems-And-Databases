{* The header file with the main logo and stuff *}
{include file='header.tpl'}

{if $s_type == "admin" || $s_type == "staff"}
    <h1>Ver Centro de Custos</h1>

    <ul>
      <li><strong>ID:</strong> {$centrocustos1.centrocustos_id}</li>
      <li><strong>Nome:</strong> {$centrocustos1.nome}</li>
      <li><strong>Nome Curto:</strong> {$centrocustos1.nome_curto}</li>
      <li><strong>Período de vida:</strong> {$centrocustos1.periodo}</li>
      <li><strong>Valor Orçamentado:</strong> {$centrocustos1.valor_orcamentado} €</li>
      <li><strong>Descrição:</strong> {$centrocustos1.descricao}</li>
      <li><strong>Tipo de Custo:</strong> {$centrocustos1.tipo_custo}</li>
      <li><strong>Responsável:</strong> <a href="../funcionarios/get.php?id={$centrocustos1.responsavel}">{$responsavel_nome}</a></li>
    </ul>

    <p>[<a class="navtext" href="get.php?id={$centrocustos1.centrocustos_id+1}">Próximo</a>]
       [<a class="navtext" href="../centrocusto/list_cab.php?id={$centrocustos1.centrocustos_id}">Ver Cabimentações Pendentes</a>] 
    {if $s_type == "admin"}
       [<a class="navtext" href="edit.php?id={$centrocustos1.centrocustos_id}">Editar</a>] 
       [<a class="navtext" href="delete.php?id={$centrocustos1.centrocustos_id}">Apagar</a>] 
       [<a class="navtext" href="list.php?id={$centrocustos1.centrocustos_id}">Retroceder</a>] 
    {/if}
    </p>
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
