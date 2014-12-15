{* The header file with the main logo and stuff *}
{include file='header.tpl'}


  {if $s_type == "admin" || $s_type == "staff"}
    <h1>Remover Centro de Custos</h1>

    <ul>
      <li><strong>ID:</strong> {$centrocustos1.centrocustos_id}</li>
      <li><strong>Nome:</strong> {$centrocustos1.nome}</li>
      <li><strong>Nome Curto:</strong> {$centrocustos1.nome_curto}</li>
      <li><strong>Período de Vida:</strong> {$centrocustos1.periodo}</li>
      <li><strong>Valor Orçamentado:</strong> {$centrocustos1.valor_orcamentado}</li>
      <li><strong>Descrição:</strong> {$centrocustos1.descricao}</li>
      <li><strong>Tipo de Custo:</strong> {$centrocustos1.tipo_custo}</li>
      <li><strong>Responsável:</strong> {$centrocustos1.responsavel}</li>
    </ul>

    <p>Tem a certeza? 
       [<a class="navtext" href="delete_action.php?id={$centrocustos1.centrocustos_id}">Sim</a>] 
       [<a class="navtext" href="get.php?id={$centrocustos1.centrocustos_id}">Não</a>]
    </p>

{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
