<?php
/* Smarty version 4.2.1, created on 2022-10-17 22:58:55
  from 'D:\xampp\htdocs\Web_tpe-main\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dc20f9f5c78_83832874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '354a7ce2bb543d5f2e69c6f577bafa1a454931ee' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web_tpe-main\\templates\\error.tpl',
      1 => 1666019600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:secondDegree/header.tpl' => 1,
    'file:secondDegree/footer.tpl' => 1,
  ),
),false)) {
function content_634dc20f9f5c78_83832874 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:secondDegree/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="errorMsg">
    <h1>Error</h1>
    <h3><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h3> 
    <p><a href='<?php if ($_smarty_tpl->tpl_vars['url']->value) {?> <?php echo $_smarty_tpl->tpl_vars['url']->value;?>
 <?php } else { ?> home <?php }?>'> Volver </a></p>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:secondDegree/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
