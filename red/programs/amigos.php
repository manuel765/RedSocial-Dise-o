<?php
	$n=0;
	$arre=array();
	$conn=mysqli_connect("localhost","root","","admin");
		if($conn)
		{
			$query='SELECT nombre_usuario FROM usuario';
			$res=mysqli_query($conn,$query);
			while($fila=mysqli_fetch_assoc($res)){
				$arre[$n]=$fila["nombre_usuario"]." ".$fila["password"];
				$m=json_encode($arre);
				$_GET[$n]=$m;
				$n++;
			}
			echo $_GET[$n]=$m;		
		}
?>