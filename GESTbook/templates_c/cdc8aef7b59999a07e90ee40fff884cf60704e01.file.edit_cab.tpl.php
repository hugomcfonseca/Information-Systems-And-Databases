<?php /* Smarty version Smarty-3.1.5, created on 2014-12-11 01:07:35
         compiled from "../templates/centrocusto/edit_cab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:331817195488d587686243-25266777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdc8aef7b59999a07e90ee40fff884cf60704e01' => 
    array (
      0 => '../templates/centrocusto/edit_cab.tpl',
      1 => 1418256452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '331817195488d587686243-25266777',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5488d5877c553',
  'variables' => 
  array (
    'cabimentacao1' => 0,
    's_errors' => 0,
    'status' => 0,
    'state' => 0,
    'news1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5488d5877c553')) {function content_5488d5877c553($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


  <h1>Editar Cabimentação</h1>

  <ul>
    <li><strong>ID:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['cabimentacao_id'];?>
</li>
    <li><strong>Estado:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['estado'];?>
</li>
    <li><strong>Descritivo:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['descritivo'];?>
</li>
    <li><strong>Valor Estimado:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['valor_estimado'];?>
</li>
    <li><strong>Data de Pedido:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['data_pedido'];?>
</li>
    <li><strong>Centro de Custos Associado:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['cativa'];?>
</li>
    <li><strong>Funcionário Associado:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['pede'];?>
</li>
    <li><strong>Atividade Envolvida:</strong> <?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['envolve'];?>
</li>
  </ul>

  <form action="edit_action_cab.php" method="post">
    <input type="hidden" name="cabimentacao_id" value="<?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['cabimentacao_id'];?>
" />
    <fieldset>
    <label for="data_decisao">Data de decisão:</label>
    <input type="date" name="data_decisao" id="data_decisao" value="<?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['data_decisao'];?>
" required="required" />
    <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['data_decisao'];?>
</span>
    <br /><br />
    <label for="justificacao_decisao">Justificação da Decisão:</label>
    <textarea rows="5" cols="52"  name="justificacao_decisao" id="justificacao_decisao" required="required"><?php echo $_smarty_tpl->tpl_vars['cabimentacao1']->value['justificacao_decisao'];?>
</textarea>
    <span class="error"><?php echo $_smarty_tpl->tpl_vars['s_errors']->value['justificacao_decisao'];?>
</span>
    <br />
    <label for="estado">Estado:</label>
<?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['status']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value){
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
    <input type="radio" name="estado" id="estado" align="middle"
    value="<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['cabimentacao1']->value==$_smarty_tpl->tpl_vars['news1']->value['estado']){?> checked="checked"<?php }?> required="required"> <?php echo $_smarty_tpl->tpl_vars['state']->value;?>

<?php } ?>
    <p><input type="submit" value="Editar" /></p>
    </fieldset>
  </form>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>