<?php
/* Smarty version 4.2.1, created on 2022-10-18 01:41:28
  from 'D:\xampp\htdocs\Web_tpe-main\templates\movieForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634de828688e13_63509182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d95fe0cb70fe97ed835f4e82fcdd109a0aa27d5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web_tpe-main\\templates\\movieForm.tpl',
      1 => 1666050086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:secondDegree/header.tpl' => 1,
    'file:secondDegree/footer.tpl' => 1,
  ),
),false)) {
function content_634de828688e13_63509182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:secondDegree/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="form">
<ul class="list-group">
    <form action='<?php if ($_smarty_tpl->tpl_vars['peli']->value) {?> updateMovie <?php } else { ?> createMovie <?php }?>' method='post' enctype="multipart/form-data">

        <?php if ($_smarty_tpl->tpl_vars['peli']->value) {?>
            <input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['peli']->value->id;?>
' name='id' id='id'>
        <?php }?>
        <li class='list-group-item d-block justify-content-between align-items-center'>
        <label for='title'>Titulo</label>
        <input type='text' name='title' id='title' <?php if ($_smarty_tpl->tpl_vars['peli']->value) {?> value='<?php echo $_smarty_tpl->tpl_vars['peli']->value->titulo;?>
' <?php }?>>

        <label for='genero'>Generos</label>
        <select name='genero' id='genero'>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'gen');
$_smarty_tpl->tpl_vars['gen']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gen']->value) {
$_smarty_tpl->tpl_vars['gen']->do_else = false;
?>
            <option value='<?php echo $_smarty_tpl->tpl_vars['gen']->value->id_genero;?>
'><?php echo $_smarty_tpl->tpl_vars['gen']->value->genero;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <label for='title'>Fecha</label>
        <input type='number' name='fecha' id='fecha' <?php if ($_smarty_tpl->tpl_vars['peli']->value) {?> value='<?php echo $_smarty_tpl->tpl_vars['peli']->value->fecha;?>
' <?php }?>>
        
        <input type='submit' value='<?php if ($_smarty_tpl->tpl_vars['peli']->value) {?> modificar <?php } else { ?> agregar <?php }?>'>
        </li>
    </form>

</ul>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:secondDegree/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
