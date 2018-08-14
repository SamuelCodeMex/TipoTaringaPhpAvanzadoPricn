<?php /* Smarty version 3.1.27, created on 2018-06-08 16:29:17
         compiled from "C:\xampp\htdocs\7\2.1\styles\templates\overall\menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:250425b1a92bd1de208_31488819%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd090a496dd5890607020320777664bd69e382e17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\7\\2.1\\styles\\templates\\overall\\menu.tpl',
      1 => 1528468138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250425b1a92bd1de208_31488819',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b1a92bd26ea89_06579745',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b1a92bd26ea89_06579745')) {
function content_5b1a92bd26ea89_06579745 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '250425b1a92bd1de208_31488819';
?>
    <ul class="nav nav-sidebar">
            <?php if (isset($_GET['view']) && ($_GET['view'] == 'cuenta')) {?>
            <li class="active"><a href="">Tu cuenta</a></li>
            
            <?php }?>
            <?php if (isset($_GET['view']) && ($_GET['view'] == 'buscar')) {?>
            <li class="active"><a href="">Resultado de busqueda</a></li>
            
            <?php }?>

            <?php if (isset($_GET['type']) && $_GET['type'] == 'tops') {?>
            <li class="active">
            <?php } else { ?>
            <li>
            <?php }?>
            <a href="?view=index&type=tops">Los mejores</a></li>
            <?php if ((!isset($_GET['type']) && isset($_GET['view']) && $_GET['view'] == 'index') || (!isset($_GET['view']))) {?>
            <li class="active">
            <?php } else { ?>
            <li>
            <?php }?>  
            <a href="?view=index">Inicio</a></li>
            <?php if (isset($_GET['type']) && $_GET['type'] == '1') {?>
            <li class="active">
            <?php } else { ?>
            <li>
            <?php }?>
            <a href="?view=index&type=1">Categoria 1</a></li>
            <?php if (isset($_GET['type']) && $_GET['type'] == '2') {?>
            <li class="active">
            <?php } else { ?>
            <li>
            <?php }?>
            <a href="?view=index&type=2">Categoria 2</a></li>
            <?php if (isset($_GET['type']) && $_GET['type'] == '3') {?>
            <li class="active">
            <?php } else { ?>
            <li>
            <?php }?>
            <a href="?view=index&type=3">Categoria 3</a></li>
          </ul><?php }
}
?>