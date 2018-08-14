<?php /* Smarty version 3.1.27, created on 2018-06-02 15:25:48
         compiled from "C:\xampp\htdocs\7\2.1\styles\templates\overall\nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:79075b129adcec1585_06215082%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ad1f9f27e7f1e21b86fb7c7fe1fcf9c392edde2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\7\\2.1\\styles\\templates\\overall\\nav.tpl',
      1 => 1527909778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79075b129adcec1585_06215082',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b129adceec505_34182623',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b129adceec505_34182623')) {
function content_5b129adceec505_34182623 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '79075b129adcec1585_06215082';
?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Vista</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <?php if ((isset($_GET['view']) && $_GET['view'] == 'index') || !isset($_GET['view'])) {?>
        <li class="active">
          <?php } else { ?>
          <li>
          <?php }?>
            <a href="?view=index">Inicio </a></li>
        <li><a href="#"></a></li>
        
      </ul>
      <form class="navbar-form navbar-left" role="search" action="?view=buscar" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" name="busqueda" placeholder="Buscar" size="30">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
  <?php if (isset($_SESSION['user'])) {?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
  <?php echo $_SESSION['user'];?>
 
            <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Preferencias</a></li>
            <li><a href="#">Ajustes</a></li>
            <li><a href="?view=logout">Salir</a></li>
          </ul>
        </li>
  <?php } else { ?>
        
           <?php if ((isset($_GET['view'])) && $_GET['view'] == 'login') {?>
           <li class="active">
          <?php } else { ?>
          <li>
          <?php }?> 
           <a href="?view=login">Login</a></li>
           <?php if ((isset($_GET['view'])) && $_GET['view'] == 'regi') {?>
           <li class="active">
          <?php } else { ?>
          <li>
          <?php }?>
          <a href="?view=regi">Registrarme</a></li>
  <?php }?>
      </ul>
    </div>
  </div>
</nav><?php }
}
?>