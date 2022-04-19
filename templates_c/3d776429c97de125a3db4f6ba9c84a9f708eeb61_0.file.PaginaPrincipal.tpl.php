<?php
/* Smarty version 4.0.4, created on 2022-04-19 05:07:16
  from 'C:\xampp\htdocs\Tienda_Ropa\templates\PaginaPrincipal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_625e27646b56c1_86279273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d776429c97de125a3db4f6ba9c84a9f708eeb61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda_Ropa\\templates\\PaginaPrincipal.tpl',
      1 => 1650337634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_625e27646b56c1_86279273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="navbar-fixed">
      <nav>
        <nav class="pink darken-1">
          <a href="" class="brand-logo">👜 Top Moda </a>
        </nav>
      </nav>
    </div>

    <div align="center">
    <h3>Vestidos</h3>
    </div>
    
    <div class="row">
    <div class="col s12 m6">
      <div class="card blue- amber lighten-4">
        <div class="card-content black-text">
        <div align="center">
        <img class="materialboxed" width="300" src="images/vestido1.jpg">
        </div>
          <span class="card-title">Style Country</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col s10 m6">
      <div class="card blue- amber lighten-4">
        <div class="card-content black-text">
        <div align="center">
        <img class="materialboxed" width="300" src="images/vestido2.jpg">
        </div>
          <span class="card-title">Style Country</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col s10 m6">
      <div class="card blue- amber lighten-4">
        <div class="card-content black-text">
        <div align="center">
        <img class="materialboxed" width="300" src="images/vestido3.png">
        </div>
          <span class="card-title">Style Country</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
  </div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
