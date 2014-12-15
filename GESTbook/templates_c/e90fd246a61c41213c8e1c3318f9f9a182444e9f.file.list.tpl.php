<?php /* Smarty version Smarty-3.1.5, created on 2014-12-14 19:12:12
         compiled from "../templates/mycentrocusto/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296481785548b222e9ede69-26289135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e90fd246a61c41213c8e1c3318f9f9a182444e9f' => 
    array (
      0 => '../templates/mycentrocusto/list.tpl',
      1 => 1418580725,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296481785548b222e9ede69-26289135',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548b222eaf4f6',
  'variables' => 
  array (
    's_type' => 0,
    'mycentrocustos' => 0,
    'cc1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548b222eaf4f6')) {function content_548b222eaf4f6($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="user"){?>
  <center><h1>Os Meus Centros de Custos</h1></center>

  <table>
    <tr>
      <th class="left">#ID</th>
      <th class="left">Nome Curto</th>
      <th class="center">Descrição</th>
    </tr>
  <?php  $_smarty_tpl->tpl_vars['cc1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cc1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mycentrocustos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cc1']->key => $_smarty_tpl->tpl_vars['cc1']->value){
$_smarty_tpl->tpl_vars['cc1']->_loop = true;
?>
    <tr>
      <td class="left"><a href="get.php?id=<?php echo $_smarty_tpl->tpl_vars['cc1']->value['centrocustos_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cc1']->value['centrocustos_id'];?>
</a></td>
      <td class="left"><?php echo $_smarty_tpl->tpl_vars['cc1']->value['nome_curto'];?>
</td>
      <td class="center"><?php echo $_smarty_tpl->tpl_vars['cc1']->value['descricao'];?>
</td>
    </tr>
  <?php } ?>
  </table>

  <p>[<a class="navtext" href="insert.php">Criar Centro de Custos</a>]
     [<a class="navtext" href="../centrocusto/list.php">Ver Centros de Custos Existentes</a>]</p>
  <p>[<a class="navtext" href="list_emprestimos.php">Ver Empréstimos</a>]</p>
  <p>[<a class="navtext" href="list_page.php">Paginar</a>]</p>
  
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>