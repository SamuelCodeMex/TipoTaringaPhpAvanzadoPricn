<?php
if($_POST or (isset($_SESSION['busqueda']) and isset($_GET['pag']))){
	$template = new Smarty();
    $type = isset($_GET['type'])?$_GET['type']:null;
    $pagina = (isset($_GET['pag']) and is_numeric($_GET['pag']) and ($_GET['pag'] >= 1))?$_GET['pag']:1;
    $db = new Conexion();

//PARA PAGINADO
    $paginado = 5;
    $inicio = ($pagina-1) * $paginado;

    //para que funcione busqueda y haga paginacion
    if (isset($_SESSION['busqueda']) and !isset($_POST['busqueda'])) {
    	$busqueda = $_SESSION['busqueda'];
    }else{
    	$busqueda = $_POST['busqueda'];
    }
    $_SESSION['busqueda'] = $busqueda;
    // fin para que funcione busqueda y haga paginacion
    
    $cantidad = $db->query("SELECT COUNT(*) FROM post WHERE titulo LIKE '%".$busqueda."%'");
    $sql = $db->query("SELECT * FROM post  WHERE titulo LIKE '%".$busqueda."%' ORDER BY id DESC LIMIT ".$inicio.",".$paginado.";");
    $result = $db->recorrer($cantidad);
    $result = $result[0];
    $paginas   = ceil($result/$paginado);
    // echo var_dump($result);
    // die(); 
   
	if($db->rows($sql)>0){
			//sentencias sql preparadas
		$psql = "SELECT user FROM users WHERE id = ?";
		$prepare_sql = $db->prepare($psql);
		$prepare_sql->bind_param('i',$id);

		while($x = $db->recorrer($sql)){
			$id = $x['dueno'];
			$prepare_sql->execute();
			$prepare_sql->bind_result($autor);
			$prepare_sql->fetch();
            
			$posts[] = array(
				'id' => $x['id'],
				'titulo' => $x['titulo'],
				'content' => $x['content'],
				'dueno' => $autor,
				'puntos' => $x['puntos']
			);
		}
	$prepare_sql->close();
	//enviamos a la vista el valor de posts de acuerdo a paginado en este caso sera array asociativo de 5 elementos de acuerdo a paginado
	$template->assign('posts', $posts);		

    	
    
    }

$template->assign('titulo1', 'Resultado de Busqueda');
$db->liberar($sql);
$db->close();

$template->assign('pags', $paginas);
$template->display('home/index.tpl');
    
    // echo $_POST['busqueda'];
}else{

	header('location:?view=index');
	
}

?>