<?php /* Smarty version 3.1.27, created on 2018-06-18 02:22:20
         compiled from "C:\xampp\htdocs\7\2.1\styles\templates\public\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:237095b26fb3cd97b01_95273177%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baba8c3602b817157905b97296502ac0a83a08ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\7\\2.1\\styles\\templates\\public\\login.tpl',
      1 => 1526861618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237095b26fb3cd97b01_95273177',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b26fb3cee7a01_00782425',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b26fb3cee7a01_00782425')) {
function content_5b26fb3cee7a01_00782425 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '237095b26fb3cd97b01_95273177';
?>

<?php echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


 <body>

	<?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<center>

		<div class="container" style="margin-top: 100px;">


			<div class="form-signin" style="width: 400px;">
				<div id="Ajax_">


				</div>
				<h2 class="form-signin-heading">Inicia Sesión</h2>
				<label for="inputEmail" class="sr-only">Usuario</label>
				<input type="text" id="usuario" class="form-control" placeholder="Introduce Usuario" required="" autofocus="">
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" id="pass" class="form-control" placeholder="Password" required="">
				<div class="checkbox">
					<label>
						<input type="checkbox"  id="session" value="1"> Recordarme
					</label>
				</div>
				<button id="enviar_respuesta" class="btn btn-lg btn-primary btn-block" type="button">Iniciar Sesion</button>
			</div>
		</div>
	</center> 
	<?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<?php echo '<script'; ?>
>
		window.onload = function(){
			document.getElementById('enviar_respuesta').onclick = function(){
				var connect, user, pass, session, form, result;
				user = document.getElementById('usuario').value;
				pass = document.getElementById('pass').value;
				session = document.getElementById('session').checked? true:false;

		                //comprueba si los campos estan llenos
		                if(user != '' && pass != ''){
		                	form = 'user='+user+ '&pass=' + pass + '&session=' + session;
		                	connect = window.XMLHttpRequest ? new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
		                	connect.onreadystatechange = function() {
		                		if(connect.readyState == 4 && connect.status == 200){
		                			//el estado que debe tener al devolver algo el servidor es 1
		                			if ((connect.responseText) == 1) {
		                				result = '<div class="alert alert-dismissible alert-success">';
		                				result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		                				result += '<strong> Te estamos redireccionando </strong><a href="#" class="alert-link"></a>.';
		                				result += '</div>';
		                				location.href='?view=index';
		                				document.getElementById('Ajax_').innerHTML = connect.responseText;
		                			}else{
		                				console.log(connect.responseText);
		                				result = '<div class="alert alert-dismissible alert-success">';
		                				result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		                				result += '<strong>Datos incorrectos</strong><a href="#" class="alert-link"></a>.';
		                				result += '</div>';
		                				document.getElementById('Ajax_').innerHTML = result;
		                			}

		                		}else if(connect.readyState != 4){
		                			result = '<div class="alert alert-dismissible alert-success">';
		                			result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		                			result += '<strong> Procesando... </strong><a href="#" class="alert-link"></a>.';
		                			result += '</div>';
		                			document.getElementById('Ajax_').innerHTML = result;
		                		}
		                	}
		                	connect.open('POST', '?view=login',true);
		                	connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		                	connect.send(form);


		                }else{
		                	//muestra error alguno o todos los campos estan vacios
		                	result = '<div class="alert alert-dismissible alert-success">';
		                	result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		                	result += '<strong> Debes llenar todos los campos </strong><a href="#" class="alert-link"></a>.';
		                	result += '</div>';


		                	document.getElementById('Ajax_').innerHTML = result;       
		                }


		            }
		        }
		    <?php echo '</script'; ?>
>
		</body>
		</html>




<?php }
}
?>