<?php /* Smarty version Smarty-3.1.5, created on 2014-12-14 15:51:53
         compiled from "../templates/mycentrocusto/insert_emprestimo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:806090500548cca1b8f7ce2-52704627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d0c468fbdbfe42f9f1d4341907a63e9846945c3' => 
    array (
      0 => '../templates/mycentrocusto/insert_emprestimo.tpl',
      1 => 1418568696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '806090500548cca1b8f7ce2-52704627',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548cca1b9cb10',
  'variables' => 
  array (
    's_type' => 0,
    'centrocustos' => 0,
    'cc' => 0,
    'financia' => 0,
    's_errors' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548cca1b9cb10')) {function content_548cca1b9cb10($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="user"){?>
  <h1>Inserir Emprestimo</h1>

    <form action="insert_action_emprestimo.php" method="post">
    <fieldset>

    <label for="financiado">A financiar:</label>
    <select name="financiado" id="financiado">
    <?php  $_smarty_tpl->tpl_vars['cc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['centrocustos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cc']->key => $_smarty_tpl->tpl_vars['cc']->value){
$_smarty_tpl->tpl_vars['cc']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['cc']->value['centrocustos_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['financia']->value['financiado']==$_smarty_tpl->tpl_vars['cc']->value['centrocustos_id']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['cc']->value['nome_curto'];?>
 (ID: <?php echo $_smarty_tpl->tpl_vars['cc']->value['centrocustos_id'];?>
) 
    <?php } ?>
    </select>
    <br /></br>

    <label for="financiador">Financiador:</label>
    <select name="financiador" id="financiador">
    <?php  $_smarty_tpl->tpl_vars['cc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['centrocustos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cc']->key => $_smarty_tpl->tpl_vars['cc']->value){
$_smarty_tpl->tpl_vars['cc']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['cc']->value['centrocustos_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['financia']->value['financiador']==$_smarty_tpl->tpl_vars['cc']->value['centrocustos_id']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['cc']->value['nome_curto'];?>
 (ID: <?php echo $_smarty_tpl->tpl_vars['cc']->value['centrocustos_id'];?>
) 
    <?php } ?>
    </select>
    <br /></br>

    <label for="descritivo">Descrição:</label>
    <input type="text" name="descritivo" id="descritivo" value="" required="required" size="70" />
    <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['descritivo'];?>
</span>
    </br> </br>

    <label for="montante">Montante:</label>
    <input type="text" name="montante" id="montante" value="" required="required" size="30" />
    <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['montante'];?>
</span>
    </br> </br>
    
    <label for="data">Data:</label>
    <input type="date" id="data" name="data" required="required">
    <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['data'];?>
</span>
    </br> </br>
    
    <p><input type="submit" value="Inserir" /></p>
     <p>[<a class="navtext" href="list_emprestimos.php">Retroceder</a>] 
  </p>
    </fieldset>
  </form>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>