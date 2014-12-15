<?php /* Smarty version Smarty-3.1.5, created on 2014-12-14 03:34:54
         compiled from "../templates/centrocusto/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10027146325483a790a4d207-47784413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22bcf6ca44d51c4d205ff2d5cd8cf57f563a162f' => 
    array (
      0 => '../templates/centrocusto/list.tpl',
      1 => 1418493963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10027146325483a790a4d207-47784413',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5483a790b1cfa',
  'variables' => 
  array (
    's_type' => 0,
    'centrocustos' => 0,
    'cc1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5483a790b1cfa')) {function content_5483a790b1cfa($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="admin"||$_smarty_tpl->tpl_vars['s_type']->value=="user"||$_smarty_tpl->tpl_vars['s_type']->value=="staff"){?>
  <center><h1>Lista de Centros de Custos</h1></center>

  <table>
    <tr>
      <th class="left">#ID</th>
      <th class="left">Nome Curto</th>
      <th class="center">Descrição</th>
    </tr>
  <?php  $_smarty_tpl->tpl_vars['cc1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cc1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['centrocustos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cc1']->key => $_smarty_tpl->tpl_vars['cc1']->value){
$_smarty_tpl->tpl_vars['cc1']->_loop = true;
?>
    <tr>
      <?php if ($_smarty_tpl->tpl_vars['s_type']->value!="user"){?>
        <td class="left"><a href="get.php?id=<?php echo $_smarty_tpl->tpl_vars['cc1']->value['centrocustos_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cc1']->value['centrocustos_id'];?>
</a></td>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['s_type']->value=="user"){?>
        <td class="left"><?php echo $_smarty_tpl->tpl_vars['cc1']->value['centrocustos_id'];?>
</td>
      <?php }?>
      <td class="left"><?php echo $_smarty_tpl->tpl_vars['cc1']->value['nome_curto'];?>
</td>
      <td class="center"><?php echo $_smarty_tpl->tpl_vars['cc1']->value['descricao'];?>
</td>
    </tr>
  <?php } ?>
  </table>

  <p>[<a class="navtext" href="list_page.php">Paginar</a>]</p>

  <?php if ($_smarty_tpl->tpl_vars['s_type']->value=="admin"||$_smarty_tpl->tpl_vars['s_type']->value=="staff"){?>
    <p>[<a class="navtext" href="insert.php">Inserir</a>]</p>
  <?php }?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>