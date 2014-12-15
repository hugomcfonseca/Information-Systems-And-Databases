{* The header file with the main logo and stuff *}
{include file='header.tpl'}

{if $s_type == "user"}
    <h1>Ver Emprestimos</h1>

    <ul>
      <li><strong>ID:</strong> {$my_emprestimos1.emprestimo_id}</li>
      <li><strong>Financiador:</strong> {$centrocustos1.nome_curto} (ID: {$centrocustos1.centrocustos_id})</li>
      <li><strong>Financiado:</strong> {$centrocustos2.nome_curto} (ID: {$centrocustos2.centrocustos_id})</li>
      <li><strong>Descritivo:</strong> {$my_emprestimos1.descritivo}</li>
      <li><strong>Montante:</strong> {$my_emprestimos1.montante} €</li>
      <li><strong>Data:</strong> {$my_emprestimos1.data}</li>
      <li><strong>Estado:</strong> {$my_emprestimos1.resposta}</li>
    </ul>

    <p>
       [<a class="navtext" href="list_emprestimos_pendentes.php">Retroceder</a>] 
    </p>
{/if}

{* The footer file with the address and stuff *}
{include file='footer.tpl'}
