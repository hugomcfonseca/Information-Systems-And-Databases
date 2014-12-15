<?php /* Smarty version Smarty-3.1.5, created on 2014-12-12 21:37:58
         compiled from "../templates/centrocusto/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1661616644548474e6e80a80-38410323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6758de01c4a395cee9993e5079fa4277754c1cd' => 
    array (
      0 => '../templates/centrocusto/get.tpl',
      1 => 1418416382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1661616644548474e6e80a80-38410323',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548474e704bff',
  'variables' => 
  array (
    's_type' => 0,
    'centrocustos1' => 0,
    'responsavel_nome' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548474e704bff')) {function content_548474e704bff($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="admin"||$_smarty_tpl->tpl_vars['s_type']->value=="staff"){?>
    <h1>Ver Centro de Custos</h1>

    <ul>
      <li><strong>ID:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['centrocustos_id'];?>
</li>
      <li><strong>Nome:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['nome'];?>
</li>
      <li><strong>Nome Curto:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['nome_curto'];?>
</li>
      <li><strong>Período de vida:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['periodo'];?>
</li>
      <li><strong>Valor Orçamentado:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['valor_orcamentado'];?>
 €</li>
      <li><strong>Descrição:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['descricao'];?>
</li>
      <li><strong>Tipo de Custo:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['tipo_custo'];?>
</li>
      <li><strong>Responsável:</strong> <a href="../funcionarios/get.php?id=<?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['responsavel'];?>
"><?php echo $_smarty_tpl->tpl_vars['responsavel_nome']->value;?>
</a></li>
    </ul>

    <p>[<a class="navtext" href="get.php?id=<?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['centrocustos_id']+1;?>
">Próximo</a>]
       [<a class="navtext" href="../centrocusto/list_cab.php?id=<?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['centrocustos_id'];?>
">Ver Cabimentações Pendentes</a>] 
    <?php if ($_smarty_tpl->tpl_vars['s_type']->value=="admin"){?>
       [<a class="navtext" href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['centrocustos_id'];?>
">Editar</a>] 
       [<a class="navtext" href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['centrocustos_id'];?>
">Apagar</a>] 
       [<a class="navtext" href="list.php?id=<?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['centrocustos_id'];?>
">Retroceder</a>] 
    <?php }?>
    </p>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>