<?php /* Smarty version Smarty-3.1.5, created on 2014-12-15 19:11:24
         compiled from "../templates/atividade/get.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3764903835485c59c40f973-59190985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1165624830718708803df87febfc9ebac825e38' => 
    array (
      0 => '../templates/atividade/get.tpl',
      1 => 1418665794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3764903835485c59c40f973-59190985',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5485c59c4ef5f',
  'variables' => 
  array (
    's_user' => 0,
    'atividade' => 0,
    's_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5485c59c4ef5f')) {function content_5485c59c4ef5f($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php if ($_smarty_tpl->tpl_vars['s_user']->value){?>
  <center><h1>Ver Atividade</h1></center>

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

  <p>[<a class="navtext" href="get.php?id=<?php echo $_smarty_tpl->tpl_vars['atividade']->value['atividade_id']-1;?>
">Anterior</a>] 
     [<a class="navtext" href="get.php?id=<?php echo $_smarty_tpl->tpl_vars['atividade']->value['atividade_id']+1;?>
">Próxima</a>] 
     [<a class="navtext" href="../cabimentacoes/list.php?id=<?php echo $_smarty_tpl->tpl_vars['atividade']->value['atividade_id'];?>
">Ver Cabimentações</a>]
<?php if ($_smarty_tpl->tpl_vars['s_type']->value!="user"){?>
     [<a class="navtext" href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['atividade']->value['atividade_id'];?>
">Editar</a>] 
     [<a class="navtext" href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['atividade']->value['atividade_id'];?>
">Apagar</a>]
<?php }?>
	[<a class="navtext" href="list.php">Ver lista</a>] 
  </p>
	<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>