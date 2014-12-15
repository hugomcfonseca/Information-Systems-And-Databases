<?php /* Smarty version Smarty-3.1.5, created on 2014-12-15 02:11:18
         compiled from "../templates/definicoes_conta/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1579929243548798a7aa5544-88350256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '175bcbec23eacfaf760edd465b3ac34559a8314d' => 
    array (
      0 => '../templates/definicoes_conta/get.tpl',
      1 => 1418604493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1579929243548798a7aa5544-88350256',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548798a7b87ba',
  'variables' => 
  array (
    'funcionario' => 0,
    's_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548798a7b87ba')) {function content_548798a7b87ba($_smarty_tpl) {?>
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
	<li><strong>Password:</strong> ************</li>
  </ul>

<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="user"||$_smarty_tpl->tpl_vars['s_type']->value=="admin"||$_smarty_tpl->tpl_vars['s_type']->value=="staff"){?>
  <p>[<a class="navtext" href="../funcionarios/edit_user.php">Editar</a>]
  </p>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>