	<tr>
		<td>
			<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->terrenos); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->muebles); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->vehiculosServicio); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->vehiculosAdministrativos); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->otros); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->institucion->nombre); ?>
		</td>
		<?php /*
		<td>
			<?php echo CHtml::encode($data->estatus->nombre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->ejercicio->nombre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->editable); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->ultimaModificacion_dt); ?>
		</td>
		*/ ?>
	</tr>
	
	
