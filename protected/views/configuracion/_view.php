	<tr>
		<td>
			<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->ejercicioFiscal->nombre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaInicioEdicion); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaFinalEdicion); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->estatus->nombre); ?>
		</td>
	</tr>
	
	
