<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.countdown.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.blockUI.js"></script>


<style>
	
	#lang-guess-wrap{
		padding: 0;
		height: 18px;
		min-height: 18px;
		display: block;
		font-family: arial,sans-serif;	
		margin-top: -45px;		 
	}

	#lang-guess {
		padding: 5px;
		 width: 400px ;
  margin-left: auto ;
  margin-right: auto ;		
		font-family: arial,sans-serif;		
		display: block;
		text-align: center;
		font-weight: bold;
		color: #222;
		background: #F9EDBE;		
		-moz-border-radius: 2px;
		-webkit-border-radius: 2px;
		border-radius: 2px;
		border: 1px solid transparent;		
		background-color: #F9EDBE;
			border-color: #F0C36D;
	}
	.divisiones{
		background-color: #F2F2F2;
		border-bottom: none;
		border-top: solid 1px #E2E2E2;
		padding: 4px 5px 5px;
		font-size: 12px;
		color: #333;
		font-weight: bold; 
		margin: 20px 0px -25px 0px;
	}
</style>

<?php
$this->breadcrumbs=array(
	'Lista de atletas'=>array('index'),
	Yii::app()->numberFormatter->format("#,###", $model->cedula_atleta),
);
$men='El atleta <u>'.$model->primer_nombre_atleta.' '.$model->primer_apellido_atleta.'</u>ha sido actualizado satisfactoriamente.';
$this->menu=array(
	
	array('label'=>'Registrar atleta', 'url'=>array('create')),
	array('label'=>'Actualizar atleta', 'url'=>array('update', 'id'=>$model->cedula_atleta)),
	array('label'=>'Imprimir registro', 'url'=>array('generarPdfAtleta','id'=>$model->cedula_atleta)),
	array('label'=>'Listar atletas', 'url'=>array('index')),
	array('label'=>'Búsqueda Avanzada', 'url'=>array('admin')),
);
?>



<?php
if (isset($_GET['creado']))  
{
echo '<style>
		#lang-guess {
		display:block;	
	}
</style>
<script type="text/javascript">
	$(document).ready(function() {
		$("#lang-guess").fadeOut(10000);
		
	});
</script>';
}
else if (isset($_GET['actualizado']))  
{

echo '<style>
		#lang-guess {
		display:block;	
	}
</style>
<script type="text/javascript">
	$(document).ready(function() {
		$("#lang-guess").html("El atleta <u>'.$model->primer_nombre_atleta.' '.$model->primer_apellido_atleta.'</u> ha sido actualizado satisfactoriamente.");
		$("#lang-guess").fadeOut(10000);
		
		
	});
</script>';
}
else{
echo '<style>
		#lang-guess {
		display:none;	
	}
</style>';
} ?>

<?php echo 	'<div id="lang-guess-wrap">
		<div id="lang-guess">
			El atleta <u>'.$model->primer_nombre_atleta.' '.$model->primer_apellido_atleta.'</u> ha sido registrado satisfactoriamente.
		</div>
	</div>';
?>

<h1><?php echo $model->primer_nombre_atleta.' '.$model->primer_apellido_atleta.' ('.$model->atletaDeportivo->es_atleta_activo.')'; ?> </h1>
<p><?php 
$fecha_ac = Yii::app()->dateFormatter->format("dd-MM-yyyy", $model->fecha_ultima_actualizacion_registro);
$hora_ac = Yii::app()->dateFormatter->format("hh:mm a", $model->fecha_ultima_actualizacion_registro);
echo '<B>ÚLTIMA ACTUALIZACIÓN DEL REGISTRO: </b>'.$fecha_ac.'  <b>HORA: </b>'.$hora_ac.'<br>';
?></p>

<div class="divisiones">DATOS PERSONALES</div>
<?php echo $this->renderPartial('_vatper', array(
			'model'=>$model,		
)); ?>


<div class="divisiones">DATOS ACADÉMICOS</div>	
<?php echo $this->renderPartial('_vataca', array(
			'model'=>$model->atletaAcademico,		
)); ?>


<div class="divisiones">DATOS DEPORTIVOS</div>
<?php echo $this->renderPartial('_vatdep', array(
			'model'=>$model->atletaDeportivo,		
)); ?>

<div class="divisiones">PARTICIPACIÓN EN EXHIBICIONES O CLINICAS DEPORTIVAS</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataExhibicion,
	'summaryText' => '',
    'columns'=>array
    (       
        'nombre_exhibicion',
		'nombre_sede_exhibicion',
		'year_exhibicion',
		'facilitador_exhibicion',
    ),
)); ?>	

<div class="divisiones">RECONOCIMIENTOS RECIBIDOS</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataReconocimiento,
	'summaryText' => '',
    'columns'=>array
    (       
        'nombre_reconocimiento',
		'institucion_reconocimiento',
		'year_reconocimiento',
		'evento_reconocimiento',
    ),
)); ?>	
	

<div class="divisiones">SANCIONES RECIBIDAS</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataSancion,
	'summaryText' => '',
    'columns'=>array
    (       
        'motivo_sancion',
		'organismo_sancion',
		'year_inicio_sancion',
		'year_fin_sancion',
    ),
)); ?>	
	

<div class="divisiones">PARTICIPACIÓN EN COMPETENCIAS</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataCompetencia,
	'summaryText' => '',
    'columns'=>array
    (       
        'nivel_competencia',
		'nombre_competencia',
	
		'year_competencia',
		
		'lugar_competencia',
    ),
)); ?>	