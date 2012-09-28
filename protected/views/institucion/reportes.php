<?php
	$this->pageCaption='Bienvenido JAP';
	$this->pageTitle='Algunas estadísticas';
	$this->pageDescription='';
	$this->breadcrumbs=array(
		'Administrador',
	);
	$ejercicioFiscal = EjercicioFiscal::model()->find('estatus_did=1');
	$ejercicioID = ($ejercicioFiscal->id==1) ? $ejercicioFiscal->id : 0;
	$connection = Yii::app()->db;
	$queryInstCumplidasIngreso = 'select distinct(i.nombre) as nombre, i.id as id, contactoTelefono, contactoEmail, rfc, cluni, a.nombre as ambito 
								from IngresoPorDonativo ipd
								inner join Institucion i on i.id = ipd.institucion_aid
								inner join Ambito a on a.id = i.ambito_did
								where ejercicioFiscal_did = ' . $ejercicioID;
	
	$commandInstCumplidasIngreso = $connection->createCommand($queryInstCumplidasIngreso);
	$instCumplidasIngreso = $commandInstCumplidasIngreso->queryAll();
	
	$queryInstCumplidasEgreso = 'select distinct(i.nombre) as nombre, i.id as id, contactoTelefono, contactoEmail, rfc, cluni, a.nombre as ambito 
								from GastoDeAdministracion ipd
								inner join Institucion i on i.id = ipd.institucion_aid
								inner join Ambito a on a.id = i.ambito_did
								where ejercicioFiscal_did = ' . $ejercicioID;
	
	$commandInstCumplidasEgreso = $connection->createCommand($queryInstCumplidasEgreso);
	$instCumplidasEgreso = $commandInstCumplidasEgreso->queryAll();
	
	$queryInstCumplidasAmbos = 'select distinct(i.nombre) as nombreGa, i.id as idInst, contactoTelefono, contactoEmail, rfc, cluni, a.nombre as ambito 
									from GastoDeAdministracion ipd
									inner join Institucion i on i.id = ipd.institucion_aid
									inner join Ambito a on a.id = i.ambito_did
									where i.nombre in (
										select distinct(i.nombre) as nombreIn
										from IngresoPorDonativo ipd
										inner join Institucion i on i.id = ipd.institucion_aid
									) && ejercicioFiscal_did = ' . $ejercicioID;
	
	$commandInstCumplidasAmbos = $connection->createCommand($queryInstCumplidasAmbos);
	$instCumplidasAmbos = $commandInstCumplidasAmbos->queryAll();
?>

<h2>Ambos Presupuestos</h2>
<?php $c = 0; ?>
<table class="table table-bordered">
	<tr>		
		<td><b>#</b></td>
		<td><b>Nombre</b></td>
		<td><b>Teléfono</b></td>
		<td><b>Email</b></td>
		<td><b>R.F.C.</b></td>
		<td><b>Clave Cluni</b></td>
		<td><b>Ámbito</b></td>
		<td style="width:100px;"><b>Estatus</b></td>
		
	</tr>
	<?php foreach($instCumplidasAmbos as $instAmbos) { $c += 1;?>
		<tr>
			<td><?php echo $c; ?></td>
			<td><?php echo CHtml::link($instAmbos['nombreGa'],array('/institucion/reportepresupuesto', 'id'=>$instAmbos['idInst'])); ?></td>			
			<td><?php echo $instAmbos['contactoTelefono']; ?></td>
			<td><?php echo $instAmbos['contactoEmail']; ?></td>			
			<td><?php echo $instAmbos['rfc']; ?></td>			
			<td><?php echo $instAmbos['cluni']; ?></td>			
			<td><?php echo $instAmbos['ambito']; ?></td>
			<td><span class="label label-info">Cumplieron</span></td>			
		</tr>
	<?php } ?>
</table>

<h2>Presupuesto de Ingreso</h2>
<?php $c = 0; ?>
<table class="table table-bordered">
	<tr>		
		<td><b>#</b></td>
		<td><b>Nombre</b></td>
		<td><b>Teléfono</b></td>
		<td><b>Email</b></td>
		<td><b>R.F.C.</b></td>
		<td><b>Clave Cluni</b></td>
		<td><b>Ámbito</b></td>
		<td style="width:100px;"><b>Estatus</b></td>
		
	</tr>
	<?php foreach($instCumplidasIngreso as $instIngres) { $c += 1;?>
		<tr>
			<td><?php echo $c; ?></td>
			<td><?php echo CHtml::link($instIngres['nombre'],array('/institucion/view', 'id'=>$instIngres['id'])); ?></td>			
			<td><?php echo $instIngres['contactoTelefono']; ?></td>
			<td><?php echo $instIngres['contactoEmail']; ?></td>			
			<td><?php echo $instIngres['rfc']; ?></td>			
			<td><?php echo $instIngres['cluni']; ?></td>			
			<td><?php echo $instIngres['ambito']; ?></td>
			<td><span class="label label-info">Hecho Ingreso</span></td>			
		</tr>
	<?php } ?>
</table>

<h2>Presupuesto de Egresos</h2>
<?php $c = 0; ?>
<table class="table table-bordered">
	<tr>		
		<td><b>#</b></td>
		<td><b>Nombre</b></td>
		<td><b>Teléfono</b></td>
		<td><b>Email</b></td>
		<td><b>R.F.C.</b></td>
		<td><b>Clave Cluni</b></td>
		<td><b>Ámbito</b></td>
		<td style="width:100px;"><b>Estatus</b></td>
	</tr>
	<?php foreach($instCumplidasEgreso as $instEgres) { $c += 1;?>
		<tr>
			<td><?php echo $c; ?></td>
			<td><?php echo CHtml::link($instEgres['nombre'],array('/institucion/view', 'id'=>$instEgres['id'])); ?></td>			
			<td><?php echo $instEgres['contactoTelefono']; ?></td>
			<td><?php echo $instEgres['contactoEmail']; ?></td>			
			<td><?php echo $instEgres['rfc']; ?></td>			
			<td><?php echo $instEgres['cluni']; ?></td>			
			<td><?php echo $instEgres['ambito']; ?></td>
			<td><span class="label label-info">Hecho Egreso</span></td>			
		</tr>
	<?php } ?>
</table>

