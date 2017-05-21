<?php
	$n=0;
	$usuario=array();
	$publicaion=array();
	$tpublicaciones=array();
	$conn=mysqli_connect("localhost","root","","admin");
		if($conn)
		{
			//mysqli_set_charset($conn, "utf8");
			$prin=mysql_query("SELECT * FROM publicacion");
			$usu=mysql_query("SELECT * FROM usuario");
			$x=0;
			$a=0;
			while($rusu = mysql_fetch_array($usu)){
				 $id[$a]=$rusu['id_usuario'];
				 $nu[$x]=$rusu['nombre_usuario'];
				 $x++;
				 $a++;
			}
			while($reg= mysql_fetch_array($prin)){
				$idus=$reg['id_usuario'];
				for($x=0;$x<4;$x++){
					if($idus==$id[$x])
						$usuario[$n]=$nu[$x];	
				}
			$publicacion[$n]=$reg["texto_publicacion"];
			echo $publicacion[$n];
			$tpublicaciones[$n]=$reg["tiempo_publicacion"];
							$nom=json_encode($usuario);
							$pub=json_encode($publicacion, JSON_UNESCAPED_UNICODE);
							$tpub=json_encode($tpublicaciones);
							$_GET[$n]=$nom;
							$_GET[$n]=$pub;
							$_GET[$n]=$tpub;
							$n++;
			}
						echo 	$_GET[$n]=$nom;
						echo	$_GET[$n]=$pub;
						echo	$_GET[$n]=$tpub;
		}
?>