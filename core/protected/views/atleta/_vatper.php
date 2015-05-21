<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
	
	  array(               
				'label'=>$model->getAttributeLabel('cedula_atleta'),
                'type'=>'text',
                'value'=>Yii::app()->numberFormatter->format( "#,###", CHtml::encode($model->cedula_atleta)),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('primer_nombre_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->primer_nombre_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('segundo_nombre_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->segundo_nombre_atleta),				
          ),
		  array(              
				'label'=>$model->getAttributeLabel('primer_apellido_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->primer_apellido_atleta),				
          ),
		 array(              
				'label'=>$model->getAttributeLabel('segundo_apellido_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->segundo_apellido_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('correo_electronico_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->correo_electronico_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('foto_atleta'),
                'type' => 'image',
                'value'=> Yii::app()->request->baseUrl.'/images/mostrarFoto.php?id='.$model->cedula_atleta,
								
				
		 ),
		 
		  array(              
				'label'=>$model->getAttributeLabel('sexo_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->sexo_atleta),				
          ),
		  array(              
				'label'=>'Fecha de nacimiento',
                'type'=>'text',
                'value'=> empty($model->fecha_nacimiento_atleta) ? '': Yii::app()->dateFormatter->format("dd-MM-yyyy", $model->fecha_nacimiento_atleta),				
          ),
		  array(               
				'label'=>'Lugar de nacimiento',
                'type'=>'text',
                'value'=>'País: '.CHtml::encode($model->pais_nacimiento_atleta).' - Estado: '.CHtml::encode($model->estado_nacimiento_atleta),				
          ),
		  array(              
				'label'=>$model->getAttributeLabel('estado_civil_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->estado_civil_atleta),				
          ),
		  array(              
				'label'=>$model->getAttributeLabel('nacionalidad_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->nacionalidad_atleta),				
          ),
		  
		 
		  array(              
				'label'=>'Dirección de habitación',
                'type'=>'text',
                'value'=>'Estado: '.CHtml::encode($model->direccion_estado_atleta).' - Municipio: '.CHtml::encode($model->direccion_municipio_atleta).' - '.CHtml::encode($model->direccion_tipo_calle_atleta).': '.CHtml::encode($model->direccion_calle_atleta),				
          ),
		  
		  array(               
				'label'=>$model->getAttributeLabel('fotocopia_cedula_atleta'),
                'type' => 'image',
                'value'=> Yii::app()->request->baseUrl.'/images/mostrarCopia.php?id='.$model->cedula_atleta,
				
		 ),
		 
		 array(               
				'label'=>$model->getAttributeLabel('telefono_habitacion_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->telefono_habitacion_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('telefono_celular_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->telefono_celular_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('talla_camisa_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->talla_camisa_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('talla_franela_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->talla_franela_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('talla_pantalon_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->talla_pantalon_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('talla_short_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->talla_short_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('talla_mono_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->talla_mono_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('talla_karategui_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->talla_karategui_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('talla_dobok_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->talla_dobok_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('talla_judogui_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->talla_judogui_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('talla_traje_natacion_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->talla_traje_natacion_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('talla_calzado_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->talla_calzado_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('talla_trusa_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->talla_trusa_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('peso_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->peso_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('estatura_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->estatura_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('alergias_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->alergias_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('evaluacion_medica_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->evaluacion_medica_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('pertenece_ucv_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->pertenece_ucv_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('sector_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->sector_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('facultad_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->facultad_atleta),				
          ),
		  
		 
		
			array(   		          
				'label'=>$model->getAttributeLabel('escuela_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->escuela_atleta),			
          ), 	
		
		  
		  
		  array(               
				'label'=>$model->getAttributeLabel('institucion_trabajo_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->institucion_trabajo_atleta),				
          ),
		  array(               
				'label'=>$model->getAttributeLabel('departamento_trabajo_atleta'),
                'type'=>'text',
                'value'=>CHtml::encode($model->departamento_trabajo_atleta),				
          ),	  
	),
)); ?>