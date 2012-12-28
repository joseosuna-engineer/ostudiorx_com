<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula_usuario'); ?>
		<?php echo $form->textField($model,'cedula_usuario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cedula_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_usuario'); ?>
		<?php echo $form->textField($model,'nombre_usuario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido_usuario'); ?>
		<?php echo $form->textField($model,'apellido_usuario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apellido_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clave_usuario'); ?>
		<?php echo $form->textField($model,'clave_usuario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'clave_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'identificador_usuario'); ?>
		<?php echo $form->textField($model,'identificador_usuario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'identificador_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dependencia_usuario'); ?>
		<?php echo $form->dropDownList($model, 'dependencia_usuario', CHtml::listData(DependenciaUsuario::model()->findAll(), 'dependencia', 'dependencia'), array('empty'=>'Seleccione la dependencia:') ); ?>
		
		<?php echo $form->error($model,'dependencia_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rol_usuario'); ?>
		<?php echo $form->dropDownList($model, 'rol_usuario', CHtml::listData(Rol::model()->findAll(), 'rol', 'rol'), array('empty'=>'Seleccione el rol:') ); ?>
		<?php echo $form->error($model,'rol_usuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Actualizar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->