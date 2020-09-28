<?php
/* Smarty version 3.1.33, created on 2020-09-25 15:57:37
  from 'C:\wamp64\www\prestashop17pf\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f6e59c1b24373_92469003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7283cedfa8c89466639b6edf3092318956c929de' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop17pf\\themes\\classic\\templates\\page.tpl',
      1 => 1598884011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6e59c1b24373_92469003 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16012354785f6e59c1afb9d9_67673418', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_4190137865f6e59c1b00091_91863796 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_11048011595f6e59c1afd908_08573224 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4190137865f6e59c1b00091_91863796', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_661561085f6e59c1b168d2_60317582 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_16800594675f6e59c1b194c3_28942961 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_11709344935f6e59c1b149c5_65741043 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_661561085f6e59c1b168d2_60317582', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16800594675f6e59c1b194c3_28942961', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_15582393675f6e59c1b1f757_36719909 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_11680732095f6e59c1b1d925_69437512 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15582393675f6e59c1b1f757_36719909', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_16012354785f6e59c1afb9d9_67673418 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16012354785f6e59c1afb9d9_67673418',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_11048011595f6e59c1afd908_08573224',
  ),
  'page_title' => 
  array (
    0 => 'Block_4190137865f6e59c1b00091_91863796',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_11709344935f6e59c1b149c5_65741043',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_661561085f6e59c1b168d2_60317582',
  ),
  'page_content' => 
  array (
    0 => 'Block_16800594675f6e59c1b194c3_28942961',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_11680732095f6e59c1b1d925_69437512',
  ),
  'page_footer' => 
  array (
    0 => 'Block_15582393675f6e59c1b1f757_36719909',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11048011595f6e59c1afd908_08573224', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11709344935f6e59c1b149c5_65741043', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11680732095f6e59c1b1d925_69437512', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
