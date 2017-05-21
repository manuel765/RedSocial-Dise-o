<?php
		
$con= mysql_connect('localhost','root',"");
	mysql_select_db('admin',$con);
$n=0;
	$usuario=array();
	$publicaion=array();
	$tpublicaciones=array();
		if($con)
		{
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
$tpublicaciones[$n]=$reg["tiempo_publicacion"];
				$nom=json_encode($usuario);
				$pub=json_encode($publicacion);
				$tpub=json_encode($tpublicaciones);
				$_GET[$n]=$nom;
				$_GET[$n]=$pub;
				$_GET[$n]=$tpub;
				$n++;
			}
			echo $_GET[$n]=$nom;
			echo	$_GET[$n]=$pub;
			echo	$_GET[$n]=$tpub;
		}
echo "</body>
</html>";
?>