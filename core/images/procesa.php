<?php	
					
					if(isset($_FILES['image_foto'])){
					
						foreach (glob(  "_foto*.jpg"  ) as $filename) { // borrar las anteriores
							unlink($filename);
						}

						$foto = $_FILES['image_foto'];						
						
						$tipo = $foto['type'];
						
						$extensionName='no';
						
						$temp = $foto['tmp_name'];
						
								switch ( $tipo ){	
									case "image/png" : $extensionName = 'png';
									break;
									case "image/gif" : $extensionName = 'gif';
									break;
									case "image/jpeg": 	$extensionName = 'jpg';
									break;
								}

						
						
						if($extensionName!='no'){
						
							switch ($extensionName)	{
								case 'gif':   //   gif 
									$img = imagecreatefromgif($temp);
								break;
								case 'jpg':   //    jpg
									$img = imagecreatefromjpeg($temp); 
								break;
								case 'png':  //   png 
									$img = imagecreatefrompng($temp);
								break;
							}
						
							$alturaFoto = 150;	
							$rd = rand(1,10000);
							$destino = '_foto'.$rd.'.jpg';
							$altura = $alturaFoto;
							

							$dimensiones = getimagesize($temp); 

							$ratio = ($dimensiones[1] / $altura); // ratio = height original / altura nueva
							$anchura = round($dimensiones[0] / $ratio); // anchura nueva = width original / ratio
							$imageFoto = imagecreatetruecolor($anchura,$altura); //crea la nueva imagen 
							$FFF = imagecolorallocate($imageFoto, 255,255,255); // crea el color de fondo blanco
							imagefill($imageFoto, 0, 0, $FFF); // rellena la imagen nueva con el fondo blanco
	 
							imagecopyresampled ($imageFoto, $img, 0, 0, 0, 0, $anchura, $altura, $dimensiones[0], $dimensiones[1]);//reescala 
		 
							imagejpeg($imageFoto,$destino, 100);	
							
							echo  '<li>
								<img src="images/'.$destino.'" />						
								</li>
								';
							
						}
						else{
								echo  '<li>
								<img src="images/fotoError.jpg" />						
								</li>';
						}

					}// fin si hay foto
					
					if(isset($_FILES['image_fotocopia'])){
					
						foreach (glob(  "_cedula*.jpg"  ) as $filename) { // borrar las anteriores
								unlink($filename);
							}

						$fotocopia = $_FILES['image_fotocopia'];						
						
						$tipo = $fotocopia['type'];
						
						$extensionName='no';
						
						$temp = $fotocopia['tmp_name'];
						
								switch ( $tipo ){	
									case "image/png" : $extensionName = 'png';
									break;
									case "image/gif" : $extensionName = 'gif';
									break;
									case "image/jpeg": 	$extensionName = 'jpg';
									break;
								}

					
						
						if($extensionName!='no'){
						
								switch ($extensionName)	{
								case 'gif':   //   gif 
									$img = imagecreatefromgif($temp);
								break;
								case 'jpg':   //    jpg
									$img = imagecreatefromjpeg($temp); 
								break;
								case 'png':  //   png 
									$img = imagecreatefrompng($temp);
								break;
							}
						
							$alturaCedula = 200; // dimensiones maximas
							$rd = rand(1,10000);
							$destino = '_cedula'.$rd.'.jpg';
							$altura = $alturaCedula;
							

							$dimensiones = getimagesize($temp); 

							$ratio = ($dimensiones[1] / $altura); // ratio = height original / altura nueva
							$anchura = round($dimensiones[0] / $ratio); // anchura nueva = width original / ratio
							$imageFoto = imagecreatetruecolor($anchura,$altura); //crea la nueva imagen 
							$FFF = imagecolorallocate($imageFoto, 255,255,255); // crea el color de fondo blanco
							imagefill($imageFoto, 0, 0, $FFF); // rellena la imagen nueva con el fondo blanco
	 
							imagecopyresampled ($imageFoto, $img, 0, 0, 0, 0, $anchura, $altura, $dimensiones[0], $dimensiones[1]);//reescala 
		 
							imagejpeg($imageFoto,$destino, 100);	
							
							echo  '<li>
								<img src="images/'.$destino.'" />						
								</li>
								';
						}
						else{
								echo  '<li>
								<img src="images/cedulaError.jpg" />						
								</li>'
								;
						}

					}// fin si hay fotocopia


?>