<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.countdown.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.blockUI.js"></script>


<script type="text/javascript">
	$(document).ready(function() {
		$("#AtletaPersonal_cedula_atleta").focus();
	});
</script>

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
	
	input[type=submit], input[type=button] {		
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
	
	input[type=submit]:hover, input[type=button]:hover {
				
				background-position: 0 -6px;
				border-color: #999 #999 #666;
				color: #000;
				text-decoration: none;					
	}
	#foto{
		border: 1px #ECF1F5 solid;
		-webkit-border-radius:3px;
		-moz-border-radius:3px;
		-khtml-border-radius:3px;
		border-radius:3px;	
		width:132px;
		background-color: #ECF1F5;
	}
	#AtletaPersonal_foto_direccion{
		margin: 2px;
		
	}
	#foto_imagen, #galeria li img{
		margin: 2px 2px 0px 2px;
		width:128px;
		height:149px;
	}
	#galeria{
		list-style:none;
		margin:0px;
		padding:0px;
	}
	#galeria li{
		margin:0px;
		padding:0px;
	}
	
	#fotocopia{
		border: 1px #ECF1F5 solid;
		-webkit-border-radius:3px;
		-moz-border-radius:3px;
		-khtml-border-radius:3px;
		border-radius:3px;	
		width:300px;
		background-color: #ECF1F5;
	}
	#AtletaPersonal_fotocopia_direccion{
		margin: 2px;
		
	}
	#fotocopia_imagen, #galeria2 li img{
		margin: 2px 2px 0px 2px;
		width:296px;
		height:200px;
	}
	#galeria2{
		list-style:none;
		margin:0px;
		padding:0px;
	}
	#galeria2 li{
		margin:0px;
		padding:0px;
	}
	#exhibicion th{
		text-align:center;
	}
	#exhibicion input{
		width: 100%;
	}
	
	#nivelcompetencia{
		padding-left: 50px;
	}
	
	

</style>

<?php
$this->breadcrumbs=array(
	'Lista de atletas'=>array('index'),
	Yii::app()->numberFormatter->format("#,###", $model1->cedula_atleta)=>array('view','id'=>$model1->cedula_atleta),
	'Actualizar atleta',
);

$this->menu=array(
	array('label'=>'Datos del atleta', 'url'=>array('view', 'id'=>$model1->cedula_atleta)),
	array('label'=>'Registrar atleta', 'url'=>array('create')),
	array('label'=>'Listar atletas', 'url'=>array('index')),
	array('label'=>'Búsqueda Avanzada', 'url'=>array('admin')),
);
?>

<h1><?php echo $model1->primer_nombre_atleta.' '.$model1->primer_apellido_atleta; ?></h1>

<?php echo $this->renderPartial('_formXL', array(
			'model1'=>$model1,
			'model2'=>$model2,
			'model3'=>$model3,
			'model4'=>$model4,
			'model5'=>$model5,
			'model6'=>$model6,			
			'model7'=>$model7,
			'model8'=>$model8,
			'model9'=>$model9,
			)); ?>