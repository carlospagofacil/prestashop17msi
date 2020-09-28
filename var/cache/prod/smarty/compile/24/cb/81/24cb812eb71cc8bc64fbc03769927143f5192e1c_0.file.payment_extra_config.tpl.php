<?php
/* Smarty version 3.1.33, created on 2020-09-25 15:57:30
  from 'C:\wamp64\www\prestashop17pf\modules\pagofacil\views\templates\admin\payment_extra_config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f6e59baf25889_30896468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24cb812eb71cc8bc64fbc03769927143f5192e1c' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop17pf\\modules\\pagofacil\\views\\templates\\admin\\payment_extra_config.tpl',
      1 => 1598909086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6e59baf25889_30896468 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
	<div class="col-md-12">
		<div class="alert alert-info">
			<strong>
				Ingresa a tu <a href="<?php echo $_smarty_tpl->tpl_vars['manager_link']->value;?>
" target="_blank">configuración</a> en el panel de PagoFácil.net
				y agrega la siguiente url a tus Webhooks. <?php echo $_smarty_tpl->tpl_vars['link_webhook']->value;?>

			</strong>
		</div>
	</div>
</div><?php }
}
