<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />

        <!-- for apple gadgets viewport and mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

        <!-- icons -->
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="/images/favicon.ico" type="image/x-icon" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-1.6.1.js"></script>



	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(

				array('label'=>'Atletas', 'url'=>array('/atleta/index'), 'visible'=>!Yii::app()->user->isAdmin()),
				array('label'=>'Usuario', 'url'=>array('/usuario/index'), 'visible'=>Yii::app()->user->isAdmin()),

				array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<script type="text/javascript">

function liftOff() {
    $('#error-conect').countdown('destroy');
	$('#error-conect').text('0');
}



</script>

	<?php echo $content; ?>

	<div id="footer">
		Derechos de Autor &copy; <?php echo date('Y'); ?>  Producciones OSTUDIO rx C.A.<br/>
		Todos los derechos reservados.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
