<?php
/* Smarty version 4.2.1, created on 2022-10-18 00:19:19
  from 'D:\xampp\htdocs\Web_tpe-main\templates\secondDegree\genForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dd4e7a5d431_13094158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bb3bdc402241a616f9f6b55f1ff5eded06975f9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web_tpe-main\\templates\\secondDegree\\genForm.tpl',
      1 => 1666045154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634dd4e7a5d431_13094158 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form small genre">
    <form action='<?php if ($_smarty_tpl->tpl_vars['genUpdate']->value) {?> updateGen <?php } else { ?> createGen <?php }?>' method='post'>
        <?php if ($_smarty_tpl->tpl_vars['genUpdate']->value) {?>
            <input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['genUpdate']->value->id_genero;?>
' name='id' id='id'>
        <?php }?>
        <label for='newGen'><?php if ($_smarty_tpl->tpl_vars['genUpdate']->value) {?> Modificar <?php } else { ?> Crear <?php }?>  Genero</label>
        <input type='text' name='newGen' id='newGen' <?php if ($_smarty_tpl->tpl_vars['genUpdate']->value) {?> value='<?php echo $_smarty_tpl->tpl_vars['genUpdate']->value->genero;?>
' <?php }?>>

        <input type='submit' value='Guardar' class='btn btn-success'>
    </form>
</div><?php }
}
