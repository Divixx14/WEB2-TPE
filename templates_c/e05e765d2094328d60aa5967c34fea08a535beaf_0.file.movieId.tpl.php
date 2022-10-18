<?php
/* Smarty version 4.2.1, created on 2022-10-17 22:27:49
  from 'D:\xampp\htdocs\Web_tpe-main\templates\movieId.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dbac57e0a27_07417964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e05e765d2094328d60aa5967c34fea08a535beaf' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web_tpe-main\\templates\\movieId.tpl',
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
function content_634dbac57e0a27_07417964 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:secondDegree/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="movieContainer particular">
        
            <div class="movieData">
                <img src="<?php echo $_smarty_tpl->tpl_vars['peli']->value->poster;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['peli']->value->titulo;?>
" title="<?php echo $_smarty_tpl->tpl_vars['peli']->value->titulo;?>
">
                <div class="dataContainer">
                    <h3 class="data"><?php echo $_smarty_tpl->tpl_vars['peli']->value->titulo;?>
</h3>
                    <h4 class="data">Genero: <?php echo $_smarty_tpl->tpl_vars['peli']->value->genero;?>
</h4>
                    <h5 class="data">Año: <?php echo $_smarty_tpl->tpl_vars['peli']->value->anio_lanzamiento;?>
</h5>
                    <p class="data"><?php echo $_smarty_tpl->tpl_vars['peli']->value->sinopsis;?>
</p>
                </div>
            </div>
            <div class="btnContainer">
            <button class="btn particular"><a href='home'>Volver</a></button>
        <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?> 
            <button class="btn"><a href='showForm/<?php echo $_smarty_tpl->tpl_vars['peli']->value->id;?>
'>Editar</a></button>
            <button class="btn"><a href='deleteMovie/<?php echo $_smarty_tpl->tpl_vars['peli']->value->id;?>
'>Eliminar</a></button> 
        <?php }?>  
        
        </div>
        </div>

    <?php $_smarty_tpl->_subTemplateRender("file:secondDegree/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
