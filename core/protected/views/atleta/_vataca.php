<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(	
		array(               
			'label'=>$model->getAttributeLabel('year_ingreso_educacion_superior_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->year_ingreso_educacion_superior_atleta),				
		),	
		array(               
			'label'=>$model->getAttributeLabel('escuela_estudia_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->escuela_estudia_atleta),				
		),		

		
		
		array(               
			'label'=>$model->getAttributeLabel('semestre_year_cursa_atleta'),
            'type'=>'text',
			'value'=>CHtml::encode($model->semestre_year_cursa_atleta),	
		),

		
		
		array(               
			'label'=>$model->getAttributeLabel('estatus_actual_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->estatus_actual_atleta),				
		),

		
		array(               
			'label'=>$model->getAttributeLabel('year_ingreso_ucv_atleta'),
            'type'=>'text',
			'value'=>CHtml::encode($model->year_ingreso_ucv_atleta),	
		),

		
		
		array(               
			'label'=>$model->getAttributeLabel('tipo_ingreso_ucv_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->tipo_ingreso_ucv_atleta),				
		),

		
		
		array(               
			'label'=>$model->getAttributeLabel('cambio_escuela_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->cambio_escuela_atleta),				
		),

		
		
		array(               
			'label'=>$model->getAttributeLabel('facultad_anterior_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->facultad_anterior_atleta),				
		),

		
		
		array(               
			'label'=>$model->getAttributeLabel('escuela_anterior_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->escuela_anterior_atleta),				
		),

		
		
		array(               
			'label'=>$model->getAttributeLabel('year_ingreso_anterior_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->year_ingreso_anterior_atleta),					
		),

		
		
		array(               
			'label'=>$model->getAttributeLabel('tipo_ingreso_anterior_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->tipo_ingreso_anterior_atleta),				
		),

		
		
		array(               
			'label'=>$model->getAttributeLabel('semestre_year_anterior_aprobado_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->semestre_year_anterior_aprobado_atleta),				
		),

		
		
		array(               
			'label'=>$model->getAttributeLabel('es_becado_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->es_becado_atleta),				
		),

		
		
		array(               
			'label'=>$model->getAttributeLabel('institucion_beca_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->institucion_beca_atleta),				
		),

		
		
		array(               
			'label'=>$model->getAttributeLabel('estudios_superiores_anteriores_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->estudios_superiores_anteriores_atleta),				
		),

		
		
		array(               
			'label'=>$model->getAttributeLabel('institucion_superior_anterior_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->institucion_superior_anterior_atleta),				
		),

		
		array(               
			'label'=>$model->getAttributeLabel('materia_deporte_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->materia_deporte_atleta),				
		),

		
		
		array(               
			'label'=>$model->getAttributeLabel('deportes1_periodo_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->deportes1_periodo_atleta),				
		),

		
		
		array(               
			'label'=>$model->getAttributeLabel('deportes1_nota_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->deportes1_nota_atleta),				
		),

		
		
		array(               
			'label'=>$model->getAttributeLabel('deportes1_actividades_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->deportes1_actividades_atleta),				
		),

		
		array(               
			'label'=>$model->getAttributeLabel('deportes2_periodo_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->deportes2_periodo_atleta),				
		),

		
		
		array(               
			'label'=>$model->getAttributeLabel('deportes2_nota_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->deportes2_nota_atleta),				
		),

		
		
		array(               
			'label'=>$model->getAttributeLabel('deportes2_actividades_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->deportes2_actividades_atleta),				
		),
	),
)); ?>