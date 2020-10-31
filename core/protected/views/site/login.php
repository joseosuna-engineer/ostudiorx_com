
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/masEstilos.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		estiloVisualLogin();
	});
</script>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.countdown.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.blockUI.js"></script>


<style>
	#LoginForm_username, #LoginForm_password{
		border:1px solid #CCC;
	}

	div.row.buttons input {
		background: #DDD url(<?php echo Yii::app()->request->baseUrl; ?>/css/bg-btn.gif) repeat-x 0 0;
		border-color: #BBB #BBB #999;
		border-style: solid;
		border-width: 1px;
	}

	#LoginForm_username:focus, #LoginForm_password:focus {
		outline:none;
		border-color:rgba(82,168,236,.75)!important;
		box-shadow:0 0 8px rgba(82,168,236,.5);
		-moz-box-shadow:0 0 8px rgba(82,168,236,.5);
		-webkit-box-shadow:0 0 8px rgba(82,168,236,.5);
	}
</style>


<?php
$this->pageTitle=Yii::app()->name . ' - Acceso';
?>
<div id="cabecera">
    <div style="text-align: right;">
        <img src="/images/logo.png" alt="Logo" style="width: 15px; margin:0 auto;">
        <span style="font-size: 12px;">CHACAO</span>
    </div>
    <h1>Acceso</h1>
</div>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>

	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton('Acceder'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
