<?php /* Smarty version Smarty-3.1.5, created on 2014-12-14 15:39:02
         compiled from "../templates/mycentrocusto/get_emprestimo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2110723510548cc0b816d322-79469324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69ed3bf7f925915a74dacaef12567253c5aaa03f' => 
    array (
      0 => '../templates/mycentrocusto/get_emprestimo.tpl',
      1 => 1418567909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2110723510548cc0b816d322-79469324',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548cc0b827c2e',
  'variables' => 
  array (
    's_type' => 0,
    'my_emprestimos1' => 0,
    'centrocustos1' => 0,
    'centrocustos2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548cc0b827c2e')) {function content_548cc0b827c2e($_smarty_tpl) {?>
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
        <?php if ($_smarty_tpl->tpl_vars['my_emprestimos1']->value['resposta']=="Pendente"){?>
        [<a class="navtext" href="close.php?id=<?php echo $_smarty_tpl->tpl_vars['my_emprestimos1']->value['emprestimo_id'];?>
&resp=Aceite">Aceitar</a>]
        [<a class="navtext" href="close.php?id=<?php echo $_smarty_tpl->tpl_vars['my_emprestimos1']->value['emprestimo_id'];?>
&resp=Recusado">Recusar</a>]
        <?php }?>
       [<a class="navtext" href="list_emprestimos.php">Retroceder</a>] 
    </p>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>