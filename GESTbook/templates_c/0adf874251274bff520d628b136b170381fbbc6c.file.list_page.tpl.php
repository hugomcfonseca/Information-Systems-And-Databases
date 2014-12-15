<?php /* Smarty version Smarty-3.1.5, created on 2014-12-14 19:03:48
         compiled from "../templates/centrocusto/list_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10312988505484c4a52b8221-10449955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0adf874251274bff520d628b136b170381fbbc6c' => 
    array (
      0 => '../templates/centrocusto/list_page.tpl',
      1 => 1418580218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10312988505484c4a52b8221-10449955',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5484c4a538629',
  'variables' => 
  array (
    's_type' => 0,
    'centrocustos' => 0,
    'cc1' => 0,
    'npage' => 0,
    'limit' => 0,
    'nrows' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5484c4a538629')) {function content_5484c4a538629($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="admin"||$_smarty_tpl->tpl_vars['s_type']->value=="user"||$_smarty_tpl->tpl_vars['s_type']->value=="staff"){?>
  <h1>Listar Centros de Custos</h1>

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

  <p>
  <?php if ($_smarty_tpl->tpl_vars['npage']->value>1){?>
    [<a class="navtext" href="list_page.php?page=<?php echo $_smarty_tpl->tpl_vars['npage']->value-1;?>
">Prev</a>] | 
  <?php }?>
    [<span class="navtext"><?php echo $_smarty_tpl->tpl_vars['npage']->value;?>
</span>]
  <?php if ($_smarty_tpl->tpl_vars['npage']->value*$_smarty_tpl->tpl_vars['limit']->value<=$_smarty_tpl->tpl_vars['nrows']->value){?>
    [<a class="navtext" href="list_page.php?page=<?php echo $_smarty_tpl->tpl_vars['npage']->value+1;?>
">Next</a>]
  <?php }?>
  </p>

  <?php if ($_smarty_tpl->tpl_vars['s_type']->value=="admin"||$_smarty_tpl->tpl_vars['s_type']->value=="staff"){?>
    <p>[<a class="navtext" href="insert.php">Inserir</a>]</p>
  <?php }?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>