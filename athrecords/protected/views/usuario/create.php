<style>

	input[type=text]{
		border:1px solid #CCC;		
		font-size:16px;
		padding:9px 0px 7px 9px;
		display:block; 		 
		-moz-border-radius:3px;		
		-webkit-border-radius:3px;
		-khtml-border-radius:3px;
		border-radius:3px;	
		transition:border linear .2s,box-shadow linear .2s;
		-moz-transition:border linear .2s,-moz-box-shadow linear .2s;
		-webkit-transition:border linear .2s,-webkit-box-shadow linear .2s;
		text-shadow:0 0 1px white;
	}
	
		input[type=file]{
		background-color: #FFF;
		 
		
	}
	
	input[type=text]:hover, select:hover, textarea:hover	{
		border-color: #999;
	}
	
	input[type=text]:focus, select:focus, textarea:focus {
		outline:none;
		border-color:rgba(82,168,236,.75)!important;
		box-shadow:0 0 8px rgba(82,168,236,.5);
		-moz-box-shadow:0 0 8px rgba(82,168,236,.5);
		-webkit-box-shadow:0 0 8px rgba(82,168,236,.5);
	}
	
	select, textarea {
		border:1px solid #CCC;
		font-size:16px;
		padding:7px 5px 7px 1px;
		-moz-border-radius:3px;		
		-webkit-border-radius:3px;
		-khtml-border-radius:3px;
		border-radius:3px;
	}
	
	input[type=submit] {		
		background: #DDD url(<?php echo Yii::app()->request->baseUrl; ?>/css/bg-btn.gif) repeat-x 0 0;
		border-color: #BBB #BBB #999;
		border-style: solid;
		border-width: 1px;	
		font-size:16px;
		height:36px;
		padding:0px 25px;
		-moz-border-radius:4px;
		-khtml-border-radius:4px;
		-webkit-border-radius:4px;
		border-radius:4px;
		cursor:pointer;		 
		text-shadow:0 1px #F0F0F0;
		color:#333!important;
		-moz-box-shadow:0px 1px 0px #F8F8F8;
		-webkit-box-shadow:0px 1px 0px #F8F8F8;
		box-shadow:0px 1px 0px #F8F8F8;			
	}
	
	input[type=submit]:hover {
				
				background-position: 0 -6px;
				border-color: #999 #999 #666;
				color: #000;
				text-decoration: none;					
	}


</style>

<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar usuarios', 'url'=>array('index')),
	array('label'=>'Búsqueda avanzada', 'url'=>array('admin')),
);
?>

<h1>Registrar Usuario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>