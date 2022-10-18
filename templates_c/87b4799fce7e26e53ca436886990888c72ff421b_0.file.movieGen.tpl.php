<?php
/* Smarty version 4.2.1, created on 2022-10-17 23:25:13
  from 'D:\xampp\htdocs\Web_tpe-main\templates\movieGen.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dc839d56777_67432650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87b4799fce7e26e53ca436886990888c72ff421b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web_tpe-main\\templates\\movieGen.tpl',
      1 => 1666041600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:secondDegree/header.tpl' => 1,
    'file:secondDegree/footer.tpl' => 1,
  ),
),false)) {
function content_634dc839d56777_67432650 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:secondDegree/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peliculas']->value, 'peli');
$_smarty_tpl->tpl_vars['peli']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['peli']->value) {
$_smarty_tpl->tpl_vars['peli']->do_else = false;
?>

    <div class="movieContainer">
        <div class="movieData">
            <div class="dataContainer">
                <h3 class="data"><?php echo $_smarty_tpl->tpl_vars['peli']->value->titulo;?>
</h3>
                <h4 class="data">Genero: <?php echo $_smarty_tpl->tpl_vars['peli']->value->genero;?>
</h4>
                <h4 class="data">Fecha: <?php echo $_smarty_tpl->tpl_vars['peli']->value->fecha;?>
</h4>
            </div>
        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender("file:secondDegree/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
