<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/ajaxupload.js"></script> 




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
		<?php echo $form->labelEx($model1,'primer_apellido_atleta'); ?>
		<?php echo $form->textField($model1,'primer_apellido_atleta',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model1,'primer_apellido_atleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'sector_atleta'); ?>
		<?php echo $form->dropDownList($model1, 'sector_atleta', CHtml::listData(Sector::model()->findAll(), 'sector', 'sector'), array('empty'=>'Seleccione el sector:') ); ?>
		<?php echo $form->error($model1,'sector_atleta'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model1,'escuela_atleta'); ?>
		<?php echo $form->dropDownList($model1, 'escuela_atleta', CHtml::listData(EscuelaAtleta::model()->findAll(), 'escuela', 'escuela'), array('empty'=>'Seleccione la escuela:') ); ?>
		<?php echo $form->error($model1,'escuela_atleta'); ?>
	</div>	
	
	<div class="row">
		<?php echo $form->labelEx($model2,'year_ingreso_educacion_superior_atleta'); ?>			
		<?php 	$data = CHtml::listData(Year::model()->findAll(), 'year', 'year');
				echo $form->dropDownList($model2, 'year_ingreso_educacion_superior_atleta', $data, array('empty'=>'Seleccione el Año:') ); ?>	
		<?php echo $form->error($model2,'year_ingreso_educacion_superior_atleta'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model3,'disciplina_atleta'); ?>
		<?php 	$data = CHtml::listData(Disciplina::model()->findAll(), 'disciplina', 'disciplina');
				echo $form->dropDownList($model3, 'disciplina_atleta', $data, array('empty'=>'Seleccione la disciplina:') ); ?>	
		<?php echo $form->error($model3,'disciplina_atleta'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model3,'es_atleta_activo'); ?>
		<?php $data = array('Activo'=>'Activo','Inactivo'=>'Inactivo');				
			  echo $form->radioButtonList($model3,'es_atleta_activo',  $data, array('separator'=>' ','labelOptions'=>array('style'=>'display:inline;')) );?>  
		<?php echo $form->error($model3,'es_atleta_activo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model1->isNewRecord ? 'Registrar' : 'Actualizar'); ?>
		<?php echo CHtml::Button('Cancelar', array('submit' => array('atleta/index'))); ?>	
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->