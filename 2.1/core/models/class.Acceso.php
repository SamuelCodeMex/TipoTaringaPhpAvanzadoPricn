<?php
class Acceso{
private $user;
private $pass;
private function Encrypt($string)
{
  $sizeof = strlen($string) - 1;
  $result = '';
  for ($x = $sizeof; $x >= 0; $x--) {
    $result .= $string[$x];
  }
  $result = md5($result);
  return $result;
}
public function Login(){
  try {
    if (!empty($_POST['user']) and !empty($_POST['pass'])){
      $db         = new Conexion();
      $this->user = $db->real_escape_string($_POST['user']);
      $this->pass = $this->Encrypt($_POST['pass']);
      $sql = $db->query("SELECT * FROM users WHERE user='$this->user' AND pass='$this->pass';");
      if ($db->rows($sql) > 0) {
        $datos = $db->recorrer($sql);
                  $_SESSION['id'] = $datos['id']; //Primer dato = POST, segundo dato = db
                  $_SESSION['user'] = $datos['user'];
                  $_SESSION['email'] = $datos['email'];
                  $_SESSION['session'] = $_POST['session'];
                  if ($_POST['session'] == true) {ini_set('session.cookie_lifetime', time() + (60 * 60 * 24 ));} //duracion session
                  echo '1';
                } else {
                  throw new Exception(2); 
                }
                $db->liberar($sql);
                $db->close();
              } else {
                throw new Exception('ERROR: Datos vacios');
              }
            } catch (Exception $login) {
              echo $login->getMessage();
            }
  }
  public function Recuperar(){

  }
  public function Registrar(){
   try {
    if (!empty($_POST['user']) and !empty($_POST['pass']) and !empty($_POST['email'])){
      $db         = new Conexion();
      $this->user = $db->real_escape_string($_POST['user']);
      $this->pass = $this->Encrypt($_POST['pass']);
      $this->email = $db->real_escape_string($_POST['email']);
      $sql = $db->query("SELECT * FROM users WHERE user='$this->user' OR email='$this->email';");
      //si no hay registro igual entonces crealo
      if ($db->rows($sql) == 0) {
        $sql2 = $db->query("INSERT INTO users(user, pass, email) VALUES('$this->user','$this->pass','$this->email')");
        $sql3 = $db->query("SELECT MAX(id) AS id FROM users");
        $datos = $db->recorrer($sql3);
                  $_SESSION['id'] = $datos['id'];
                  $_SESSION['user'] = $this->user;
                  $_SESSION['email'] = $this->email;
                  // $_SESSION['session'] = $_POST['session'];
                  // if ($_POST['session'] == true) {ini_set('session.cookie_lifetime', time() + (60 * 60 * 24 ));} //duracion session

                  
                  //liberamos
                   //$db->liberar($sql);
                   echo 1;//1 registrado correctamente
        } else {
              $datos = $db->recorrer($sql);
              if(strtolower($this->user) == strtolower($datos['user'])){
                 throw new Exception(2); //2 El usuario ya existe
              }else{
                  throw new Exception(3); //3 El email ya existe
              } 
        }
                $db->liberar($sql);
                $db->close();
     } else {
                throw new Exception('ERROR: Datos vacios');
            }
    } catch (Exception $login) {
              echo $login->getMessage();
    }
  }

  }//fin de class
?>


