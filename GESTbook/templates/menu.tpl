    <!-- nav menu -->
    <div id="menu">
      <div class="title">Menu</div>
      <ul>
{if ($s_type == "user")}
  <li><a href="../mycentrocusto/list.php">Centros de Custos</a></li> 
  <li><a href="../atividade/listByMyCC.php">Gestão Financeira</a></li>
{/if}   
{if $s_type != "user" && $s_user != NULL}
  <li><a href="../centrocusto/list.php">Centros de Custos</a></li>
  <li><a href="../atividade/list.php">Gestão Financeira</a></li>
  <li><a href="../funcionarios/list.php">Funcionários</a></li>
{/if}
{if ($s_user != NULL)}
  <li><a href="../funcionarios/get_user.php">Definições da Conta</a></li>
{/if}
{if ($s_user == NULL)}
  <li><a href="../funcionarios/insert_new.php">Criar nova conta</a></li>
{/if}
     </ul>
    </div>


