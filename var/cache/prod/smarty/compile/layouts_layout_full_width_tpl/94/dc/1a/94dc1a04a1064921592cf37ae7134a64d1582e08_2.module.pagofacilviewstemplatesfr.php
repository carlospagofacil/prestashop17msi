<?php
/* Smarty version 3.1.33, created on 2020-09-25 16:02:34
  from 'module:pagofacilviewstemplatesfr' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f6e5aea93f657_93097465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94dc1a04a1064921592cf37ae7134a64d1582e08' => 
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
function content_5f6e5aea93f657_93097465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9474450045f6e5aea90d234_58513347', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layout']->value));
}
/* {block "content"} */
class Block_9474450045f6e5aea90d234_58513347 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9474450045f6e5aea90d234_58513347',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section>
    <div class="cart-grid row">
        <div class="cart-grid-body col-md-12">
            <div class="card cart-container">
                <div class="card-block">
                    <h2>Payment Denied!</h2>
                    <hr>
                </div>

                <div class="cart-overview">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="alert alert-danger">
                            	<strong>
                            		<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['params']->value['error']),$_smarty_tpl ) );?>
</h3>
                            	</strong>
                                <hr><br>
                                <?php if (isset($_smarty_tpl->tpl_vars['errors']->value) && count($_smarty_tpl->tpl_vars['errors']->value) > 0) {?>
                                    <ol>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
                                            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ol>
                                <?php }?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                        	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-lg btn-success">
                        		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Intentar Nuevamente'),$_smarty_tpl ) );?>

                        	</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}
}
/* {/block "content"} */
}
