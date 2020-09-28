<?php
/* Smarty version 3.1.33, created on 2020-09-25 16:04:46
  from 'C:\wamp64\www\prestashop17pf\pdf\invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f6e5b6e52dee9_79116104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fac1a03220fd451b64b72bbca95b3b9ec79f9aa7' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop17pf\\pdf\\invoice.shipping-tab.tpl',
      1 => 1598883995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6e5b6e52dee9_79116104 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
