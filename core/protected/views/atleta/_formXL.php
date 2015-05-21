<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/ajaxupload.js"></script> 

<script type="text/javascript">

$(document).ready(function(){
	var button = $('#AtletaPersonal_foto_direccion');	
		new AjaxUpload(button,{
			action: './images/procesa.php', 
			name: 'image_foto',
			onComplete: function(file, response){					
				$("#galeria li").remove() ;
				$("#galeria").prepend(response);
			}			
		});
		
	var button2 = $('#AtletaPersonal_fotocopia_direccion');	
		new AjaxUpload(button2,{
			action: './images/procesa.php', 
			name: 'image_fotocopia',
			onComplete: function(file, response){					
				$("#galeria2 li").remove() ;
				$("#galeria2").prepend(response);			
			}			
		});
});

</script>

<style>
.divisiones{
		background-color: #F2F2F2;
		border-bottom: none;
		border-top: solid 1px #E2E2E2;
		padding: 4px 5px 5px;
		font-size: 12px;
		color: #333;
		font-weight: bold; 
		margin: 20px 0px 5px 0px;
	}

</style>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'atleta-form',
	'enableAjaxValidation'=>false,
	'focus'=>array($model1,'cedula_atleta'),
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary(array(
			'model1'=>$model1,
			'model2'=>$model2,
			'model3'=>$model3,		
		)); ?>
	
	<div class="divisiones">DATOS PERSONALES</div>
	
	<div class="row">
		<?php echo $form->labelEx($model1,'cedula_atleta'); ?>
		<?php echo $form->textField($model1,'cedula_atleta',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model1,'cedula_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'primer_nombre_atleta'); ?>
		<?php echo $form->textField($model1,'primer_nombre_atleta',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model1,'primer_nombre_atleta'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model1,'segundo_nombre_atleta'); ?>
		<?php echo $form->textField($model1,'segundo_nombre_atleta',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model1,'segundo_nombre_atleta'); ?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'primer_apellido_atleta'); ?>
		<?php echo $form->textField($model1,'primer_apellido_atleta',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model1,'primer_apellido_atleta'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model1,'segundo_apellido_atleta'); ?>
		<?php echo $form->textField($model1,'segundo_apellido_atleta',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model1,'segundo_apellido_atleta'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model1,'sexo_atleta'); ?>
		<?php echo $form->dropDownList($model1, 'sexo_atleta', CHtml::listData(SexoAtleta::model()->findAll(), 'sexo', 'sexo'), array('empty'=>'Seleccione el sexo:') ); ?>
		<?php echo $form->error($model1,'sexo_atleta'); ?>
	</div>
	
	
	<div class="row">
		<b>Fecha de nacimiento: </b> 
	</div>	
	
	<div class="row">
		<?php 	$data = CHtml::listData(Dia::model()->findAll(), 'dia', 'dia');
				echo $form->dropDownList($model1, 'dia_nacimiento_atleta', $data, array('empty'=>'Día:') ); ?>
	
		<?php 	$data = CHtml::listData(Mes::model()->findAll(), 'etiqueta_mes', 'valor_mes');
				echo $form->dropDownList($model1, 'mes_nacimiento_atleta', $data, array('empty'=>'Mes:') ); ?>
		
		<?php 	$data = CHtml::listData(Year::model()->findAll(), 'year', 'year');
				echo $form->dropDownList($model1, 'year_nacimiento_atleta', $data, array('empty'=>'Año:') ); ?>	
				
		<?php echo $form->error($model1,'dia_nacimiento_atleta'); ?>
		<?php echo $form->error($model1,'mes_nacimiento_atleta'); ?>
		<?php echo $form->error($model1,'year_nacimiento_atleta'); ?>
	
	</div>
	
	
	<div class="row">
		<?php echo $form->labelEx($model1,'estado_civil_atleta'); ?>
		<?php echo $form->dropDownList($model1, 'estado_civil_atleta', CHtml::listData(EstadoCivilAtleta::model()->findAll(), 'civil', 'civil'), array('empty'=>'Seleccione el estado civil:') ); ?>
		<?php echo $form->error($model1,'estado_civil_atleta'); ?>
	</div>
	
	

	<div class="row">
		<b>Lugar de nacimiento:</b>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'pais_nacimiento_atleta'); ?>
		
		
		<?php echo $form->dropDownList($model1, 'pais_nacimiento_atleta', CHtml::listData(Pais::model()->findAll(), 'pais', 'pais'), 
		array(
			'empty'=>'Seleccione el país:',
			 'ajax' => array(			
                                'type'=>'POST',									
                                'url'=>CController::createUrl('generarEstados'), 
                                'update'=>'#'.CHtml::activeId($model1,'estado_nacimiento_atleta')), 
			
			) ); ?>
		
		
		
		<?php echo $form->error($model1,'pais_nacimiento_atleta'); ?>
	</div>
		
	<div class="row">	
		
		<?php echo $form->labelEx($model1,'estado_nacimiento_atleta'); ?>
		
		
		<?php echo $form->dropDownList($model1, 'estado_nacimiento_atleta', CHtml::listData(Estado::model()->findAll(), 'estado', 'estado'), 
		array(
			'empty'=>'Seleccione el estado:',			 
			
			) ); ?>
		
		
		<?php echo $form->error($model1,'estado_nacimiento_atleta'); ?>
	</div>	

	<div class="row">
		<?php echo $form->labelEx($model1,'nacionalidad_atleta'); ?>
		<?php echo $form->dropDownList($model1, 'nacionalidad_atleta', CHtml::listData(NacionalidadAtleta::model()->findAll(), 'nacionalidad', 'nacionalidad'), array('empty'=>'Seleccione la nacionalidad:') ); ?>
	
		<?php echo $form->error($model1,'nacionalidad_atleta'); ?>
	</div>
	
	<div class="row">
		<b>Dirección de habitación:</b>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'direccion_estado_atleta'); ?>
		<?php echo $form->dropDownList($model1, 'direccion_estado_atleta', CHtml::listData(Estado::model()->findAll(), 'estado', 'estado'), 
		array(
			'empty'=>'Seleccione el estado:',
			 'ajax' => array(			// le paso como parametros post $_POST['AtletaPersonal']['direccion_estado_atleta']
                                'type'=>'POST',									// el codigo está en el contralador atletaController
                                'url'=>CController::createUrl('generarMunicipios'), // en la funcion actionGenerarMunicipio
                                'update'=>'#'.CHtml::activeId($model1,'direccion_municipio_atleta')), // actualizar la lista
			
			) ); ?>
		
		<?php echo $form->error($model1,'direccion_estado_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'direccion_municipio_atleta'); ?>
												
		<?php echo $form->dropDownList($model1, 'direccion_municipio_atleta', CHtml::listData(Municipio::model()->findAll(), 'municipio', 'municipio'), array('empty'=>'Seleccione el municipio:') ); ?>
		<?php echo $form->error($model1,'direccion_municipio_atleta'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model1,'direccion_calle_atleta'); ?>
		<?php $data = array('Avenida'=>'Avenida','Calle'=>'Calle', 'Escalera'=>'Escalera');
			 
			  echo $form->radioButtonList($model1,'direccion_tipo_calle_atleta',  $data, array('separator'=>' ','labelOptions'=>array('style'=>'display:inline;')) ); ?>
			  <br />
		<?php echo $form->textField($model1,'direccion_calle_atleta',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model1,'direccion_calle_atleta'); ?>
	</div>	
	
		
	<div class="row"> 
		<?php echo $form->labelEx($model1,'foto_direccion'); ?>
		<div id="foto">
			<ul id="galeria">
				<li>
					<?php 						
						// borrar las fotos que esten en el directorio
						foreach (glob(  "./images/_foto*.jpg"  ) as $filename) { 
							unlink($filename);
						}
						
						// leo la foto de la bd y la escribo en el directorio					

								$rd = rand(1,10000);
								$destino = './images/_foto'.$rd.'.jpg';
								$image = imagecreatefromstring($model8->foto_atleta); 
								imagejpeg($image, $destino, 100);
								$src = $destino;
							
						
						echo CHtml::image( $src , 'Foto',array('id'=>'foto_imagen')); 
					?>					
				</li>
			</ul>
			<?php echo $form->fileField($model1,'foto_direccion',array('size'=>3,'maxlength'=>45, 'onChange'=>'subirFoto()' )); ?>
		</div>
		<?php echo $form->error($model1,'foto_direccion'); ?>		
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model1,'fotocopia_direccion'); ?>
		<div id="fotocopia">
			<ul id="galeria2">
				<li>
					<?php 						
						// borrar las cedulas que esten en el directorio
						foreach (glob(  "./images/_cedula*.jpg"  ) as $filename) { 
							unlink($filename);
						}
						
						// leo la cedula de la bd y la escribo en el directorio					

								$rd = rand(1,10000);
								$destino = './images/_cedula'.$rd.'.jpg';
								$image = imagecreatefromstring($model9->fotocopia_atleta); 
								imagejpeg($image, $destino, 100);
								$src = $destino;
							
						
						echo CHtml::image( $src , 'Cedula',array('id'=>'fotocopia_imagen')); 
					?>
				</li>
			</ul>
			<?php echo $form->fileField($model1,'fotocopia_direccion',array('size'=>31,'maxlength'=>45)); ?>
		</div>
		<?php echo $form->error($model1,'fotocopia_direccion'); ?>
	</div>

	
	
	
	
	
	<div class="row">
		<?php echo $form->labelEx($model1,'telefono_habitacion_atleta'); ?>
      <?php $this->widget('CMaskedTextField',array(
        'model'=>$model1,
        'attribute'=>'telefono_habitacion_atleta',
        'mask'=>'(9999)999-99-99',
		'htmlOptions'=>array('size'=>45,'maxlength'=>45),
      ));?>
	  <?php echo $form->error($model1,'telefono_habitacion_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'telefono_celular_atleta'); ?>
		<?php $this->widget('CMaskedTextField',array(
        'model'=>$model1,
        'attribute'=>'telefono_celular_atleta',
        'mask'=>'(9999)999-99-99',
		'htmlOptions'=>array('size'=>45,'maxlength'=>45),
      ));?>
		<?php echo $form->error($model1,'telefono_celular_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'correo_electronico_atleta'); ?>
		<?php echo $form->textField($model1,'correo_electronico_atleta',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model1,'correo_electronico_atleta'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model1,'talla_camisa_atleta'); ?>
		<?php echo $form->dropDownList($model1, 'talla_camisa_atleta', CHtml::listData(TallaLetras::model()->findAll(), 'letra', 'letra'), array('empty'=>'Seleccione la talla:') ); ?>
		
		<?php echo $form->error($model1,'talla_camisa_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'talla_franela_atleta'); ?>
		<?php echo $form->dropDownList($model1, 'talla_franela_atleta', CHtml::listData(TallaLetras::model()->findAll(), 'letra', 'letra'), array('empty'=>'Seleccione la talla:') ); ?>
		<?php echo $form->error($model1,'talla_franela_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'talla_pantalon_atleta'); ?>
		<?php echo $form->dropDownList($model1, 'talla_pantalon_atleta', CHtml::listData(TallaPantalon::model()->findAll(), 'pantalon', 'pantalon'), array('empty'=>'Seleccione la talla:') ); ?>
		<?php echo $form->error($model1,'talla_pantalon_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'talla_short_atleta'); ?>
		<?php echo $form->dropDownList($model1, 'talla_short_atleta', CHtml::listData(TallaLetras::model()->findAll(), 'letra', 'letra'), array('empty'=>'Seleccione la talla:') ); ?>
		<?php echo $form->error($model1,'talla_short_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'talla_mono_atleta'); ?>
		<?php echo $form->dropDownList($model1, 'talla_mono_atleta', CHtml::listData(TallaLetras::model()->findAll(), 'letra', 'letra'), array('empty'=>'Seleccione la talla:') ); ?>
		<?php echo $form->error($model1,'talla_mono_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'talla_karategui_atleta'); ?>
		<?php echo $form->dropDownList($model1, 'talla_karategui_atleta', CHtml::listData(TallaAsiatica::model()->findAll(), 'asiatica', 'asiatica'), array('empty'=>'Seleccione la talla:') ); ?>
		<?php echo $form->error($model1,'talla_karategui_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'talla_dobok_atleta'); ?>
		<?php echo $form->dropDownList($model1, 'talla_dobok_atleta', CHtml::listData(TallaAsiatica::model()->findAll(), 'asiatica', 'asiatica'), array('empty'=>'Seleccione la talla:') ); ?>
		<?php echo $form->error($model1,'talla_dobok_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'talla_judogui_atleta'); ?>
		<?php echo $form->dropDownList($model1, 'talla_judogui_atleta', CHtml::listData(TallaAsiatica::model()->findAll(), 'asiatica', 'asiatica'), array('empty'=>'Seleccione la talla:') ); ?>
		<?php echo $form->error($model1,'talla_judogui_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'talla_traje_natacion_atleta'); ?>
		<?php $arr1 = CHtml::listData(TallaLetras::model()->findAll(), 'letra', 'letra');
		echo $form->dropDownList($model1, 'talla_traje_natacion_atleta', $arr1, array('empty'=>'Seleccione la talla:') ); ?>
		<?php echo $form->error($model1,'talla_traje_natacion_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'talla_calzado_atleta'); ?>
		<?php echo $form->dropDownList($model1, 'talla_calzado_atleta', CHtml::listData(TallaPantalon::model()->findAll(), 'pantalon', 'pantalon'), array('empty'=>'Seleccione la talla:') ); ?>
		<?php echo $form->error($model1,'talla_calzado_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'talla_trusa_atleta'); ?>
		<?php echo $form->dropDownList($model1, 'talla_trusa_atleta', CHtml::listData(TallaLetras::model()->findAll(), 'letra', 'letra'), array('empty'=>'Seleccione la talla:') ); ?>
		<?php echo $form->error($model1,'talla_trusa_atleta'); ?>
	</div>
	
	
	<div class="row">
		<?php echo $form->labelEx($model1,'peso_atleta'); ?>
		<?php $data = range(0, 220);
			  echo $form->dropDownList($model1, 'peso_atleta', $data, array('empty'=>'Seleccione el peso:') ); ?>
		
		<?php echo $form->error($model1,'peso_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'estatura_atleta'); ?>
		<?php echo $form->dropDownList($model1, 'estatura_atleta', CHtml::listData(EstaturaAtleta::model()->findAll(), 'estatura', 'estatura'), array('empty'=>'Seleccione la estatura:') ); ?>
		<?php echo $form->error($model1,'estatura_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'alergias_atleta'); ?>
		<?php echo $form->textArea($model1,'alergias_atleta',array( 'rows'=>4, 'cols'=>36)); ?>
		<?php echo $form->error($model1,'alergias_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'evaluacion_medica_atleta'); ?>
		<?php $data = array('Si'=>'Si','No'=>'No');
				
			  echo $form->radioButtonList($model1,'evaluacion_medica_atleta',  $data, array('separator'=>' ','labelOptions'=>array('style'=>'display:inline;')) ); ?>
		<?php echo $form->error($model1,'evaluacion_medica_atleta'); ?>
	</div>
	
	

	<div class="row">
		<?php echo $form->labelEx($model1,'pertenece_ucv_atleta'); ?>
		<?php $data = array('Si'=>'Si','No'=>'No');
				
			  echo $form->radioButtonList($model1,'pertenece_ucv_atleta',  $data, array('separator'=>' ','labelOptions'=>array('style'=>'display:inline;')) ); ?>
		<?php echo $form->error($model1,'pertenece_ucv_atleta'); ?>
	</div>
	

	<div class="row">
		<?php echo $form->labelEx($model1,'sector_atleta'); ?>
		<?php echo $form->dropDownList($model1, 'sector_atleta', CHtml::listData(Sector::model()->findAll(), 'sector', 'sector'), array('empty'=>'Seleccione el sector:') ); ?>
		<?php echo $form->error($model1,'sector_atleta'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model1,'facultad_atleta'); ?>
		
		
		<?php echo $form->dropDownList($model1, 'facultad_atleta', CHtml::listData(FacultadAtleta::model()->findAll(), 'facultad', 'facultad'), 
		array(
			'empty'=>'Seleccione la facultad:',
			 'ajax' => array(			
                                'type'=>'POST',									
                                'url'=>CController::createUrl('generarEscuelasPersonal'), 
                                'update'=>'#'.CHtml::activeId($model1,'escuela_atleta')), 
			
			) ); ?>
		
		
		
		<?php echo $form->error($model1,'facultad_atleta'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model1,'escuela_atleta'); ?>
		<?php echo $form->dropDownList($model1, 'escuela_atleta', CHtml::listData(EscuelaAtleta::model()->findAll(), 'escuela', 'escuela'), array('empty'=>'Seleccione la escuela:') ); ?>
		<?php echo $form->error($model1,'escuela_atleta'); ?>
	</div>	
	
	<div class="row">
		<?php echo $form->labelEx($model1,'institucion_trabajo_atleta'); ?>
		<?php echo $form->textField($model1,'institucion_trabajo_atleta',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model1,'institucion_trabajo_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'departamento_trabajo_atleta'); ?>
		<?php echo $form->textField($model1,'departamento_trabajo_atleta',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model1,'departamento_trabajo_atleta'); ?>
	</div>
	
	<div class="divisiones">DATOS ACADÉMICOS</div>
	
	<div class="row">
		<?php echo $form->labelEx($model2,'year_ingreso_educacion_superior_atleta'); ?>			
		<?php 	$data = CHtml::listData(Year::model()->findAll(), 'year', 'year');
				echo $form->dropDownList($model2, 'year_ingreso_educacion_superior_atleta', $data, array('empty'=>'Seleccione el Año:') ); ?>	
		<?php echo $form->error($model2,'year_ingreso_educacion_superior_atleta'); ?>
	</div>	

	<div class="row">
		<?php echo $form->labelEx($model2,'semestre_year_cursa_atleta'); ?>
				   
			  
			  <?php echo $form->dropDownList($model2, 'semestre_year_cursa_atleta', CHtml::listData(Semestre::model()->findAll(), 'semestre', 'semestre'), array('empty'=>'Seleccione el número:') ); ?>
		
		<?php echo $form->error($model2,'semestre_year_cursa_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'estatus_actual_atleta'); ?>
		<?php echo $form->dropDownList($model2, 'estatus_actual_atleta', CHtml::listData(EstatusAcademico::model()->findAll(), 'estatus_academico', 'estatus_academico'), array('empty'=>'Seleccione el estatus:') ); ?>
		
		<?php echo $form->error($model2,'estatus_actual_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'year_ingreso_ucv_atleta'); ?>
		
		<?php echo $form->dropDownList($model2, 'year_ingreso_ucv_atleta', CHtml::listData(Year::model()->findAll(), 'year', 'year'), array('empty'=>'Seleccione el año:') ); ?>
		<?php echo $form->error($model2,'year_ingreso_ucv_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'tipo_ingreso_ucv_atleta'); ?>
		<?php echo $form->dropDownList($model2, 'tipo_ingreso_ucv_atleta', CHtml::listData(TipoIngreso::model()->findAll(), 'ingreso', 'ingreso'), array('empty'=>'Seleccione el tipo:') ); ?>
		<?php echo $form->error($model2,'tipo_ingreso_ucv_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'cambio_escuela_atleta'); ?>
		<?php $data = array('Si'=>'Si','No'=>'No');				
			  echo $form->radioButtonList($model2,'cambio_escuela_atleta',  $data, array('separator'=>' ','labelOptions'=>array('style'=>'display:inline;')) ); ?>
		<?php echo $form->error($model2,'cambio_escuela_atleta'); ?>
	</div>
	
	<div class="row">
		<b>En caso de ser afirmativa la respuesta, indique para la carrera anteriormente cursada:</b>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'facultad_anterior_atleta'); ?>
		<?php echo $form->dropDownList($model2, 'facultad_anterior_atleta', CHtml::listData(FacultadAtleta::model()->findAll(), 'facultad', 'facultad'), 
		array(
			'empty'=>'Seleccione la facultad:',
			 'ajax' => array(			
                                'type'=>'POST',									
                                'url'=>CController::createUrl('generarEscuelasAcademico'), 
                                'update'=>'#'.CHtml::activeId($model2,'escuela_anterior_atleta')), 
			
			) ); ?>
		
		<?php echo $form->error($model2,'facultad_anterior_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'escuela_anterior_atleta'); ?>
		<?php echo $form->dropDownList($model2, 'escuela_anterior_atleta', CHtml::listData(EscuelaAtleta::model()->findAll(), 'escuela', 'escuela'), array('empty'=>'Seleccione la escuela:') ); ?>
		
		<?php echo $form->error($model2,'escuela_anterior_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'year_ingreso_anterior_atleta'); ?>
		<?php echo $form->dropDownList($model2, 'year_ingreso_anterior_atleta', CHtml::listData(Year::model()->findAll(), 'year', 'year'), array('empty'=>'Seleccione el año:') ); ?>
		
		<?php echo $form->error($model2,'year_ingreso_anterior_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'tipo_ingreso_anterior_atleta'); ?>
		<?php echo $form->dropDownList($model2, 'tipo_ingreso_anterior_atleta', CHtml::listData(TipoIngreso::model()->findAll(), 'ingreso', 'ingreso'), array('empty'=>'Seleccione el ingreso:') ); ?>
		
		<?php echo $form->error($model2,'tipo_ingreso_anterior_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'semestre_year_anterior_aprobado_atleta'); ?>
		<?php echo $form->dropDownList($model2, 'semestre_year_anterior_aprobado_atleta', CHtml::listData(Semestre::model()->findAll(), 'semestre', 'semestre'), array('empty'=>'Seleccione el año:') ); ?>
		
		<?php echo $form->error($model2,'semestre_year_anterior_aprobado_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'es_becado_atleta'); ?>
		<?php $data = array('Si'=>'Si','No'=>'No');				
			  echo $form->radioButtonList($model2,'es_becado_atleta',  $data, array('separator'=>' ','labelOptions'=>array('style'=>'display:inline;')) ); ?>
		
		<?php echo $form->error($model2,'es_becado_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'institucion_beca_atleta'); ?>
		<?php echo $form->textField($model2,'institucion_beca_atleta',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model2,'institucion_beca_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'estudios_superiores_anteriores_atleta'); ?>
		<?php $data = array('Si'=>'Si','No'=>'No');				
			  echo $form->radioButtonList($model2,'estudios_superiores_anteriores_atleta',  $data, array('separator'=>' ','labelOptions'=>array('style'=>'display:inline;')) ); ?>
		
		<?php echo $form->error($model2,'estudios_superiores_anteriores_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'institucion_superior_anterior_atleta'); ?>
		<?php echo $form->textField($model2,'institucion_superior_anterior_atleta',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model2,'institucion_superior_anterior_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'materia_deporte_atleta'); ?>
		<?php $data = array('Si'=>'Si','No'=>'No');				
			  echo $form->radioButtonList($model2,'materia_deporte_atleta',  $data, array('separator'=>' ','labelOptions'=>array('style'=>'display:inline;')) ); ?>
		
		<?php echo $form->error($model2,'materia_deporte_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'deportes1_periodo_atleta'); ?>
		<?php echo $form->dropDownList($model2, 'deportes1_periodo_atleta', CHtml::listData(PeriodoLectivo::model()->findAll(), 'lectivo', 'lectivo'), array('empty'=>'Seleccione el período:') ); ?>
		
		<?php echo $form->error($model2,'deportes1_periodo_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'deportes1_nota_atleta'); ?>
		<?php echo $form->dropDownList($model2, 'deportes1_nota_atleta', CHtml::listData(Notas::model()->findAll(), 'nota', 'nota'), array('empty'=>'Seleccione la nota:') ); ?>
		
		<?php echo $form->error($model2,'deportes1_nota_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'deportes1_actividades_atleta'); ?>
		<?php echo $form->textArea($model2,'deportes1_actividades_atleta',array( 'rows'=>4, 'cols'=>36)); ?>
		
		<?php echo $form->error($model2,'deportes1_actividades_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'deportes2_periodo_atleta'); ?>
		<?php echo $form->dropDownList($model2, 'deportes2_periodo_atleta', CHtml::listData(PeriodoLectivo::model()->findAll(), 'lectivo', 'lectivo'), array('empty'=>'Seleccione el período:') ); ?>
		
		<?php echo $form->error($model2,'deportes2_periodo_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'deportes2_nota_atleta'); ?>
		<?php echo $form->dropDownList($model2, 'deportes2_nota_atleta', CHtml::listData(Notas::model()->findAll(), 'nota', 'nota'), array('empty'=>'Seleccione la nota:') ); ?>
		
		<?php echo $form->error($model2,'deportes2_nota_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'deportes2_actividades_atleta'); ?>
		<?php echo $form->textArea($model2,'deportes2_actividades_atleta',array( 'rows'=>4, 'cols'=>36)); ?>
		
		<?php echo $form->error($model2,'deportes2_actividades_atleta'); ?>
	</div>
	
	
	
	<div class="divisiones">DATOS DEPORTIVOS</div>
	
	<div class="row">
		<?php echo $form->labelEx($model3,'es_atleta_activo'); ?>
		<?php $data = array('Activo'=>'Activo','Inactivo'=>'Inactivo');				
			  echo $form->radioButtonList($model3,'es_atleta_activo',  $data, array('separator'=>' ','labelOptions'=>array('style'=>'display:inline;')) );?>  
		<?php echo $form->error($model3,'es_atleta_activo'); ?>
	</div>
	
	
	<div class="row">
		<?php echo $form->labelEx($model3,'disciplina_atleta'); ?>
		<?php 	$data = CHtml::listData(Disciplina::model()->findAll(), 'disciplina', 'disciplina');
				echo $form->dropDownList($model3, 'disciplina_atleta', $data, array('empty'=>'Seleccione la disciplina:') ); ?>	
		<?php echo $form->error($model3,'disciplina_atleta'); ?>
	</div>
	
	

	

	



	<div class="row">
		<?php echo $form->labelEx($model3,'year_inscripcion_disciplina_atleta'); ?>
		<?php echo $form->dropDownList($model3, 'year_inscripcion_disciplina_atleta', CHtml::listData(Year::model()->findAll(), 'year', 'year'), array('empty'=>'Seleccione el año:') ); ?>
		<?php echo $form->error($model3,'year_inscripcion_disciplina_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model3,'dependencia_disciplina_atleta'); ?>
		<?php 	$data = CHtml::listData(DependenciaDisciplina::model()->findAll(), 'dependencia', 'dependencia');
				echo $form->dropDownList($model3, 'dependencia_disciplina_atleta', $data, array('empty'=>'Seleccione la dependencia:') ); ?>	
		<?php echo $form->error($model3,'dependencia_disciplina_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model3,'estatus_disciplina_atleta'); ?>
		<?php 	$data = CHtml::listData(EstatusDisciplina::model()->findAll(), 'estatus_disciplina', 'estatus_disciplina');
				echo $form->dropDownList($model3, 'estatus_disciplina_atleta', $data, array('empty'=>'Seleccione el estatus:') ); ?>	
		<?php echo $form->error($model3,'estatus_disciplina_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model3,'componente_disciplina_atleta'); ?>
		<?php 	$data = CHtml::listData(ComponenteDisciplina::model()->findAll(), 'componente', 'componente');
				echo $form->dropDownList($model3, 'componente_disciplina_atleta', $data, array('empty'=>'Seleccione el componente:') ); ?>	
		<?php echo $form->error($model3,'componente_disciplina_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model3,'es_seleccion_nacional_atleta'); ?>
		<?php $data = array('Si'=>'Si','No'=>'No');				
			  echo $form->radioButtonList($model3,'es_seleccion_nacional_atleta',  $data, array('separator'=>' ','labelOptions'=>array('style'=>'display:inline;')) );?>  
		<?php echo $form->error($model3,'es_seleccion_nacional_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model3,'es_seleccion_estadal_atleta'); ?>
		<?php $data = array('Si'=>'Si','No'=>'No');				
			  echo $form->radioButtonList($model3,'es_seleccion_estadal_atleta',  $data, array('separator'=>' ','labelOptions'=>array('style'=>'display:inline;')) );?>  
		<?php echo $form->error($model3,'es_seleccion_estadal_atleta'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model3,'dia_practica_atleta'); ?>
		<?php 	$data = CHtml::listData(DiaPractica::model()->findAll(), 'dia', 'dia');
				echo $form->dropDownList($model3, 'dia_practica_atleta', $data, array('empty'=>'Seleccione el Día:') ); ?>	
		<?php echo $form->error($model3,'dia_practica_atleta'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model3,'horario_practica_atleta'); ?>
		<?php 	$data = CHtml::listData(HoraPractica::model()->findAll(), 'hora', 'hora');
				echo $form->dropDownList($model3, 'horario_practica_atleta', $data, array('empty'=>'Seleccione el horario:') ); ?>	 
		<?php echo $form->error($model3,'horario_practica_atleta'); ?>
	</div>
	
	
	
		
				
	
	<?php
		$this->widget('ext.jqrelcopy.JQRelcopy',
                 array(
                       'id' => 'copylink',
                       
					   
                       ));
		?>
		
	
	<div class="divisiones">PARTICIPACIÓN EN EXHIBICIONES O CLINICAS DEPORTIVAS</div>
		<table id="exhibicion">
			<tbody>
			
				<tr>				
					<td>
						<table>
							<tbody>
								<tr>						
									<th><?php echo "Año"; ?></th>
									<th><?php echo "Nombre"; ?></th>
									<th><?php echo "Sede"; ?></th>					
									<th><?php echo "Facilitador"; ?></th>
								</tr>
							</tbody>
						</table>
					</td>
					<td><th></th>
					</td>
				</tr>
				
					
				</tr>
				<?php foreach($model5 as $i=>$item): ?>
				<tr class="row exhi">
				
					<td>
					
						<table>
							<tbody>
								<tr>
					
									
								
									<td ><?php echo CHtml::activeTextField($item,"[$i]year_exhibicion",array('size'=>10)); ?></td>
									
									<td><?php echo CHtml::activeTextField($item,"[$i]nombre_exhibicion"); ?></td>			
									<td><?php echo CHtml::activeTextField($item,"[$i]nombre_sede_exhibicion"); ?></td>
									
									<td><?php echo CHtml::activeTextField($item,"[$i]facilitador_exhibicion"); ?></td>
								</tr>
							</tbody>
						</table>
					</td>
					
					<td>
						<a href="#exh" onclick="$(this).parent().parent().remove(); return false;" style="color: red;">Eliminar</a>
					</td>
					
				</tr>				

				
				<?php endforeach; ?>
			
			</tbody>
		</table>
		<a id="copylink" href="#exh" rel=".exhi">Agregar fila</a>
				<?php
		$this->widget('ext.jqrelcopy.JQRelcopy',
                 array(
                       'id' => 'copylink2',
                       
					   
                       ));
		?>
		
	
	<div class="divisiones">RECONOCIMIENTOS RECIBIDOS</div>
<table id="exhibicion">
			<tbody>
			
				<tr>				
					<td>
						<table>
							<tbody>
								<tr>						
									<th><?php echo "Año"; ?></th>
									<th><?php echo "Nombre del reconocimiento"; ?></th>
									<th><?php echo "Institución otorgante"; ?></th>					
									<th><?php echo "Evento en el que fue otorgado"; ?></th>
								</tr>
							</tbody>
						</table>
					</td>
					<td><th></th>
					</td>
				</tr>
				
					
				</tr>
				<?php foreach($model6 as $i=>$item): ?>
				<tr class="row recon">
				
					<td>
					
						<table>
							<tbody>
								<tr>
					
									
								<td ><?php echo CHtml::activeTextField($item,"[$i]year_reconocimiento",array('size'=>10)); ?></td>
									<td><?php echo CHtml::activeTextField($item,"[$i]nombre_reconocimiento"); ?></td>			
									<td><?php echo CHtml::activeTextField($item,"[$i]institucion_reconocimiento"); ?></td>
									
									<td><?php echo CHtml::activeTextField($item,"[$i]evento_reconocimiento"); ?></td>
								</tr>
							</tbody>
						</table>
					</td>
					
					<td>
						<a href="#reco" onclick="$(this).parent().parent().remove(); return false;" style="color: red;">Eliminar</a>
					</td>
					
				</tr>				

				
				<?php endforeach; ?>
			
			</tbody>
		</table>
		<a id="copylink2" href="#reco" rel=".recon">Agregar fila</a>
			<?php
		$this->widget('ext.jqrelcopy.JQRelcopy',
                 array(
                       'id' => 'copylink3',
                       
					   
                       ));
		?>
		
		
	<div class="divisiones">SANCIONES RECIBIDAS</div>
<table id="exhibicion">
			<tbody>
			
				<tr>				
					<td>
						<table>
							<tbody>
								<tr>						
									<th><?php echo "Motivo de la sanción"; ?></th>
									<th><?php echo "Organismo sancionante"; ?></th>
									<th><?php echo "Año de inicio"; ?></th>					
									<th><?php echo "Año de fin"; ?></th>
								</tr>
							</tbody>
						</table>
					</td>
					<td><th></th>
					</td>
				</tr>
				
					
				</tr>
				<?php foreach($model7 as $i=>$item): ?>
				<tr class="row sanc">
				
					<td>
					
						<table>
							<tbody>
								<tr>
								
									<td ><?php echo CHtml::activeTextField($item,"[$i]motivo_sancion"); ?></td>									
									<td ><?php echo CHtml::activeTextField($item,"[$i]organismo_sancion"); ?></td>

									<td ><?php echo CHtml::activeTextField($item,"[$i]year_inicio_sancion",array('size'=>10)); ?></td>
									
									<td ><?php echo CHtml::activeTextField($item,"[$i]year_fin_sancion",array('size'=>10)); ?></td>
									
												
									
								</tr>
							</tbody>
						</table>
					</td>
					
					<td>
						<a href="#san" onclick="$(this).parent().parent().remove(); return false;" style="color: red;">Eliminar</a>
					</td>
					
				</tr>				

				
				<?php endforeach; ?>
			
			</tbody>
		</table>
		<a id="copylink3" href="#san" rel=".sanc">Agregar fila</a>
		<?php
		$this->widget('ext.jqrelcopy.JQRelcopy',
                 array(
                       'id' => 'copylink4',
                       
					   
                       ));
		?>
	<div class="divisiones">PARTICIPACIÓN EN COMPETENCIAS</div>
<table id="exhibicion">
			<tbody>
			
				<tr>				
					<td>
						<table>
							<tbody>
								<tr>						
									<th><?php echo "Año"; ?></th>
									<th id="nivelcompetencia"><?php echo "Nivel"; ?></th>
									<th ><?php echo "Nombre de la competencia"; ?></th>					
									<th id="lugarobtenido"><?php echo "Lugar obtenido"; ?></th>
								</tr>
							</tbody>
						</table>
					</td>
					<td><th></th>
					</td>
				</tr>
				
					
				</tr>
				<?php foreach($model4 as $i=>$item): ?>
				<tr class="row comp">
				
					<td>
					
						<table>
							<tbody>
								<tr>								
								
									<td ><?php echo CHtml::activeTextField($item,"[$i]year_competencia",array('size'=>10)); ?></td>								

									<td ><?php echo CHtml::activeTextField($item,"[$i]nivel_competencia",array('size'=>10)); ?></td>	
									
									<td ><?php echo CHtml::activeTextField($item,"[$i]nombre_competencia",array('size'=>45)); ?></td>					
									
									<td ><?php echo CHtml::activeTextField($item,"[$i]lugar_competencia",array('size'=>10)); ?></td>	
									
												
									
								</tr>
							</tbody>
						</table>
					</td>
					
					<td>
						<a href="#com" onclick="$(this).parent().parent().remove(); return false;" style="color: red;">Eliminar</a>
					</td>
					
				</tr>				

				
				<?php endforeach; ?>
			
			</tbody>
		</table>
		<a id="copylink4" href="#com" rel=".comp">Agregar fila</a>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model1->isNewRecord ? 'Registrar' : 'Actualizar'); ?>		
		<?php echo CHtml::Button('Cancelar', array('submit' => array('view','id'=>$model1->cedula_atleta))); ?>	
	</div> 

<?php $this->endWidget(); ?> 

</div><!-- form -->