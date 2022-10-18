<?php
/* Smarty version 4.2.1, created on 2022-10-18 01:43:38
  from 'D:\xampp\htdocs\Web_tpe-main\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634de8aa9c4b33_61681895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '742a081451e9c962e4e022dceac5dd7e3bf2be5e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web_tpe-main\\templates\\home.tpl',
      1 => 1666050196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:secondDegree/header.tpl' => 1,
    'file:secondDegree/footer.tpl' => 1,
  ),
),false)) {
function content_634de8aa9c4b33_61681895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:secondDegree/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peliculas']->value, 'peli');
$_smarty_tpl->tpl_vars['peli']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['peli']->value) {
$_smarty_tpl->tpl_vars['peli']->do_else = false;
?>
        <ul class="list-group">
        <div class="movieContainer">
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <div class="movieData">
                <div class="dataContainer">
                <span>
                    <b>Pelicula:</b> <?php echo $_smarty_tpl->tpl_vars['peli']->value->titulo;?>
 -
                    <b>Genero:</b> <?php echo $_smarty_tpl->tpl_vars['peli']->value->genero;?>
 -
                    <b>Fecha:</b> <?php echo $_smarty_tpl->tpl_vars['peli']->value->fecha;?>

                </span>
                </div>
            </div>
        
            <div class="btnContainer">
            <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
                <a href='showForm/<?php echo $_smarty_tpl->tpl_vars['peli']->value->id;?>
' class="btn btn-info">Editar</a>
                <a href='deleteMovie/<?php echo $_smarty_tpl->tpl_vars['peli']->value->id;?>
' class="btn btn-danger">Eliminar</a>
            <?php }?>
            </div>
        </li>
        </div>
        </ul>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender("file:secondDegree/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
