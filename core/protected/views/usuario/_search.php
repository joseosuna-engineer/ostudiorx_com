<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cedula_usuario'); ?>
		<?php echo $form->textField($model,'cedula_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_usuario'); ?>
		<?php echo $form->textField($model,'nombre_usuario',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido_usuario'); ?>
		<?php echo $form->textField($model,'apellido_usuario',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clave_usuario'); ?>
		<?php echo $form->textField($model,'clave_usuario',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'identificador_usuario'); ?>
		<?php echo $form->textField($model,'identificador_usuario',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dependencia_usuario'); ?>
		<?php echo $form->textField($model,'dependencia_usuario',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rol_usuario'); ?>
		<?php echo $form->textField($model,'rol_usuario',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->