<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.countdown.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.blockUI.js"></script>

<style>
.grid-view table.items td {
	text-align:center;

{

</style>
<?php
$this->breadcrumbs=array(
	'Lista de atletas'=>array('index'),
	'Búsqueda avanzada',
);

$this->menu=array(
	array('label'=>'Listar Atletas', 'url'=>array('index')),
	array('label'=>'Registrar Atleta', 'url'=>array('create')),
	array('label'=>'Imprimir Búsqueda', 'url'=>array('generarPdfBusqueda')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('atleta-personal-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<h1>Búsqueda Avanzada</h1>


<ul>
<li>Para ordenar los resultados dale clic en el título de cada columna.</li>
<li>Haciendo clic en "<u>Búsqueda Avanzada</u>" aparecerá el formulario para búsquedas.</li>
<li>Opcionalmente puedes insertar uno de los siguientes operadores de comparación (<, <=, >, >=, <> o =)<br>en cada campo de tus búsquedas para especificar cómo debería hacerse la comparación.</li> 
<li>También puedes ver la información detallada de cada atleta, actualizarla y descargarla en pdf.</li>
</ul>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
	'model2'=>$model2,
	'model3'=>$model3,
)); ?>
</div><!-- search-form -->

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'atleta-personal-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'atletaDeportivo.es_atleta_activo',
		array(
			'name'=>'atletaAcademico.year_ingreso_educacion_superior_atleta',
			'value'=>'$data->atletaAcademico->year_ingreso_educacion_superior_atleta',
			
		),	
				
		'atletaDeportivo.disciplina_atleta',		
		'escuela_atleta',
		array(               
			'name'=>'cedula_atleta',
			'value'=>'Yii::app()->numberFormatter->format( "#,###", $data->cedula_atleta)',	
          ),
		  'primer_nombre_atleta',
		  'primer_apellido_atleta',				
		array(
			'class'=>'CButtonColumn', // botones de la columna derecha
			'template' => '{view} {update} {pdf}',
			'buttons'  => array(
				'update' => array(
					'label' => 'Actualizar', 
				),
				'pdf' => array(
					'label' =>'PDF',
					'url'=>"CHtml::normalizeUrl(array('generarPdfAtleta', 'id'=>\$data->cedula_atleta))",
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/pdf_icon.png', 
                    'options' => array('class'=>'pdf'),
				),
			)
		),
	),
)); ?>
