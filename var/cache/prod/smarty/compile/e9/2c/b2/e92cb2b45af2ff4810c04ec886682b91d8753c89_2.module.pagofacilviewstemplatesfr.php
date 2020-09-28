<?php
/* Smarty version 3.1.33, created on 2020-09-25 16:04:52
  from 'module:pagofacilviewstemplatesfr' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f6e5b74f35302_98098683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e92cb2b45af2ff4810c04ec886682b91d8753c89' => 
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
function content_5f6e5b74f35302_98098683 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['type']->value != 'cash') {?>
<h2>Su pago ha sido procesado exitosamente con <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value, ENT_QUOTES, 'UTF-8');?>
</h2>
<hr>
<?php }?>

<div class="row">
    <?php if ($_smarty_tpl->tpl_vars['type']->value == 'tp') {?>
    <div class="col-md-6">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <th class="text-center">Descripción</th>
                    <th class="text-center">Dato</th>
                </thead>
                <tbody>
                    <tr>
                        <td>No. Transacción</td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['transaction']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    </tr>
                    <tr>
                        <td>No. Autorización</td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_authorization']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    </tr>
                    <tr>
                        <td>Descripción</td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    </tr>
                    <tr>
                        <td>Mensaje</td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    </tr>
                    <tr>
                        <td>Total Pagado</td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    </tr>
                    <tr>
                        <td>Tienda</td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    </tr>
                    <tr>
                        <td>Orden</td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_order']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['type']->value == 'cash') {?>
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-title">
                <h3>¡Felicitaciones! Su pedido ha sido generado correctamente, 
                verifica la orden de pago en tu e-mail.</h3>
                <hr>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            <strong>
                                <i>Seguir los siguientes pasos:</i>
                            </strong>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p class="text-danger text-right">
                            <strong>
                                Último día para pagar <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['expiration_payment']->value, ENT_QUOTES, 'UTF-8');?>
</i>
                            </strong>
                        </p>
                    </div>
                </div>
                <hr>
                <ol>
                    <li>
                        <p>Ir a la caja <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['convenience_store']->value, ENT_QUOTES, 'UTF-8');?>
 de <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_schedule']->value, ENT_QUOTES, 'UTF-8');?>
</p>
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_image']->value, ENT_QUOTES, 'UTF-8');?>
" alt="PagoFácil">
                    </li>
                    <li>
                        <p>Solicitar depósito a cuenta (debito): <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bank']->value, ENT_QUOTES, 'UTF-8');?>
</strong> 
                        - <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bank_account_number']->value, ENT_QUOTES, 'UTF-8');?>
</strong></p>
                    </li>
                    <li>
                        <p>Deposita la cantidad <strong>EXACTA</strong> de: <strong>$<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total']->value, ENT_QUOTES, 'UTF-8');?>
</strong></p>
                    </li>
                </ol>
                <hr>

                <div class="alert alert-info">
                    <h3>
                        <strong>Importante</strong>
                    </h3>
                    <ul style="list-style-type:disc; padding-left: 5%;">
                        <li>El ID de control es: <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reference']->value, ENT_QUOTES, 'UTF-8');?>
</strong></li>
                        <li>El número de cuenta/tarjeta asignado es único por cada orden de compra.</li>
                        <li>
                            Orden válida antes de <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['expiration_date']->value, ENT_QUOTES, 'UTF-8');?>
</strong>, 
                            en caso de vencimiento genera una nueva compra.
                        </li>
                        <?php if (isset($_smarty_tpl->tpl_vars['store_fixed_rate']->value) && $_smarty_tpl->tpl_vars['store_fixed_rate']->value != '') {?>
                        <li>
                            <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['convenience_store']->value, ENT_QUOTES, 'UTF-8');?>
</strong> cobra en caja una comisión de 
                            <strong>$ <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_fixed_rate']->value, ENT_QUOTES, 'UTF-8');?>
</strong> por el concepto de recepción de cobranza.
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
</div><?php }
}
