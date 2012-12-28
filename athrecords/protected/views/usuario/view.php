
<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->cedula_usuario,
);

$this->menu=array(
	array('label'=>'Listar usuarios', 'url'=>array('index')),
	array('label'=>'Registrar', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->cedula_usuario)),
	array('label'=>'Borrar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cedula_usuario),'confirm'=>'¿Seguro que desea borrar?')),
	array('label'=>'Búsqueda avanzada', 'url'=>array('admin')),
);
?>

<h1>Detalles del Usuario</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cedula_usuario',
		'nombre_usuario',
		'apellido_usuario',
		'clave_usuario',
		'identificador_usuario',
		'dependencia_usuario',
		'rol_usuario',
	),
)); ?>
