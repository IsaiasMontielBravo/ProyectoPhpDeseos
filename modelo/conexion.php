<?php

class conexion{

	private $conexion; 
	private $server = "localhost"; 
	private $usuario = "root"; 
	private $pass = "";
	private $db = "deseos"; 
	private $user ; 
	private $password;


	public function __construct(){

		$this->conexion = new mysqli($this->server, $this->usuario, $this->pass, $this->db);

		if($this->conexion->connect_errno){

			die("Fallo al trratar de conectar con MySQL: (". $this->conexion->connect_errno.")");


		}
	}

	public function cerrar(){

		$this->conexion->close();

	}


	public function login($usuario, $pass){

		$this->user = $usuario;
		$this->password = $pass;

		$query = "select cedula, nombre, apellido, usuario, clave, cargo_id from deseador where usuario = '".$this->user."' and clave = MD5('".$this->password."')";
		$consulta = $this->conexion->query($query);

		$row = mysqli_fetch_array($consulta);


		if($row['cargo_id'] == 1 ){ //Administrador

			session_start(); 

			$_SESSION['validacion'] = 1 ; 
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['apellido'] = $row['apellido'];
            $_SESSION['cedula'] = $row['cedula'];

			echo "menu.php"; //Respuesta Mensaje donde redireccionara



		}else if($row['cargo_id'] == 2) { //Operario

			session_start(); 

			$_SESSION['validacion'] = 1 ; 
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['apellido'] = $row['apellido'];
            $_SESSION['cedula'] = $row['cedula'];

			echo "menu.php"; 

		}else{

			session_start(); 

			$_SESSION['validacion'] = 0 ; 
			echo "1";
		}

	} // CIERRE METODO LOGIN 
    
    
    public function registrar_usuario($cedula, $nombre, $apellido, $usuario, $pass1, $pass2){
        
        
        if($pass1 == $pass2){
            $validacion_pass = true;
        }else{
            $validacion_pass= false;
        }
    
        
        if($validacion_pass){
            
            $consult = $this->conexion->query("select usuario from deseador where usuario = '".$usuario."'");
            
            if(mysqli_num_rows($consult)> 0){
                echo '1';
            }else{
                $this->conexion->query("insert into deseador values('".$cedula."', '".$nombre."', '".$apellido."', '".$usuario."', MD5('".$pass1."'), 2)");  
                session_start();
                $_SESSION['validacion'] = 1 ;
                $_SESSION['nombre']= $nombre;
                $_SESSION['apellido'] = $apellido;
                $_SESSION['cedula'] = $cedula;
    
                echo 'menu.php';
            }
          
        }else{
            echo '2';
        }
        
    }
    
    
    
    
/**************************************************************************************************************    
  AGREGAR DESEO
**************************************************************************************************************/
    
    public function agregarDeseo($titulo, $deseo)
    {
        //El deseo que ingreso el usuario no exista 
        session_start();
       $res =  $this->conexion->query("select titulo, deseador_cedula from deseos where titulo = '".$titulo."' and deseador_cedula = '".$_SESSION['cedula']."' ");
        
        if(mysqli_num_rows($res)>0)
        {
            //Que el deseo existe
            echo '1';
        }else{
            //Registrar el deseo
            $this->conexion->query("insert into deseos(titulo, descripcion, deseador_cedula) values('".$titulo."', '".$deseo."', '".$_SESSION['cedula']."')");
            echo "Se registro el deseo";
        }
    }

    
/**************************************************************************************************************    
  MODIFICAR DESEO
**************************************************************************************************************/
    
    public function ModificarDeseo($titulo, $deseo)
    {
    //El deseo que ingreso el usuario no exista 
        session_start();
       $res =  $this->conexion->query("select titulo, deseador_cedula from deseos where titulo = '".$titulo."' and deseador_cedula = '".$_SESSION['cedula']."' ");
        
        if(mysqli_num_rows($res)>0)
        {
            //Existe
            $this->conexion->query("UPDATE deseos set descripcion = '".$deseo."' where titulo = '".$titulo."' and deseador_cedula='".$_SESSION['cedula']."' ");
            echo "Se actualizó el Deseo";
        }else{
            echo "1";
        }
    }
    
/**************************************************************************************************************    
  ELIMINAR DESEO
**************************************************************************************************************/
    
    public function eliminarDeseo($titulo)
    {
        session_start();
        //Validar si existe el deseo
        $res = $this->conexion->query("select titulo, deseador_cedula from deseos where titulo = '".$titulo."' and deseador_cedula = '".$_SESSION['cedula']."'");
        
        if(mysqli_num_rows($res) > 0 ){
            //existe el deseo
            $this->conexion->query("delete from deseos where titulo = '".$titulo."' and deseador_cedula= '".$_SESSION['cedula']."'");
            echo "Se elimino el Deseo";
        }else{
            //El deseo no existe
            echo "1";
        }
    }
    
/**************************************************************************************************************    
  LISTAR DESEOS
**************************************************************************************************************/

    public function listarDeseos()
    {
     
        $consulta = $this->conexion->query("select titulo, descripcion from deseos where deseador_cedula= '".$_SESSION['cedula']."'");
        
        while($row= mysqli_fetch_array($consulta)){
            echo "<tr>";
            echo "<td>" . $row['titulo']. "</td><td>". $row['descripcion']. "</td>";
            echo "</tr>";
        }
    }
    
    
}









?>