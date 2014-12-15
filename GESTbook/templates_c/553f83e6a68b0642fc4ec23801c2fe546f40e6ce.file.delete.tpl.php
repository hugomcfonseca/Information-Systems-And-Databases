<?php /* Smarty version Smarty-3.1.5, created on 2014-12-11 02:41:32
         compiled from "../templates/funcionarios/delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20557081115488f64cb108e4-78840449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '553f83e6a68b0642fc4ec23801c2fe546f40e6ce' => 
    array (
      0 => '../templates/funcionarios/delete.tpl',
      1 => 1418173544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20557081115488f64cb108e4-78840449',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee' => 0,
    's_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5488f64cc229e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5488f64cc229e')) {function content_5488f64cc229e($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


  <h1>Remover Funcionário</h1>

  <ul>
    <li><strong>E-mail:</strong> <?php echo $_smarty_tpl->tpl_vars['employee']->value['email'];?>
</li>
  </br> </br>
  <li><strong>NIF:</strong> <?php echo $_smarty_tpl->tpl_vars['employee']->value['nif'];?>
</li>
  </br> </br>
    <li><strong>Nome:</strong> <?php echo $_smarty_tpl->tpl_vars['employee']->value['nome'];?>
</li>
  </br> </br>
  <li><strong>Tipo:</strong> <?php echo $_smarty_tpl->tpl_vars['employee']->value['tipo'];?>
</li>
  </br> </br>
  <li><strong>Categoria:</strong> <?php echo $_smarty_tpl->tpl_vars['employee']->value['categoria'];?>
</li>
  </br> </br>
    <li><strong>Telefone:</strong> <?php echo $_smarty_tpl->tpl_vars['employee']->value['telefone'];?>
</li>
  </br> </br>
  <li><strong>Morada:</strong> <?php echo $_smarty_tpl->tpl_vars['employee']->value['morada'];?>
</li>
  </br> </br>
  <li><strong>Passe:</strong> <?php echo $_smarty_tpl->tpl_vars['employee']->value['pass'];?>
</li>
  </ul>

<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="admin"){?>
  <p>Tem a certeza? 
    [<a class="navtext" href="delete_action.php?id=<?php echo $_smarty_tpl->tpl_vars['employee']->value['user_id'];?>
">Sim</a>]
    [<a class="navtext" href="get.php?id=<?php echo $_smarty_tpl->tpl_vars['employee']->value['user_id'];?>
">Não</a>]
  </p>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>