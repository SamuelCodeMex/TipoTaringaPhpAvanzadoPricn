{include 'overall/header.tpl'}

 <body>

	{include 'overall/nav.tpl'}
	<center>

		<div class="container" style="margin-top: 100px;">


			<div class="form-signin" style="width: 400px;">
				<div id="Ajax_">


				</div>
				<h2 class="form-signin-heading">Registro</h2>
				<label for="inputEmail" class="sr-only">Usuario</label>
				<input type="text" id="usuario" class="form-control" placeholder="Introduce Usuario" required="" autofocus="">
				<label for="inputPassword" class="sr-only">Password</label>
				<label for="inputEmail" class="sr-only">Email</label>
				<input type="email" id="email" class="form-control" placeholder="Introduce Email" required="" autofocus="">
				<input type="password" id="pass" class="form-control" placeholder="Password" required="">
				
				<button id="enviar_respuesta" class="btn btn-lg btn-primary btn-block" type="button">Registrarme</button>
			</div>
		</div>
	</center> 
	{include 'overall/footer.tpl'}
	<script>
		window.onload = function(){
			document.getElementById('enviar_respuesta').onclick = function(){
				var connect, user, pass, email, form, result;
				user = document.getElementById('usuario').value;
				pass = document.getElementById('pass').value;
				email = document.getElementById('email').value;

		                //comprueba si los campos estan llenos
		                if(user != '' && pass != '' && email != ''){
		                	enviar = 'user='+user+ '&pass=' + pass + '&email=' + email;
		                	connect = window.XMLHttpRequest ? new XMLHttpRequest(): new ActiveXObject("Microsoft.XMLHTTP");
		                	connect.onreadystatechange = function() {
		                		if(connect.readyState == 4 && connect.status == 200){
		                			//el estado que debe tener al devolver algo el servidor es 1
		                			if ((connect.responseText) == 1) {
		                				result = '<div class="alert alert-dismissible alert-success">';
		                				result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		                				result += '<strong> Registro completado con éxito </strong><a href="#" class="alert-link"></a>.';
		                				result += '</div>';
		                				location.href='?view=index';
		                				console.log(connect.responseText);
		                				document.getElementById('Ajax_').innerHTML = result;
		                			}else if ((connect.responseText) == 2){
		                				result = '<div class="alert alert-dismissible alert-success">';
		                				result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		                				result += '<strong>El usuario ya existe</strong><a href="#" class="alert-link"></a>.';
		                				result += '</div>';
		                				document.getElementById('Ajax_').innerHTML = result;
		                			}else if ((connect.responseText) == 3){
		                				result = '<div class="alert alert-dismissible alert-success">';
		                				result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		                				result += '<strong>El email ya existe</strong><a href="#" class="alert-link"></a>.';
		                				result += '</div>';
		                				console.log(connect.responseText);
		                				document.getElementById('Ajax_').innerHTML = result;
		                			}else{
		                				result = '<div class="alert alert-dismissible alert-success">';
		                				result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		                				result += '<strong>Datos incorrectos</strong><a href="#" class="alert-link"></a>.';
		                				result += '</div>';
		                				console.log(connect.responseText);
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
		                	connect.open('POST', '?view=regi',true);
		                	connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		                	connect.send(enviar);


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
		    </script>
		</body>
		</html>




