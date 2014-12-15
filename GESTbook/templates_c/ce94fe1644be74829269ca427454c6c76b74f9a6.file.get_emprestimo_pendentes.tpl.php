<?php /* Smarty version Smarty-3.1.5, created on 2014-12-14 15:43:08
         compiled from "../templates/mycentrocusto/get_emprestimo_pendentes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:716720226548cc284154585-65284909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce94fe1644be74829269ca427454c6c76b74f9a6' => 
    array (
      0 => '../templates/mycentrocusto/get_emprestimo_pendentes.tpl',
      1 => 1418568177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '716720226548cc284154585-65284909',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548cc2841eca6',
  'variables' => 
  array (
    's_type' => 0,
    'my_emprestimos1' => 0,
    'centrocustos1' => 0,
    'centrocustos2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548cc2841eca6')) {function content_548cc2841eca6($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="user"){?>
    <h1>Ver Emprestimos</h1>

    <ul>
      <li><strong>ID:</strong> <?php echo $_smarty_tpl->tpl_vars['my_emprestimos1']->value['emprestimo_id'];?>
</li>
      <li><strong>Financiador:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['nome_curto'];?>
 (ID: <?php echo $_smarty_tpl->tpl_vars['centrocustos1']->value['centrocustos_id'];?>
)</li>
      <li><strong>Financiado:</strong> <?php echo $_smarty_tpl->tpl_vars['centrocustos2']->value['nome_curto'];?>
 (ID: <?php echo $_smarty_tpl->tpl_vars['centrocustos2']->value['centrocustos_id'];?>
)</li>
      <li><strong>Descritivo:</strong> <?php echo $_smarty_tpl->tpl_vars['my_emprestimos1']->value['descritivo'];?>
</li>
      <li><strong>Montante:</strong> <?php echo $_smarty_tpl->tpl_vars['my_emprestimos1']->value['montante'];?>
 €</li>
      <li><strong>Data:</strong> <?php echo $_smarty_tpl->tpl_vars['my_emprestimos1']->value['data'];?>
</li>
      <li><strong>Estado:</strong> <?php echo $_smarty_tpl->tpl_vars['my_emprestimos1']->value['resposta'];?>
</li>
    </ul>

    <p>
       [<a class="navtext" href="list_emprestimos_pendentes.php">Retroceder</a>] 
    </p>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>