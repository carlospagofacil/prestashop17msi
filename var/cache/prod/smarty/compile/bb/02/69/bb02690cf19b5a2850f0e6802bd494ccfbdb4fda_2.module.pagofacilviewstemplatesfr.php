<?php
/* Smarty version 3.1.33, created on 2020-09-25 15:59:17
  from 'module:pagofacilviewstemplatesfr' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f6e5a25c7cce0_24559504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb02690cf19b5a2850f0e6802bd494ccfbdb4fda' => 
    array (
      0 => 'module:pagofacilviewstemplatesfr',
      1 => 1598909086,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6e5a25c7cce0_24559504 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" id="pagofacilcash" method="POST">

<?php if (count($_smarty_tpl->tpl_vars['errors']->value) > 0) {?>
    <div class="alert alert-danger">
        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Errores'),$_smarty_tpl ) );?>
</h4>
        <hr>
        <ol>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
            <li>
                <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</strong>
            </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
    </div>
<?php }?>
	
	<div class="alert alert-success">
		<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Monto a pagar "."$"." ".((string)$_smarty_tpl->tpl_vars['total']->value)),$_smarty_tpl ) );?>
</strong>
	</div>

	<div class="form-group">
    	<label for="nombre" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Nombre(s)'),$_smarty_tpl ) );?>
</label>
		<input type="text" class="form-control input-sm" name="nombre" id="nombre" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nombre']->value, ENT_QUOTES, 'UTF-8');?>
" required="required">
  	</div>

  	<div class="form-group">
    	<label for="apellidos" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apellidos(s)'),$_smarty_tpl ) );?>
</label>
		<input type="text" class="form-control input-sm" name="apellidos" id="apellidos" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['apellidos']->value, ENT_QUOTES, 'UTF-8');?>
" required="required">
  	</div>

  	<div class="form-group">
    	<label for="email" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>
</label>
		<input type="email" class="form-control input-sm" id="email" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8');?>
" required="required" autocomplete="off">
  	</div>

  	<div class="form-group">
    	<label for="tienda" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tienda'),$_smarty_tpl ) );?>
</label>
    	<select name="tienda" id="tienda" class="form-control input-sm">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stores']->value, 'store');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['store']->value) {
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store']->value['code'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(strtoupper($_smarty_tpl->tpl_vars['store']->value['name']), ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    	</select>
  	</div>

    <div class="alert alert-warning">
        <strong>*Todos los campos son obligatorios</strong>
    </div>
</form><?php }
}
