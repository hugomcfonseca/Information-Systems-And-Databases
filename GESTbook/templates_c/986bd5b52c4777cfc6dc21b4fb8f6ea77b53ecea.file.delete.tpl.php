<?php /* Smarty version Smarty-3.1.5, created on 2014-12-15 03:12:19
         compiled from "../templates/atividade/delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7805833945485c8e5e0e5a2-57908833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '986bd5b52c4777cfc6dc21b4fb8f6ea77b53ecea' => 
    array (
      0 => '../templates/atividade/delete.tpl',
      1 => 1418500036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7805833945485c8e5e0e5a2-57908833',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5485c8e5ef241',
  'variables' => 
  array (
    's_type' => 0,
    'atividade' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5485c8e5ef241')) {function content_5485c8e5ef241($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="admin"||$_smarty_tpl->tpl_vars['s_type']->value=="staff"){?>
  <h1>Remover Atividade</h1>

  <ul>
    <li><strong>Atividade nº:</strong> <?php echo $_smarty_tpl->tpl_vars['atividade']->value['atividade_id'];?>
</li>
  </br>
    <li><strong>Tipo:</strong> <?php echo $_smarty_tpl->tpl_vars['atividade']->value['tipo'];?>
</li>
  </br>
    <li><strong>Descritivo:</strong> <?php echo $_smarty_tpl->tpl_vars['atividade']->value['descritivo'];?>
</li>
  </br>
    <li><strong>Início:</strong> <?php echo $_smarty_tpl->tpl_vars['atividade']->value['data_inicio'];?>
</li>
  </br>
    <li><strong>Fim:</strong> <?php echo $_smarty_tpl->tpl_vars['atividade']->value['data_fim'];?>
</li>
  </ul>

  <p>Tem a certeza? 
     [<a class="navtext" href="delete_action.php?id=<?php echo $_smarty_tpl->tpl_vars['atividade']->value['atividade_id'];?>
">Sim</a>] 
     [<a class="navtext" href="get.php?id=<?php echo $_smarty_tpl->tpl_vars['atividade']->value['atividade_id'];?>
">Não</a>]
  </p>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>