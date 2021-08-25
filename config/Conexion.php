<?php
    //se declaran las variables para la conexion a la base de datos(Servidor, Usuario, Contraseña, Nombre de DB).
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
    $dbname = "jpl_academico";
    
    //Se almacena la conexion en una variable y se llaman las variables anteriormente declaradas.	
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (!$conn) 
	{
		die("No hay conexión: ".mysqli_connect_error());
	}
    //Se crean funciones para el proceso de la CRUD 
    if (!function_exists('ejecutarConsulta')) {
    function ejecutarConsulta($sql)
    {
        global $conn;
        $query=$conn->query($sql);
        return $query;
    } 
    function ejecutarConsultaSimpleFila($sql)
    {
        global $conn;
            
        $query=$conn->query($sql);
        $row=$query->fetch_assoc();
        return $row;
    }
    function ejecutarConsulta_retornarID($sql)
    {
    	global $conn;
        $query=$conn->query($sql);
        return $conn->insert_id;
    }
    function limpiarCadena($str)
    {
        global $conn;
        $str=mysqli_real_escape_string($conn, trim($str));
        return htmlspecialchars($str);
        }
    }
?>