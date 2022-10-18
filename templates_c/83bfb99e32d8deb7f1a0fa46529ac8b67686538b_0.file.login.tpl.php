<?php
/* Smarty version 4.2.1, created on 2022-10-18 01:48:39
  from 'D:\xampp\htdocs\TPE-web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634de9d78a09d8_06329734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83bfb99e32d8deb7f1a0fa46529ac8b67686538b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPE-web2\\templates\\login.tpl',
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
function content_634de9d78a09d8_06329734 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:secondDegree/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="form small">
    <form action='verify' method='post'>

        <label for='email'>Email</label>
        <input type='email' name='email' id='email'>

        <label for='password'>Password</label>
        <input type='Password' name='password' id='password'>

        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        <?php }?>
        <input type='submit' value='Iniciar Sesion'>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:secondDegree/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
