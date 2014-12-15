<?php /* Smarty version Smarty-3.1.5, created on 2014-12-14 23:16:21
         compiled from "../templates/operacoes/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12205883275488e2f2c46d98-48777177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e31d4d857b5d1e96783ec52e1d8ebed82f1c741' => 
    array (
      0 => '../templates/operacoes/list.tpl',
      1 => 1418595372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12205883275488e2f2c46d98-48777177',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5488e2f2ef4e8',
  'variables' => 
  array (
    'operacao1' => 0,
    'operacao' => 0,
    's_user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5488e2f2ef4e8')) {function content_5488e2f2ef4e8($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


  <h1>Lista de Operações</h1>

  <table>
    <tr>
      <th class="left">#ID</th>
      <th class="left">Tipo de movimento</th>
      <th class="center">Descritivo</th>
    </tr>
<?php  $_smarty_tpl->tpl_vars['operacao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['operacao']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['operacao1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['operacao']->key => $_smarty_tpl->tpl_vars['operacao']->value){
$_smarty_tpl->tpl_vars['operacao']->_loop = true;
?>
    <tr>
      <td class="left"><a href="get.php?id=<?php echo $_smarty_tpl->tpl_vars['operacao']->value['operacao_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['operacao']->value['operacao_id'];?>
</a></td>
      <td class="left"><?php echo $_smarty_tpl->tpl_vars['operacao']->value['tipo_movimento'];?>
</td>
      <td class="center"><?php echo $_smarty_tpl->tpl_vars['operacao']->value['descritivo'];?>
</td>
    </tr>
<?php } ?>
  </table>

<?php if ($_smarty_tpl->tpl_vars['s_user']->value!=null){?>
  <p>[<a class="navtext" href="insert.php?id=<?php echo $_smarty_tpl->tpl_vars['operacao']->value['requer'];?>
">Inserir</a>] 
  </p>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>