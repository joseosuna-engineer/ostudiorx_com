<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
	
		
	  array(               
				'label'=>$model->getAttributeLabel('es_atleta_activo'),
                'type'=>'text',
                'value'=>CHtml::encode($model->es_atleta_activo),				
          ),
		
		array(               
			'label'=>$model->getAttributeLabel('disciplina_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->disciplina_atleta),			
		),
		
		
		array(               
			'label'=>$model->getAttributeLabel('year_inscripcion_disciplina_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->year_inscripcion_disciplina_atleta),			
		),
		array(               
			'label'=>$model->getAttributeLabel('dependencia_disciplina_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->dependencia_disciplina_atleta),			
		),
		array(               
			'label'=>$model->getAttributeLabel('estatus_disciplina_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->estatus_disciplina_atleta),			
		),
		array(               
			'label'=>$model->getAttributeLabel('componente_disciplina_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->componente_disciplina_atleta),			
		),
		array(               
			'label'=>$model->getAttributeLabel('es_seleccion_nacional_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->es_seleccion_nacional_atleta),			
		),
		array(               
			'label'=>$model->getAttributeLabel('es_seleccion_estadal_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->es_seleccion_estadal_atleta),			
		),
		array(               
			'label'=>$model->getAttributeLabel('dia_practica_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->dia_practica_atleta),			
		),
		array(               
			'label'=>$model->getAttributeLabel('horario_practica_atleta'),
            'type'=>'text',
            'value'=>CHtml::encode($model->horario_practica_atleta),			
		),
	),
)); ?>