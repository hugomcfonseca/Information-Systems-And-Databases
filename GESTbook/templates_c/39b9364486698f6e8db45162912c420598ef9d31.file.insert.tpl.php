<?php /* Smarty version Smarty-3.1.5, created on 2014-12-14 23:52:58
         compiled from "../templates/atividade/insert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10399631635485c598b53aa9-30314610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39b9364486698f6e8db45162912c420598ef9d31' => 
    array (
      0 => '../templates/atividade/insert.tpl',
      1 => 1418596450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10399631635485c598b53aa9-30314610',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5485c598c15eb',
  'variables' => 
  array (
    's_user' => 0,
    'atividade' => 0,
    's_errors' => 0,
    's_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5485c598c15eb')) {function content_5485c598c15eb($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
<?php if ($_smarty_tpl->tpl_vars['s_user']->value){?>
	<center> <h1>Inserir Atividade</h1> </center>

	<form action="insert_action.php" method="post">
    <fieldset>

    <label for="descritivo">Descritivo:</label>
    <textarea rows="5" cols="52" name="descritivo" id="descritivo" required="required"><?php echo $_smarty_tpl->tpl_vars['atividade']->value['descritivo'];?>
</textarea>
    <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['descritivo'];?>
</span>
    </br> </br>
	
	<label for="tipo">Tipo:</label>
	<select name="tipo">
	<option value="Estudantes">Estudantes</option>
	<option value="Eventos">Eventos</option>
	<option value="Pessoais">Pessoais</option>
	<option value="Projetos">Projetos</option>
	</select>
	</br> </br>
	
	<label for="data_inicio">Início:</label>
	<input id="data_inicio" name="data_inicio" type="date">
	</br> </br>
	
	<label for="data_fim">Fim:</label>
	<input id="data_fim" name="data_fim" type="date">
	</br> </br>

    <p><input type="submit" value="Inserir" /></p>

    <?php if ($_smarty_tpl->tpl_vars['s_type']->value!="user"&&$_smarty_tpl->tpl_vars['s_user']->value){?>
 		<p> [<a class="navtext" href="list.php">Retroceder</a>] </p> 
 	<?php }?>
 	<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="user"){?>
 		<p> [<a class="navtext" href="listByMyCC.php">Retroceder</a>] </p> 
 	<?php }?>
    </fieldset>
  </form>	
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>