<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.countdown.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.blockUI.js"></script>


<?php
$this->breadcrumbs=array(
	'Lista de atletas',
);

$this->menu=array(
	array('label'=>'Registrar Atleta', 'url'=>array('create')),
	array('label'=>'Búsqueda Avanzada', 'url'=>array('admin')),
);
?>

<h1>Lista de atletas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
