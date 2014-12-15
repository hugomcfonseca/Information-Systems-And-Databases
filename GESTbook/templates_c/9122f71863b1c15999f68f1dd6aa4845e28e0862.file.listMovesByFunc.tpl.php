<?php /* Smarty version Smarty-3.1.5, created on 2014-12-15 01:09:27
         compiled from "../templates/operacoes/listMovesByFunc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1987632546548e1d87350938-11532695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9122f71863b1c15999f68f1dd6aa4845e28e0862' => 
    array (
      0 => '../templates/operacoes/listMovesByFunc.tpl',
      1 => 1418602051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1987632546548e1d87350938-11532695',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548e1d87470d6',
  'variables' => 
  array (
    's_user' => 0,
    'operacao1' => 0,
    'operacao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e1d87470d6')) {function content_548e1d87470d6($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['s_user']->value){?>
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
      <td class="left"><a href="../operacoes/get.php?id=<?php echo $_smarty_tpl->tpl_vars['operacao']->value['operacao_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['operacao']->value['operacao_id'];?>
</a></td>
      <td class="left"><?php echo $_smarty_tpl->tpl_vars['operacao']->value['tipo_movimento'];?>
</td>
      <td class="center"><?php echo $_smarty_tpl->tpl_vars['operacao']->value['descritivo'];?>
</td>
    </tr>
<?php } ?>
  </table>


    <p>[<a class="navtext" href="../operacoes/insert_enter.php">Inserir Movimento de Entrada</a>] 
    </p>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>