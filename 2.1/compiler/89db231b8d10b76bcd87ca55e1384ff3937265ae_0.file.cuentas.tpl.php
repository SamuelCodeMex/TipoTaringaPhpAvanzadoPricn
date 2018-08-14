<?php /* Smarty version 3.1.27, created on 2018-06-09 03:29:57
         compiled from "C:\xampp\htdocs\7\2.1\styles\templates\cuentas\cuentas.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:291915b1b2d956baa82_72673787%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89db231b8d10b76bcd87ca55e1384ff3937265ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\7\\2.1\\styles\\templates\\cuentas\\cuentas.tpl',
      1 => 1528470075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '291915b1b2d956baa82_72673787',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b1b2d957a8f06_24580581',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b1b2d957a8f06_24580581')) {
function content_5b1b2d957a8f06_24580581 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '291915b1b2d956baa82_72673787';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <body>
      
      <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php echo $_smarty_tpl->getSubTemplate ('overall/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">Configuración de tu cuenta</h2>
            <!--<div class="alert alert-success" role="alert">...</div>
            <div class="alert alert-info" role="alert">...</div>
            <div class="alert alert-warning" role="alert">...</div>
            <div class="alert alert-danger" role="alert">...</div>-->
          <div class="form-signin">
            <form action="?view=cuenta" method="POST" enctype="multipart/form-data"><!-- Explicar -->          
            <label>Nombre de Usuario <span style="color: #FF0000">*</span></label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="user" placeholder="Tu nombre de usuario" required="" value="" />
            
             <label>Email <span style="color: #FF0000">*</span></label>
            <input style="margin-bottom: 10px;" type="email" class="form-control" name="email" placeholder="Tu correo electrónico" required="" value="" />  
              
            <label>Fecha de Nacimiento</label>
            <div class="input-group date">
            <input type="text" id="nacimiento" data-date="01-01-2015" data-date-format="dd-mm-yyyy" class="form-control" name="fecha" placeholder="dd-mm-yyyy" aria-describedby="basic-addon2" value="" readonly="">
            <span class="input-group-addon add-on" id="basic-addon2"><i class="fa fa-calendar"></i></span>
            </div>    
                
            <label>Nombres</label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="names" placeholder="Tus nombres" value="" />  
           
             <label>Apellidos</label>
            <input style="margin-bottom: 10px;" type="text" class="form-control" name="lastnames" placeholder="Tus apellidos" value="" />  
          
             
                
           <div class="media">
              <div class="media-left">
                <img class="media-object" src="uploads/avatar/default.png" width="70" height="70" />
              </div>
              <div class="media-body">
                <label>Nueva foto de Perfil</label>
                <input style="margin-bottom: 10px;" type="file" name="foto" class="form-control" /> 
              </div>
            </div>     
                
            <center><input class="btn btn-primary" type="submit" value="Guardar" style="width: 120px;" /></center>
              </form>
          </div>
        </div>
      </div>
    </div>      

<?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php echo '<script'; ?>
>$('#nacimiento').datepicker('place');<?php echo '</script'; ?>
>
   </body>
</html>       <?php }
}
?>