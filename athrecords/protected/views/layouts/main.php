<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />

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
var conectado;
$(document).ready(function() {	
	conectado = true;
	checkConnection();
});
function liftOff() { 
    $('#error-conect').countdown('destroy'); 
	$('#error-conect').text('0'); 
} 

function checkConnection() {
	$('#error-conect').countdown({onExpiry: liftOff, until: 9, compact: true, format: 'S'});
	
    $.ajax({
        type:"post",
        url:"http://localhost:8080",
        error:function(XMLHttpRequest, textStatus, errorThrown) { 
            
			if(conectado==true){
				$.blockUI({ message: '<div style="font: arial 14px; font-weight:normal; line-height:16px; "><b>Sin conexi&oacute;n</b> Falta(n) <span id="error-conect">10</span> s para conectarse. (001)</div>', css: { backgroundColor: '#F9EDBE', borderColor: '#F9EDBE' } });
				
				conectado = false;
			}
			
        },
		success: function()
        {
            if(conectado==false){
				$.unblockUI();
				conectado = true;
			}
			
			
             
        },
               
    });
    
    setTimeout(function() {
        checkConnection();
    }, 2000);
}
	
</script>

	<?php echo $content; ?>

	<div id="footer">
		Derechos de Autor &copy; <?php echo date('Y'); ?> UTI - UCV.<br/>
		Todos los derechos reservados.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>