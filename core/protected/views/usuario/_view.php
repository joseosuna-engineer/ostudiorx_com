<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cedula_usuario), array('view', 'id'=>$data->cedula_usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clave_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->clave_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identificador_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->identificador_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dependencia_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->dependencia_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rol_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->rol_usuario); ?>
	<br />


</div>