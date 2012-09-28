<?php
	$this->pageCaption='Bienvenido JAP';
	$this->pageTitle='Algunas estadísticas';
	$this->pageDescription='';
	$this->breadcrumbs=array(
		'Administrador',
	);
	$ejercicioFiscal = EjercicioFiscal::model()->find('estatus_did=1');
	$modelDonativo = IngresoPorDonativo::model()->find('institucion_aid = :inst && ejercicioFiscal_did = :ej',array(':inst' => $_GET['id'],':ej' => $ejercicioFiscal->id));
	$this->pageCaption=$modelDonativo->institucion->nombre;
	$modelCuotasDeRecuperacion = IngresoPorCuotasDeRecuperacion::model()->find('institucion_aid = :inst && ejercicioFiscal_did = :ej',
		array(':inst' => $_GET['id'],':ej' => $ejercicioFiscal->id));
	$modelEvento = IngresoPorEvento::model()->find('institucion_aid = :inst && ejercicioFiscal_did = :ej',array(':inst' => $_GET['id'],':ej' => $ejercicioFiscal->id));
	$modelGastoDeAdministracion = GastoDeAdministracion::model()->find('institucion_aid = :inst && ejercicioFiscal_did = :ej',array(':inst' => $_GET['id'],':ej' => $ejercicioFiscal->id));
	$modelGastoOperativo = GastoOperativo::model()->find('institucion_aid = :inst && ejercicioFiscal_did = :ej',array(':inst' => $_GET['id'],':ej' => $ejercicioFiscal->id));
	$modelInversion = Inversion::model()->find('institucion_aid = :inst && ejercicio_did = :ej',array(':inst' => $_GET['id'],':ej' => $ejercicioFiscal->id));
	/*
	echo '<pre>'; print_r($modelDonativo->attributes); echo '</pre><br/>';
	echo '<pre>'; print_r($modelCuotasDeRecuperacion->attributes); echo '</pre><br/>';
	echo '<pre>'; print_r($modelEvento->attributes); echo '</pre><br/>';
	echo '<pre>'; print_r($modelGastoDeAdministracion->attributes); echo '</pre><br/>';
	echo '<pre>'; print_r($modelGastoOperativo->attributes); echo '</pre><br/>';
	*/

	function dineroFormato($numero) 
	{ 	    
    	return $numero; 	
	} 
?>
<div class="span7">
	<h2 style="text-align:left;"><?php echo $modelDonativo->institucion->nombre; ?></h2>
	<br/>
	<table class="tableprint table-bordered">
		<caption  style="text-align:left;">				
				<h3>Ingresos</h3>
		</caption>
		<thead>		
			<tr>
				<th>Donativos</th>
				<th>Cantidad</th>
				<th>Totales</th>
			</tr>
		</thead>		
		<tbody>
			<tr>
				<td style="width:200px;">Personas Físicas</td>
				<td style="width:230px;"><?php echo dineroFormato($modelDonativo->personaFisica); ?></td>
				<td style=""></td>
			</tr>
			<tr>
				<td>Personas Morales</td>
				<td><?php echo dineroFormato($modelDonativo->personaMoral); ?></td>
				<td></td>
			</tr>
			<tr>
				<td>Fundaciones Nacionales</td>
				<td><?php echo dineroFormato($modelDonativo->fundacionesNacionales); ?></td>
				<td></td>
			</tr>
			<tr>
				<td>Fundaciones Extranjeras</td>
				<td><?php echo dineroFormato($modelDonativo->fundacionesExtrajeras); ?></td>
				<td></td>
			</tr>
			<tr>
				<td>Fondos Gubernamentales</td>
				<td><?php echo dineroFormato($modelDonativo->fondosGubernamentales); ?></td>
				<td></td>
			</tr>
			<tr>
				<td>Especie</td>
				<td><?php echo dineroFormato($modelDonativo->especie); ?></td>
				<td></td>
			</tr>		
		</tbody>
		<tfoot>
			<tr>
				<td><b>Total Donativos</b></td>
				<td></td>
				<td>
					<b>
						<?php $totalDonativo = $modelDonativo->personaFisica + 
								$modelDonativo->personaMoral + 
								$modelDonativo->fundacionesNacionales + 
								$modelDonativo->fundacionesExtrajeras +  
								$modelDonativo->fondosGubernamentales +
								$modelDonativo->especie;
						echo dineroFormato($totalDonativo);
						?>
					</b>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><b>Total Cuotas de Recuperación</b></td>
				<td><b><?php $totalCuotas = $modelCuotasDeRecuperacion->consultas + 
								$modelCuotasDeRecuperacion->despensas + 
								$modelCuotasDeRecuperacion->otro;
						echo dineroFormato($totalCuotas);
					?></b></td>
			</tr>
			<tr>
				<td></td>
				<td><b>Total Colectas, Eventos, Rifas, Etc.</b></td>
				<td><b><?php $totalEvento = $modelEvento->colectas + 
								$modelEvento->eventos + 
								$modelEvento->rifas + 
								$modelEvento->desayunos +  
								$modelEvento->conferencias;
						echo dineroFormato($totalEvento);
					?></b></td>
			</tr>
			<tr>
				<td></td>
				<td><h3>Total de Ingresos</h3></td>
				<td>
					<h3>
						<?php $totalIngresos = $totalCuotas + $totalDonativo + $totalEvento;
							echo dineroFormato($totalIngresos);
						 ?>
					</h3>
				</td>
			</tr>
		</tfoot>
	</table>
</div>
<hl/>
<div class="span7">
	<table class="tableprint table-bordered">
		<caption  style="text-align:left;">
			<h3>Egresos</h3>
		</caption>
		<thead>		
			<tr>
				<th>Tipos de Gastos</th>
				<th>Cantidad</th>
				<th>Totales</th>
			</tr>
		</thead>		
		<tbody>
			<tr>
				<td style="width:200px;">Gastos de Administración</td>
				<td style="width:230px;">
					<?php 
						$totalGastoAdministracion = $modelGastoDeAdministracion->sueldos + 
												$modelGastoDeAdministracion->honorarios +
												$modelGastoDeAdministracion->combustibles +
												$modelGastoDeAdministracion->luzTelefono +
												$modelGastoDeAdministracion->papeleria +
												$modelGastoDeAdministracion->impuestosDerechos +
												$modelGastoDeAdministracion->otros;
						echo dineroFormato($totalGastoAdministracion); 
					?>
				</td>
				<td></td>
			</tr>
			<tr>
				<td>Gastos Asistenciales/Operativos</td>
				<td>
					<?php
						$totalGastoOperativo = $modelGastoOperativo->sueldos + 
												$modelGastoOperativo->honorarios +
												$modelGastoOperativo->combustibles +
												$modelGastoOperativo->luzTelefono +
												$modelGastoOperativo->papeleria +
												$modelGastoOperativo->renta +
												$modelGastoOperativo->impuestosDerechos +
												$modelGastoOperativo->otros;
						echo dineroFormato($totalGastoOperativo); 
					?>
				</td>
				<td></td>
			</tr>			
		</tbody>
		<tfoot>
			<tr>
				<td></td>
				<td><h3>Total de Egresos</h3></td>
				<td><h3>
						<b>
							<?php $totalEgresos = $totalGastoOperativo + $totalGastoAdministracion;
								echo dineroFormato($totalEgresos);
							?>
						</b>
					</h3>
				</td>
			</tr>			
		</tfoot>
	</table>
</div>

<div class="span7">
	<table class="table table-bordered">
		<caption>
			
		</caption>
		<thead>		
			
		</thead>		
		<tbody>
			
		</tbody>
		<tfoot>
			<tr>
				<td style="width:200px;"></td>
				<td style="width:230px;">
					<h3>Remanente</h3>
				</td>
				<td>
					<h3>
						<b>
							<?php $remanente = $totalIngresos - $totalEgresos;
								if($remanente<0)
								{									
									echo '<span style="color:red;">' . dineroFormato($remanente) . '</span>';
								}
								else
									echo '<span style="color:green;">' . dineroFormato($remanente) . '</span>';
								
							?>
						</b>
					</h3>
				</td>
			</tr>			
		</tfoot>
	</table>
</div>

<div class="span7">
	<table class="tableprint table-bordered">
		<caption style="text-align:left;">
				<h3>Inversiones</h3>
		</caption>
		<thead>		
			<tr>
				<th>Inversiones</th>
				<th>Cantidad</th>
				<th>Totales</th>
			</tr>
		</thead>		
		<tbody>
			<tr>
				<td style="width:200px;">Terrenos</td>
				<td style="width:230px;"> <?php echo dineroFormato($modelInversion->terrenos); ?>	</td>
				<td></td>
			</tr>
			<tr>
				<td>Muebles</td>
				<td><?php echo dineroFormato($modelInversion->muebles); ?></td>
				<td></td>
			</tr>			
			<tr>
				<td style="width:200px;">Vehículos Servicio Asistencial</td>
				<td style="width:230px;"> <?php echo dineroFormato($modelInversion->vehiculosServicio); ?>	</td>
				<td></td>
			</tr>
			<tr>
				<td style="width:200px;">Vehículos Administrativos</td>
				<td style="width:230px;"> <?php echo $modelInversion->vehiculosAdministrativos; ?>	</td>
				<td></td>
			</tr>
			<tr>
				<td style="width:200px;">Otros</td>
				<td style="width:230px;"> <?php echo dineroFormato($modelInversion->otros); ?>	</td>
				<td></td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td></td>
				<td><h3>Total de Inversión</h3></td>
				<td>
					<h3>
						<b>
							<?php $totalInversion = $modelInversion->terrenos + 
													$modelInversion->muebles +
													$modelInversion->vehiculosServicio +
													$modelInversion->vehiculosAdministrativos +
													$modelInversion->otros;
								echo dineroFormato($totalInversion);
							?>
						</b>
					</h3>
				</td>
			</tr>			
		</tfoot>
	</table>
</div>
<a href="<?php echo Yii::app()->user->returnUrl; ?>">Regresar</a>