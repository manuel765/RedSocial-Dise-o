<?php
	$text=array("Alguien que me ayude con lo de Canabal????","Por qué ella no me ama? :'v","Es porque soy feo??","io s0yy Ünic0 y d3f2erinte :s mi pacman está torcido, igual que mi alma (JAJA bueno, Alma no está torcida)","El problema de las redes sociales es que llega un punto en el que ya no tienes ni idea de qué publicar, o simplemente te dan ganas de odiar a todos y botar (biba el boto libre :v) todo :v. BTW, alguien ya vio Los Guardianes de la Galaxia 2?? Sale uno de estos: :V pero gigante JAJAJA","Güeno, pues Mauricio, Alma, Adrián, Lucatero, Ramón y yo sabemos que podrán lograr que esto se vea bonito morros","No se trata de echarle la culpa exclusiva a una marca que decide regalar poleras, se trata de analizar por qué lo hacen y desde dónde lo hacen. jeres que compren en sus tiendas sean idealmente talla 38; si en toda su historia han exhibido comerciales donde pontifican ser de los cinco continentes y no tienen a ningún niño mapuche o gordo, por ejemplo. Las  la ciudad.");	
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
					$publicaciones[$n]=$reg["texto_publicacion"];
					$tpublicaciones[$n]=$reg["tiempo_publicacion"];
								$nom=json_encode($usuario);
								//$pub=json_encode($text,JSON_UNESCAPED_UNICODE);
								$pub=json_encode(array_map(utf8_encode,$publicaciones));
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