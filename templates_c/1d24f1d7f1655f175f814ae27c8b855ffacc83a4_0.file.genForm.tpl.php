<?php
/* Smarty version 4.2.1, created on 2022-10-18 01:51:20
  from 'D:\xampp\htdocs\TPE-web2\templates\secondDegree\genForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dea78ec2b19_26124268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d24f1d7f1655f175f814ae27c8b855ffacc83a4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPE-web2\\templates\\secondDegree\\genForm.tpl',
      1 => 1666045154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634dea78ec2b19_26124268 (Smarty_Internal_Template $_smarty_tpl) {
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
