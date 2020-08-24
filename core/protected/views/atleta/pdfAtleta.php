<?php
date_default_timezone_set("America/Caracas");
$hoy = date("d-m-Y");
$year = date("Y");
$hora = date("g:i a");
$fecha_ac = Yii::app()->dateFormatter->format("dd-MM-yyyy", $model->fecha_ultima_actualizacion_registro);
$hora_ac = Yii::app()->dateFormatter->format("hh:mm a", $model->fecha_ultima_actualizacion_registro);
// direccion de la foto del atleta
$foto = "./images/_foto".$model->cedula_atleta.".jpg";
					
						// borrar las fotos que esten en el directorio
						foreach (glob(  $foto  ) as $filename) { 
							unlink($filename);
						}
						
						// leo la foto de la bd y la escribo en el directorio					

								
								$image = imagecreatefromstring($model8->foto_atleta); 
								imagejpeg($image, $foto, 100);


$pdf = Yii::createComponent('application.extensions.mpdf60.mpdf');

$fecha = empty($model->fecha_nacimiento_atleta) ? '': Yii::app()->dateFormatter->format("dd-MM-yyyy", $model->fecha_nacimiento_atleta);

$trabajo = empty($model->departamento_trabajo_atleta) ? '': ' - '.$model->departamento_trabajo_atleta;

$html="

<style>
body{
	
	color:black;
}
#contenido{
	
}
#logo{
	margin:0;
	padding:0;
	width: 83px;
	height: 82px;
	float: left;
}
#membrete{
	text-align:center;
	float: left;
	width:80%;
	margin-top:11pt;
}
.membrete{
	margin:0;
	font-family:'Tahoma';
	font-size:10pt;
	text-indent: 0;
}
#pie{
	text-align:center;
}
.pie{
	margin:0;
	font-family:'Tahoma';
	font-size:10pt;
	text-indent: 0;
}
#foto{
	margin:0;
	padding:0;
	height: 150px;
}
#titulo{
	font-family: 'Arial';
    font-size: 11pt;
    font-weight: bold;	
	margin-top: 22pt;
}
.division{
	font-family: 'Arial';
    font-size: 11pt;
    font-weight: bold;	
	line-height: 150%;
	text-align: left;
    text-indent: 0;
	margin: 22pt 0;
}
.normal{
	font-family: Arial;
    font-size: 11pt;
    line-height: 150%;
	text-align: left;
    text-indent: 0;
	margin:0;
}
.salida{
	font-size: 10pt;
	font-weight: bold;
	margin-left: 6pt;
}
table{
	width:100%;
}
td{
	width:50%;
}
.pp1{
	height: 19mm;
}
.tabla td, .tabla th{
	width: 25;
	border: 1px solid black;
}



</style>

<body>

	<div id='contenido'>
	
	
		
		
		<div id='cuerpo'>
		
			<p><b>FECHA DE IMPRESIÓN:</b> ".$hoy." <b>HORA:</b> ".$hora."</p>
			<p><b>ÚLTIMA ACTUALIZACIÓN DEL REGISTRO:</b> ".$fecha_ac." <b>HORA:</b> ".$hora_ac."</p>
		
			<p class='division'>DATOS PERSONALES:</p>
		
			<table>
			
				<tbody>
				
					<tr>
						
						<td style='width=100%'><p class='normal'>Cédula de identidad:  <span class='salida'>".Yii::app()->numberFormatter->format( "#,###", CHtml::encode($model->cedula_atleta))."</span></p></td>
					
					
					</tr>
					
				</tbody>
				
			</table>
			
			<table>
			
				<tbody>
					
					<tr>
											
						<td><p class='normal'>Nombres:  <span class='salida'>".$model->primer_nombre_atleta." ".$model->segundo_nombre_atleta."</span></p></td>

						<td><p class='normal'>Apellidos: <span class='salida'>".$model->primer_apellido_atleta." ".$model->segundo_apellido_atleta. "</span></p></td>

					</tr>
					
					<tr>
						<td><p class='normal'>".$model->getAttributeLabel('sexo_atleta').":  <span class='salida'>".$model->sexo_atleta."</span></p></td>
						<td><p class='normal'>".$model->getAttributeLabel('fecha_nacimiento_atleta').":  <span class='salida'>".$fecha."</span></p></td>
						
					</tr>
					
					<tr>
						<td><p class='normal'>".$model->getAttributeLabel('estado_civil_atleta').":  <span class='salida'>".$model->estado_civil_atleta."</span></p></td>
						<td><p class='normal'>".$model->getAttributeLabel('nacionalidad_atleta').":  <span class='salida'>".$model->nacionalidad_atleta."</span></p></td>

					</tr>
					
										
				
				</tbody>
			
			</table>
			
			<table>
				<tbody>
				
					<tr>
						<td style='width=100%'><p class='normal'>Lugar de nacimiento: <span class='salida'>".$model->estado_nacimiento_atleta." - ".$model->pais_nacimiento_atleta."</span></p></td>						
					
					</tr>
				
					<tr>
						<td style='width=100%'><p class='normal'>Dirección de habitación: <span class='salida'>".$model->direccion_estado_atleta.", Municipio ".$model->direccion_municipio_atleta.", ".$model->direccion_tipo_calle_atleta." ".$model->direccion_calle_atleta."</span></p></td>
						
					
					</tr>
				
				</tbody>
			
			</table>
			
			<table>
				<tbody>
				
					<tr>
						<td><p class='normal'>".$model->getAttributeLabel('telefono_habitacion_atleta').":  <span class='salida'>".$model->telefono_habitacion_atleta."</span></p></td>
						<td><p class='normal'>".$model->getAttributeLabel('telefono_celular_atleta').":  <span class='salida'>".$model->telefono_celular_atleta."</span></p></td>
						
					</tr>
					
				</tbody>
				
			</table>
			
			<table>
			
				<tbody>
					
					<tr>
						<td><p class='normal'>".$model->getAttributeLabel('correo_electronico_atleta').":  <span class='salida'>".$model->correo_electronico_atleta."</span></p></td>					
					</tr>
					
				</tbody>
				
			</table>
			
			<table>
			
				<tbody>
					
					<tr>
						<td><p class='normal'>".$model->getAttributeLabel('talla_camisa_atleta').":  <span class='salida'>".$model->talla_camisa_atleta."</span></p></td>
						<td><p class='normal'>".$model->getAttributeLabel('talla_franela_atleta').":  <span class='salida'>".$model->talla_franela_atleta."</span></p></td>
						
					</tr>
					
					<tr>
						<td><p class='normal'>".$model->getAttributeLabel('talla_pantalon_atleta').":  <span class='salida'>".$model->talla_pantalon_atleta."</span></p></td>
						<td><p class='normal'>".$model->getAttributeLabel('talla_short_atleta').":  <span class='salida'>".$model->talla_short_atleta."</span></p></td>
					</tr>
					
					<tr>
						<td><p class='normal'>".$model->getAttributeLabel('talla_mono_atleta').":  <span class='salida'>".$model->talla_mono_atleta."</span></p></td>
						<td><p class='normal'>".$model->getAttributeLabel('talla_karategui_atleta').":  <span class='salida'>".$model->talla_karategui_atleta."</span></p></td>
					
					</tr>
					
					<tr>
						<td><p class='normal'>".$model->getAttributeLabel('talla_dobok_atleta').":  <span class='salida'>".$model->talla_dobok_atleta."</span></p></td>
						<td><p class='normal'>".$model->getAttributeLabel('talla_judogui_atleta').":  <span class='salida'>".$model->talla_judogui_atleta."</span></p></td>
					
					</tr>
					
					<tr>
						<td><p class='normal'>".$model->getAttributeLabel('talla_traje_natacion_atleta').":  <span class='salida'>".$model->talla_traje_natacion_atleta."</span></p></td>
						<td><p class='normal'>".$model->getAttributeLabel('talla_calzado_atleta').":  <span class='salida'>".$model->talla_calzado_atleta."</span></p></td>
					
					</tr>
					
					<tr>
						<td><p class='normal'>".$model->getAttributeLabel('talla_trusa_atleta').":  <span class='salida'>".$model->talla_trusa_atleta."</span></p></td>
						<td><p class='normal'>".$model->getAttributeLabel('peso_atleta').":  <span class='salida'>".$model->peso_atleta."</span></p></td>
					
					</tr>
					
					<tr>
						<td><p class='normal'>".$model->getAttributeLabel('estatura_atleta').":  <span class='salida'>".$model->estatura_atleta."</span></p></td>					
					
					</tr>
					
				</tbody>
				
			</table>
			
			<table>
			
				<tbody>
					
					
					
					<tr style='width=100%'>
						<td><p class='normal'>".$model->getAttributeLabel('pertenece_ucv_atleta').":  <span class='salida'>".$model->pertenece_ucv_atleta."</span></p></td>
					</tr>
					
					<tr style='width=100%'>
						<td><p class='normal'>".$model->getAttributeLabel('sector_atleta').":  <span class='salida'>".$model->sector_atleta."</span></p></td>
					</tr>
					
				</tbody>
				
			</table>
			
			<table>
			
				<tbody>
					
					<tr>
						<td><p class='normal'>".$model->getAttributeLabel('facultad_atleta').":  <span class='salida'>".$model->facultad_atleta."</span></p></td>
						<td><p class='normal'>".$model->getAttributeLabel('escuela_atleta').":  <span class='salida'>".$model->escuela_atleta."</span></p></td>
					</tr>
					
				</tbody>
				
			</table>
			
			
			
			<pagebreak />
			
			<p class='division'>DATOS ACADÉMICOS:</p>
			
			<table>
			
				<tbody>
					
					<tr style='width=100%'>
						<td><p class='normal'>".$model->atletaAcademico->getAttributeLabel('year_ingreso_educacion_superior_atleta').":  <span class='salida'>".$model->atletaAcademico->year_ingreso_educacion_superior_atleta."</span></p></td>
					</tr>
					
				
				</tbody>
			
			</table>
			
			<table>
			
				<tbody>
					
					<tr>
											
						<td><p class='normal'>".$model->atletaAcademico->getAttributeLabel('escuela_estudia_atleta').":  <span class='salida'>".$model->atletaAcademico->escuela_estudia_atleta."</span></p></td>

					</tr>
				</tbody>
			</table>
			<table>
				<tbody>
					<tr>
						
						<td><p class='normal'>".$model->atletaAcademico->getAttributeLabel('semestre_year_cursa_atleta').":  <span class='salida'>".$model->atletaAcademico->semestre_year_cursa_atleta."</span></p></td>
						<td><p class='normal'>".$model->atletaAcademico->getAttributeLabel('estatus_actual_atleta').":  <span class='salida'>".$model->atletaAcademico->estatus_actual_atleta."</span></p></td>
					
					</tr>
					
					<tr>
											
						

						<td><p class='normal'>".$model->atletaAcademico->getAttributeLabel('year_ingreso_ucv_atleta').":  <span class='salida'>".$model->atletaAcademico->year_ingreso_ucv_atleta."</span></p></td>
						<td><p class='normal'>".$model->atletaAcademico->getAttributeLabel('tipo_ingreso_ucv_atleta').":  <span class='salida'>".$model->atletaAcademico->tipo_ingreso_ucv_atleta."</span></p></td>
					</tr>
				</tbody>
			</table>
			<table>
				<tbody>
					
					<tr>
											
						

						<td><p class='normal'>".$model->atletaAcademico->getAttributeLabel('cambio_escuela_atleta').":  <span class='salida'>".$model->atletaAcademico->cambio_escuela_atleta."</span></p></td>

					</tr>
					
				</tbody>
			</table>
			<table>
				<tbody>
					
					<tr>
											
						<td><p class='normal'>".$model->atletaAcademico->getAttributeLabel('facultad_anterior_atleta').":  <span class='salida'>".$model->atletaAcademico->facultad_anterior_atleta."</span></p></td>

						<td><p class='normal'>".$model->atletaAcademico->getAttributeLabel('escuela_anterior_atleta').":  <span class='salida'>".$model->atletaAcademico->escuela_anterior_atleta."</span></p></td>

					</tr>
					
				</tbody>
			</table>
			<table>
				<tbody>
					
					<tr>
											
						<td><p class='normal'>".$model->atletaAcademico->getAttributeLabel('year_ingreso_anterior_atleta').":  <span class='salida'>".$model->atletaAcademico->year_ingreso_anterior_atleta."</span></p></td>

					</tr>
					
					<tr>
						<td><p class='normal'>".$model->atletaAcademico->getAttributeLabel('tipo_ingreso_anterior_atleta').":  <span class='salida'>".$model->atletaAcademico->tipo_ingreso_anterior_atleta."</span></p></td>

					</tr>
					
					
					<tr>
											
						<td><p class='normal'>".$model->atletaAcademico->getAttributeLabel('semestre_year_anterior_aprobado_atleta').":  <span class='salida'>".$model->atletaAcademico->semestre_year_anterior_aprobado_atleta."</span></p></td>

					</tr>
					
				</tbody>
				
			</table>
			
			<table>
				<tbody>
					<tr>
						
						<td><p class='normal'>".$model->atletaAcademico->getAttributeLabel('es_becado_atleta').":  <span class='salida'>".$model->atletaAcademico->es_becado_atleta."</span></p></td>

					</tr>
					
					<tr>
											
						<td><p class='normal'>".$model->atletaAcademico->getAttributeLabel('institucion_beca_atleta').":  <span class='salida'>".$model->atletaAcademico->institucion_beca_atleta."</span></p></td>

					</tr>
					
					<tr>
						<td><p class='normal'>".$model->atletaAcademico->getAttributeLabel('estudios_superiores_anteriores_atleta').":  <span class='salida'>".$model->atletaAcademico->estudios_superiores_anteriores_atleta."</span></p></td>

					</tr>
					
					<tr>
											
						<td><p class='normal'>".$model->atletaAcademico->getAttributeLabel('institucion_superior_anterior_atleta').":  <span class='salida'>".$model->atletaAcademico->institucion_superior_anterior_atleta."</span></p></td>

					</tr>
					<tr>
						<td><p class='normal'>".$model->atletaAcademico->getAttributeLabel('materia_deporte_atleta').":  <span class='salida'>".$model->atletaAcademico->materia_deporte_atleta."</span></p></td>

					</tr>
				</tbody>
			</table>
			<table>
				<tbody>
					
					<tr>
											
						<td><p class='normal'>".$model->atletaAcademico->getAttributeLabel('deportes1_periodo_atleta').":  <span class='salida'>".$model->atletaAcademico->deportes1_periodo_atleta."</span></p></td>
					</tr>
					<tr>
						<td><p class='normal'>".$model->atletaAcademico->getAttributeLabel('deportes1_nota_atleta').":  <span class='salida'>".$model->atletaAcademico->deportes1_nota_atleta."</span></p></td>
					</tr>
				
					<tr>
						<td><p class='normal'>".$model->atletaAcademico->getAttributeLabel('deportes2_periodo_atleta').":  <span class='salida'>".$model->atletaAcademico->deportes2_periodo_atleta."</span></p></td>
					</tr>
					<tr>
						<td><p class='normal'>".$model->atletaAcademico->getAttributeLabel('deportes2_nota_atleta').":  <span class='salida'>".$model->atletaAcademico->deportes2_nota_atleta."</span></p></td>
					</tr>
					
					
				</tbody>
			</table>
			
			
			
			<pagebreak />
			
			<p class='division'>DATOS DEPORTIVOS:</p>
			
			<table>
			
				<tbody>
					
					<tr style='width=100%'>
						<td><p class='normal'>".$model->atletaDeportivo->getAttributeLabel('disciplina_atleta').":  <span class='salida'>".$model->atletaDeportivo->disciplina_atleta."</span></p></td>
					</tr>
					
				
				</tbody>
			
			</table>
			
			<table>
			
				<tbody>
					
					
					
					
					<tr>
											
						<td><p class='normal'>".$model->atletaDeportivo->getAttributeLabel('year_inscripcion_disciplina_atleta').":  <span class='salida'>".$model->atletaDeportivo->year_inscripcion_disciplina_atleta."</span></p></td>

					</tr>
					<tr>
						<td><p class='normal'>".$model->atletaDeportivo->getAttributeLabel('dependencia_disciplina_atleta').":  <span class='salida'>".$model->atletaDeportivo->dependencia_disciplina_atleta."</span></p></td>

					</tr>
					
					<tr>
											
						<td><p class='normal'>".$model->atletaDeportivo->getAttributeLabel('estatus_disciplina_atleta').":  <span class='salida'>".$model->atletaDeportivo->estatus_disciplina_atleta."</span></p></td>

					</tr>
					<tr>
						<td><p class='normal'>".$model->atletaDeportivo->getAttributeLabel('componente_disciplina_atleta').":  <span class='salida'>".$model->atletaDeportivo->componente_disciplina_atleta."</span></p></td>

					</tr>
					
					<tr>
											
						<td><p class='normal'>".$model->atletaDeportivo->getAttributeLabel('es_seleccion_nacional_atleta').":  <span class='salida'>".$model->atletaDeportivo->es_seleccion_nacional_atleta."</span></p></td>

					</tr>
					<tr>
						<td><p class='normal'>".$model->atletaDeportivo->getAttributeLabel('es_seleccion_estadal_atleta').":  <span class='salida'>".$model->atletaDeportivo->es_seleccion_estadal_atleta."</span></p></td>

					</tr>
					
					<tr>
						<td><p class='normal'>".$model->atletaDeportivo->getAttributeLabel('dia_practica_atleta').":  <span class='salida'>".$model->atletaDeportivo->dia_practica_atleta."</span></p></td>

					</tr>
					
					<tr>
						<td><p class='normal'>".$model->atletaDeportivo->getAttributeLabel('horario_practica_atleta').":  <span class='salida'>".$model->atletaDeportivo->horario_practica_atleta."</span></p></td>

					</tr>
					
										
				
				</tbody>
			
			</table>
			
			<pagebreak />
			
			<p class='division'>PARTICIPACIÓN EN EXHIBICIONES O CLINICAS DEPORTIVAS:</p>
			
			<table class='tabla'>
				<tbody>
				
					<tr>
						<td><p class='salida'>Nombre</p></td>
						<td><p class='salida'>Sede</p></td>
						<td><p class='salida'>Año</p></td>
						<td><p class='salida'>Facilitador</p></td>
					
					</tr>";
					
						
						
						$items = AtletaExhibicion::model()->findAll(array('condition'=>'cedula_atleta=:x', 'params'=>array(':x'=>$model->cedula_atleta)));
						
						foreach($items as $i=>$item):  
							$html = $html."<tr>";
							$html = $html."<td><p class='normal'>".$item->nombre_exhibicion."</p></td>";
							$html = $html."<td><p class='normal'>".$item->nombre_sede_exhibicion."</p></td>";
							$html = $html."<td><p class='normal'>".$item->year_exhibicion."</p></td>";
							$html = $html."<td><p class='normal'>".$item->facilitador_exhibicion."</p></td>";
							$html = $html."</tr>";
						endforeach;
						
						
						
						
					$html = $html."</tbody>
			
			</table>
			
			<pagebreak />
			
			<p class='division'>RECONOCIMIENTOS RECIBIDOS:</p>
			
			<table class='tabla'>
				<tbody>
				
					<tr>
						<td><p class='salida'>Nombre del reconocimiento</p></td>
						<td><p class='salida'>Institución otorgante</p></td>
						<td><p class='salida'>Año</p></td>
						<td><p class='salida'>Evento en el que fue otorgado</p></td>
					
					</tr>";
					
						
						
						$items = AtletaReconocimiento::model()->findAll(array('condition'=>'cedula_atleta=:x', 'params'=>array(':x'=>$model->cedula_atleta)));
						
						foreach($items as $i=>$item):  
							$html = $html."<tr>";
							$html = $html."<td><p class='normal'>".$item->nombre_reconocimiento."</p></td>";
							$html = $html."<td><p class='normal'>".$item->institucion_reconocimiento."</p></td>";
							$html = $html."<td><p class='normal'>".$item->year_reconocimiento."</p></td>";
							$html = $html."<td><p class='normal'>".$item->evento_reconocimiento."</p></td>";
							$html = $html."</tr>";
						endforeach;
						
						
						
						
					$html = $html."</tbody>
			
			</table>
			
			<pagebreak />
			
			<p class='division'>SANCIONES RECIBIDAS:</p>
			
			<table class='tabla'>
				<tbody>
				
					<tr>
						<td><p class='salida'>Motivo de la sanción</p></td>
						<td><p class='salida'>Organismo sancionante</p></td>
						<td><p class='salida'>Año de inicio</p></td>
						<td><p class='salida'>Año de fin</p></td>
					
					</tr>";
					
						
						
						$items = AtletaSancion::model()->findAll(array('condition'=>'cedula_atleta=:x', 'params'=>array(':x'=>$model->cedula_atleta)));
						
						foreach($items as $i=>$item):  
							$html = $html."<tr>";
							$html = $html."<td><p class='normal'>".$item->motivo_sancion."</p></td>";
							$html = $html."<td><p class='normal'>".$item->organismo_sancion."</p></td>";
							$html = $html."<td><p class='normal'>".$item->year_inicio_sancion."</p></td>";
							$html = $html."<td><p class='normal'>".$item->year_fin_sancion."</p></td>";
							$html = $html."</tr>";
						endforeach;
						
						
						
						
					$html = $html."</tbody>
			
			</table>
			
			<pagebreak />
			
			<p class='division'>PARTICIPACIÓN EN COMPETENCIAS:</p>
			
			<table class='tabla'>
				<tbody>
				
					<tr>
						<td><p class='salida'>Nivel</p></td>
						<td><p class='salida'>Nombre de la competencia</p></td>
						<td><p class='salida'>Año</p></td>
						<td><p class='salida'>Lugar obtenido</p></td>
					
					</tr>";
					
						
						
						$items = AtletaCompetencia::model()->findAll(array('condition'=>'cedula_atleta=:x', 'params'=>array(':x'=>$model->cedula_atleta)));
						
						foreach($items as $i=>$item):  
							$html = $html."<tr>";
							$html = $html."<td><p class='normal'>".$item->nivel_competencia."</p></td>";
							$html = $html."<td><p class='normal'>".$item->nombre_competencia."</p></td>";
							$html = $html."<td><p class='normal'>".$item->year_competencia."</p></td>";
							$html = $html."<td><p class='normal'>".$item->lugar_competencia."</p></td>";
							$html = $html."</tr>";
						endforeach;
						
						
						
						
					$html = $html."</tbody>
			
			</table>

		</div>
		
	</div>

</body>



";

$header="	<div id='encabezado'>
		
			<div id='logo'>
			
				<img src='http://rstatic.ostudiorx.com/logo.png'   />
			
			</div>
			
			<div>
			
				<div id='membrete'>
				
					<p class='membrete'>NOMBRE INSTITUCIÓN</p>
					<p class='membrete'>NOMBRE UNIDAD</p>
					<p class='membrete'>CIUDAD</p>
					
					<p id='titulo'>FICHA TÉCNICA DEL ATLETA</p>
				
				</div>
				
				<div id='foto'>
				
					<img src='".$foto."'   />
				
				</div>
			
			
			</div>
			
			
		
		</div>	";

$footer="<div id='pie'>
		
					<p class='pie'>Derechos de Autor © ".$year." Producciones OSTUDIO rx C.A.</p>
					<p class='pie'>Todos los derechos reservados.</p>
					

		</div> <div style='text-align:right;'>{PAGENO}/{nb}</div>";

$mpdf=new mPDF(
				'utf-8', // mode
				'Letter',// format
				'',		// font size
				'',		// font
				30,		// margin left
				25,		// margin right
				60,		// margin top
				25,		// margin bottom
				25,		// margin header
				10		// margin footer
				);
$mpdf->SetHTMLHeader($header);
$mpdf->SetHTMLFooter($footer);
$mpdf->WriteHTML($html);
$mpdf->Output('Expediente-Atleta-'.$model->cedula_atleta.'.pdf','D'); //Descargar

// borrar las fotos que esten en el directorio
						foreach (glob(  $foto  ) as $filename) { 
							unlink($filename);
						}

exit;
?>