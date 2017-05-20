<?php
	$n=0;
	$arre=array();
	$conn=mysqli_connect("localhost","root","","admin");
		if($conn)
		{
			$query='SELECT * FROM publicacion';
			$res=mysqli_query($conn,$query);
			while($fila=mysqli_fetch_assoc($res)){
				$arre[$n]=$fila["id_usuario"]." ".$fila["texto_publicacion"]." ".$fila["tiempo_publicacion"];
				$m=json_encode($arre);
				$_GET[$n]=$m;
				$n++;
			}
			echo $_GET[$n]=$m;		
		}
?>