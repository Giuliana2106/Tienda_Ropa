<?php
/* Smarty version 4.0.4, created on 2022-04-18 20:27:21
  from 'C:\xampp\htdocs\Tienda_Ropa\templates\Cabeceras\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_625dad8916dbe1_14878076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02ec117dc2392ed00b90fb7e37854dafc4435199' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda_Ropa\\templates\\Cabeceras\\Header.tpl',
      1 => 1650305600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625dad8916dbe1_14878076 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Framework/Materialize/css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>
      <?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

      <?php } else { ?>
        Inicio de Sesión
      <?php }?>
      </title>
    </head>

    <body> <?php }
}
