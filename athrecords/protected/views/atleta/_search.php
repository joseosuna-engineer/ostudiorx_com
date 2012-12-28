<style>

div.wide.form label {
    width: 200px;
}



</style>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cedula_atleta'); ?>
		<?php echo $form->textField($model,'cedula_atleta',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre'); ?>
		<?php echo $form->textField($model,'primer_nombre_atleta',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Apellido'); ?>
		<?php echo $form->textField($model,'primer_apellido_atleta',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'escuela_atleta'); ?>
		<?php echo $form->dropDownList($model, 'escuela_atleta', CHtml::listData(EscuelaAtleta::model()->findAll(), 'escuela', 'escuela'), array('empty'=>'Seleccione la escuela:') ); ?>	
	</div>
	
	<div class="row">
		<?php echo $form->label($model2,'year_ingreso_educacion_superior_atleta'); ?>
		<?php echo $form->textField($model2,'year_ingreso_educacion_superior_atleta',array('size'=>45,'maxlength'=>45)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model3,'disciplina_atleta'); ?>
		<?php echo $form->dropDownList($model3, 'disciplina_atleta', CHtml::listData(Disciplina::model()->findAll(), 'disciplina', 'disciplina'), array('empty'=>'Seleccione la disciplina:') ); ?>	
	</div>
	
	<div class="row">
		<?php echo $form->label($model3,'es_atleta_activo'); ?>
		<?php $data=array('Activo'=>'Activo','Inactivo'=>'Inactivo');
		echo $form->dropDownList($model3, 'es_atleta_activo', $data, array('empty'=>'Seleccione el estatus:') ); ?>	
	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
		<?php echo CHtml::resetButton('Borrar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->