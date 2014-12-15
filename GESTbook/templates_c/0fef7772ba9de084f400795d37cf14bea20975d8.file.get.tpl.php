<?php /* Smarty version Smarty-3.1.5, created on 2014-12-13 02:07:23
         compiled from "../templates/funcionarios/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15447204205485c309b5f478-98726636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fef7772ba9de084f400795d37cf14bea20975d8' => 
    array (
      0 => '../templates/funcionarios/get.tpl',
      1 => 1418432841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15447204205485c309b5f478-98726636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5485c309c43e2',
  'variables' => 
  array (
    'funcionario' => 0,
    's_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5485c309c43e2')) {function content_5485c309c43e2($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 
  <h1>Ver Dados dos utilizadores</h1>

  <ul>
    <li><strong>E-mail:</strong> <?php echo $_smarty_tpl->tpl_vars['funcionario']->value['email'];?>
</li>
	</br> </br>
	<li><strong>NIF:</strong> <?php echo $_smarty_tpl->tpl_vars['funcionario']->value['nif'];?>
</li>
	</br> </br>
    <li><strong>Nome:</strong> <?php echo $_smarty_tpl->tpl_vars['funcionario']->value['nome'];?>
</li>
	</br> </br>
	<li><strong>Tipo:</strong> <?php echo $_smarty_tpl->tpl_vars['funcionario']->value['tipo'];?>
</li>
	</br> </br>
	<li><strong>Categoria:</strong> <?php echo $_smarty_tpl->tpl_vars['funcionario']->value['categoria'];?>
</li>
	</br> </br>
    <li><strong>Telefone:</strong> <?php echo $_smarty_tpl->tpl_vars['funcionario']->value['telefone'];?>
</li>
	</br> </br>
	<li><strong>Morada:</strong> <?php echo $_smarty_tpl->tpl_vars['funcionario']->value['morada'];?>
</li>
	</br> </br>
  </ul>

<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="admin"){?>
  <p>[<a class="navtext" href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['funcionario']->value['user_id'];?>
">Editar</a>] 
     [<a class="navtext" href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['funcionario']->value['user_id'];?>
">Apagar</a>]
	 [<a class="navtext" href="list.php?id=<?php echo $_smarty_tpl->tpl_vars['funcionario']->value['user_id'];?>
">Retroceder</a>]
  </p>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>