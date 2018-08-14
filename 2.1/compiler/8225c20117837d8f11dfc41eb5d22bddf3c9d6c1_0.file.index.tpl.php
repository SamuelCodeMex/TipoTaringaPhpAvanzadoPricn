<?php /* Smarty version 3.1.27, created on 2018-06-08 16:09:23
         compiled from "C:\xampp\htdocs\7\2.1\styles\templates\home\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:60665b1a8e13b48481_93526530%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8225c20117837d8f11dfc41eb5d22bddf3c9d6c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\7\\2.1\\styles\\templates\\home\\index.tpl',
      1 => 1528466956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60665b1a8e13b48481_93526530',
  'variables' => 
  array (
    'titulo1' => 0,
    'posts' => 0,
    'pt' => 0,
    'pags' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b1a8e14092187_53694273',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b1a8e14092187_53694273')) {
function content_5b1a8e14092187_53694273 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '60665b1a8e13b48481_93526530';
?>
     <?php echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 

    <body>
      
      <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
         <?php echo $_smarty_tpl->getSubTemplate ('overall/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header"><?php echo $_smarty_tpl->tpl_vars['titulo1']->value;?>
</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 65%;">Post</th>
                  <th style="width: 25%;">Autor</th>
                  <th style="width: 5%;">Puntos</th>
                  <th style="width: 5%;">Comentarios</th>
                </tr>
              </thead>
              <tbody>
              <?php if (isset($_smarty_tpl->tpl_vars['posts']->value)) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['pt'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['pt']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pt']->value) {
$_smarty_tpl->tpl_vars['pt']->_loop = true;
$foreach_pt_Sav = $_smarty_tpl->tpl_vars['pt'];
?>
                <tr>
                  <td><a href=""><?php echo $_smarty_tpl->tpl_vars['pt']->value['titulo'];?>
</a></td>
                  <td><a href=""><?php echo $_smarty_tpl->tpl_vars['pt']->value['dueno'];?>
</a></td>
                  <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['pt']->value['puntos'];?>
</td>
                  <td style="text-align: center;">0</td>
                </tr>
                <?php
$_smarty_tpl->tpl_vars['pt'] = $foreach_pt_Sav;
}
?>
              <?php } else { ?>
                  <tr>
                  <td>No hay resultados que mostrar</td>
                  </tr>
              <?php }?>
              </tbody>
            </table>
          </div>
          <?php if (isset($_smarty_tpl->tpl_vars['posts']->value)) {?>
          <center>
          <ul class="pagination">
           <?php if (!isset($_GET['pag'])) {?>
              <li><a>Anterior</a></li>
              <?php if ($_smarty_tpl->tpl_vars['pags']->value > 1) {?>
                <?php if (isset($_GET['type'])) {?>
              <li><a href="?view=index&type=<?php echo $_GET['type'];?>
&pag=2">siguiente</a></li>
                <?php } elseif (isset($_GET['view']) && $_GET['view'] == 'buscar') {?>
                <li><a href="?view=buscar&pag=2">siguiente</a></li>
                <?php } else { ?>
              <li><a href="?view=index&pag=2">siguiente</a></li>
                <?php }?>
              <?php } else { ?>
                  <li><a>siguiente</a></li>
              <?php }?> <!-- fin del isset $pags-->
            
           <?php } else { ?>
             <?php if ($_GET['pag'] <= 1) {?>
             <li><a>Anterior</a></li>
             <?php } else { ?>
                <?php if (isset($_GET['type'])) {?>
             <li><a href="?view=index&type=<?php echo $_GET['type'];?>
&pag=<?php echo $_GET['pag']-1;?>
">Anterior</a></li>
                <?php } elseif (isset($_GET['view']) && $_GET['view'] == 'buscar') {?>
                <li><a href="?view=buscar&pag=<?php echo $_GET['pag']-1;?>
">Anterior</a></li>
                <?php } else { ?>
             <li><a href="?view=index&pag=<?php echo $_GET['pag']-1;?>
">Anterior</a></li>   
                <?php }?>
             <?php }?> 
             <?php if ($_smarty_tpl->tpl_vars['pags']->value > 1 && $_GET['pag'] >= 1 && $_GET['pag'] < $_smarty_tpl->tpl_vars['pags']->value) {?>
                <?php if (isset($_GET['type'])) {?>
             <li><a href="?view=index&type=<?php echo $_GET['type'];?>
&pag=<?php echo $_GET['pag']+1;?>
">Siguiente</a></li>
                <?php } elseif (isset($_GET['view']) && $_GET['view'] == 'buscar') {?>
                <li><a href="?view=buscar&pag=<?php echo $_GET['pag']+1;?>
">Siguiente</a></li>
                <?php } else { ?>
             <li><a href="?view=index&pag=<?php echo $_GET['pag']+1;?>
">Siguiente</a></li>
                <?php }?>    
             <?php } else { ?>
             <li><a href="">Siguiente</a></li>
             <?php }?>
           <?php }?> <!-- smarty.pag definida -->
          
          <!-- <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li> -->

          </ul>
          </center>
          <?php }?> <!-- fin del isset $posts-->
          </div>
      </div>
    </div>      

<?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

   </body>
</html>       <?php }
}
?>