<?php
/* Smarty version 3.1.33, created on 2020-09-25 15:59:17
  from 'module:pagofacilviewstemplatesfr' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f6e5a253960e7_43838075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9712902715dd3ddee1d0e4c6efb7f8afd6d150f4' => 
    array (
      0 => 'module:pagofacilviewstemplatesfr',
      1 => 1600885835,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6e5a253960e7_43838075 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" id="pagofacil" method="POST">

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
	
        <input id="idSucursal" name="idSucursal" type="hidden" value="<?php echo htmlspecialchars(Configuration::get('PF_API_BRANCH'), ENT_QUOTES, 'UTF-8');?>
">
        <input id="monto" name="monto" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total']->value, ENT_QUOTES, 'UTF-8');?>
">
        
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
    	<label for="numeroTarjeta" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Número de Tarjeta'),$_smarty_tpl ) );?>
</label>
		<input type="text" class="form-control input-sm" name="numeroTarjeta" id="numeroTarjeta" required="required" autocomplete="off">
  	</div>

  	<div class="form-group">
    	<label for="mesExpiracion" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fecha Expiración'),$_smarty_tpl ) );?>
</label>
    	<div class="col-md-6">
    		<select name="mesExpiracion" id="mesExpiracion" class="form-control input-sm">
	    		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['meses']->value, 'mes');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mes']->value) {
?>
	    			<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mes']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mes']->value, ENT_QUOTES, 'UTF-8');?>
</option>
	    		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	    	</select>
    	</div>

    	<div class="col-md-6">
    		<select name="anioExpiracion" id="anioExpiracion" class="form-control input-sm">
	    		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['anios']->value, 'anio');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['anio']->value) {
?>
	    			<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['anio']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['anio']->value, ENT_QUOTES, 'UTF-8');?>
</option>
	    		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	    	</select>
    	</div>
  	</div>

  	<div class="form-group">
    	<label for="cvt" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Código de Seguridad'),$_smarty_tpl ) );?>
</label>
		<input type="text" class="form-control input-sm" name="cvt" id="cvt" required="required" autocomplete="off" maxlength="4">
  	</div>

  	<div class="form-group">
    	<label for="email" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>
</label>
		<input type="email" class="form-control input-sm" id="email" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8');?>
" required="required" autocomplete="off">
  	</div>

  	<div class="form-group">
    	<label for="telefono" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Teléfono'),$_smarty_tpl ) );?>
</label>
		<input type="tel" class="form-control input-sm" id="telefono" name="telefono" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['telefono']->value, ENT_QUOTES, 'UTF-8');?>
" required="required" maxlength="10" autocomplete="off">
  	</div>

  	<div class="form-group">
    	<label for="celular" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Celular'),$_smarty_tpl ) );?>
</label>
		<input type="tel" class="form-control input-sm" id="celular" name="celular" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['celular']->value, ENT_QUOTES, 'UTF-8');?>
" required="required" maxlength="10" autocomplete="off">
  	</div>

  	<div class="form-group">
    	<label for="calleyNumero" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Calle - Número'),$_smarty_tpl ) );?>
</label>
		<input type="text" class="form-control input-sm" id="calleyNumero" name="calleyNumero" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['calleyNumero']->value, ENT_QUOTES, 'UTF-8');?>
" required="required" autocomplete="off">
  	</div>

  	<div class="form-group">
    	<label for="colonia" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Colonia'),$_smarty_tpl ) );?>
</label>
		<input type="text" class="form-control input-sm" name="colonia" id="colonia" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['colonia']->value, ENT_QUOTES, 'UTF-8');?>
" required="required" autocomplete="off">
  	</div>

  	<div class="form-group">
    	<label for="municipio" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delegación/Municipio'),$_smarty_tpl ) );?>
</label>
		<input type="text" class="form-control input-sm" name="municipio" id="municipio" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['municipio']->value, ENT_QUOTES, 'UTF-8');?>
" required="required" autocomplete="off">
  	</div>

  	<div class="form-group">
    	<label for="estado" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Estado'),$_smarty_tpl ) );?>
</label>
		<input type="text" class="form-control input-sm" name="estado" id="estado" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['estado']->value, ENT_QUOTES, 'UTF-8');?>
" required="required" autocomplete="off">
  	</div>

  	<div class="form-group">
    	<label for="pais" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'País'),$_smarty_tpl ) );?>
</label>
		<input type="text" class="form-control input-sm" name="pais" id="pais" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pais']->value, ENT_QUOTES, 'UTF-8');?>
" required="required" autocomplete="off">
  	</div>

  	<div class="form-group">
    	<label for="cp" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Código Postal'),$_smarty_tpl ) );?>
</label>
		<input type="text" class="form-control input-sm" name="cp" id="cp" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp']->value, ENT_QUOTES, 'UTF-8');?>
" required="required" maxlength="5">
  	</div>

  	<?php if ($_smarty_tpl->tpl_vars['installments']->value == true) {?>
	  	<div class="form-group">
	    	<label for="select_msi" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Meses sin intereses'),$_smarty_tpl ) );?>
</label>
	    	<select name="select_msi" id="select_msi" class="form-control input-sm">
	    		<option value="00">Seleccione</option>
		        <optgroup label="MasterCard/Visa"></optgroup>
		        <option value="03">3 Meses</option>
		        <option value="06">6 Meses</option>
				<option value="09">9 Meses</option>
		        <option value="12">12 Meses</option>
		        <optgroup label="American Express"></optgroup>
		        <option value="03">3 Meses</option>
		        <option value="06">6 Meses</option>
		        <option value="09">9 Meses</option>
		        <option value="12">12 Meses</option>
	    	</select>
	  	</div>
  	<?php }?>

    <div class="alert alert-warning">
        <strong>*Todos los campos son obligatorios</strong>
    </div>
</form><?php }
}
