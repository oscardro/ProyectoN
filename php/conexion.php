

<?php 
		function conexion(){
			$servidor="localhost";
			$usuario="oscar";
			$password="0102030405DA";
			$bd="pruebas";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

 ?>
