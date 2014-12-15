<?php /* Smarty version Smarty-3.1.5, created on 2014-12-15 01:15:16
         compiled from "../templates/operacoes/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:322721008548a15a7205098-16845735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a752370a65d855f80c61427eba5ff4d9cbaef1f7' => 
    array (
      0 => '../templates/operacoes/get.tpl',
      1 => 1418602510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322721008548a15a7205098-16845735',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548a15a72d6e8',
  'variables' => 
  array (
    's_user' => 0,
    'operacao' => 0,
    's_type' => 0,
    'beneficiante_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548a15a72d6e8')) {function content_548a15a72d6e8($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['s_user']->value){?>
  <h1>Ver Operação</h1>

  <ul>
    <li><strong>ID:</strong> <?php echo $_smarty_tpl->tpl_vars['operacao']->value['operacao_id'];?>
</li>
	</br>
    <li><strong>Descritivo:</strong> <?php echo $_smarty_tpl->tpl_vars['operacao']->value['descritivo'];?>
</li>
	</br>
    <li><strong>Tipo de movimento:</strong> <?php echo $_smarty_tpl->tpl_vars['operacao']->value['tipo_movimento'];?>
</li>
	</br>
	<li><strong>Tipo de suporte:</strong> <?php echo $_smarty_tpl->tpl_vars['operacao']->value['tipo_suporte'];?>
</li>
	</br>
	<li><strong>Montante:</strong><?php echo $_smarty_tpl->tpl_vars['operacao']->value['montante'];?>
 €</li>
	</br>
    <li><strong>Data:</strong> <?php echo $_smarty_tpl->tpl_vars['operacao']->value['data'];?>
</li>
	</br>
	<?php if ($_smarty_tpl->tpl_vars['s_user']->value!=null&&$_smarty_tpl->tpl_vars['s_type']->value!="user"){?>
  		<li><strong>Beneficiante:</strong> <a href="../funcionarios/get.php?id=<?php echo $_smarty_tpl->tpl_vars['operacao']->value['beneficiante'];?>
"><?php echo $_smarty_tpl->tpl_vars['beneficiante_name']->value;?>
</a></li> 
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['s_user']->value!=null&&$_smarty_tpl->tpl_vars['s_type']->value=="user"){?>
  		<li><strong>Beneficiante:</strong> <?php echo $_smarty_tpl->tpl_vars['beneficiante_name']->value;?>
</a></li> 
	<?php }?>
	</br>
  </ul>

 <p>[<a class="navtext" href="get.php?id=<?php echo $_smarty_tpl->tpl_vars['operacao']->value['operacao_id']-1;?>
">Anterior</a>] 
    [<a class="navtext" href="get.php?id=<?php echo $_smarty_tpl->tpl_vars['operacao']->value['operacao_id']+1;?>
">Próxima</a>] 
<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="admin"){?>
    [<a class="navtext" href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['operacao']->value['operacao_id'];?>
">Editar</a>] 
<?php }?>
	  [<a class="navtext" href="list.php?id=<?php echo $_smarty_tpl->tpl_vars['operacao']->value['requer'];?>
">Ver lista</a>] 
 </p>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>