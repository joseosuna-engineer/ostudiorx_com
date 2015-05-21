

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_atleta')); ?>:</b>
	<?php $cedula = Yii::app()->numberFormatter->format( "#,###", CHtml::encode($data->cedula_atleta));
	echo CHtml::link($cedula, array('view', 'id'=>$data->cedula_atleta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primer_nombre_atleta')); ?>:</b>
	<?php echo CHtml::encode($data->primer_nombre_atleta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primer_apellido_atleta')); ?>:</b>
	<?php echo CHtml::encode($data->primer_apellido_atleta); ?>
	<br />	
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('sector_atleta')); ?>:</b>
	<?php echo CHtml::encode($data->sector_atleta); ?>
	<br />
	
	<?php // Si el campo es vacio entonces no lo muestres
		$att = $data->escuela_atleta;
		if(!empty($att)){
			echo '<b>'.CHtml::encode($data->getAttributeLabel('escuela_atleta')).': </b>';
			echo CHtml::encode($data->escuela_atleta).'<br />'; 	
		}
	
	?>
	
	<?php /* accediendo a la tabla atletaPersonal->atletaAcademico a traves de join  */ ?>
	<b><?php echo CHtml::encode($data->atletaAcademico->getAttributeLabel('year_ingreso_educacion_superior_atleta')); ?>:</b>
	<?php echo CHtml::encode($data->atletaAcademico->year_ingreso_educacion_superior_atleta); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->atletaDeportivo->getAttributeLabel('disciplina_atleta')); ?>:</b>
	<?php echo CHtml::encode($data->atletaDeportivo->disciplina_atleta); ?>
	<br />
	
	
	


</div>