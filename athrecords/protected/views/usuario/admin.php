<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Búsqueda avanzada',
);

$this->menu=array(
	array('label'=>'Listar usuarios', 'url'=>array('index')),
	array('label'=>'Registrar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('usuario-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Búsqueda Avanzada</h1>

<p>
Opcionalmente puedes insertar uno de los siguientes operadores de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al comienzo de cada uno de los valores de tus búsquedas para especificar cómo debería hacerse la comparación.
</p>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cedula_usuario',
		'nombre_usuario',
		'apellido_usuario',
		'clave_usuario',
		'identificador_usuario',
		'dependencia_usuario',
		
		'rol_usuario',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
