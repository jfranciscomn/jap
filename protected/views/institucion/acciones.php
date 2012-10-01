<?php
$this->pageCaption='';
$this->pageTitle=Yii::app()->name;

$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
$ejercicioFiscal = EjercicioFiscal::model()->find('estatus_did=1');
$config = Configuracion::model()->find('estatus_did=1 && ejercicioFiscal_did=:ejercicio',array(':ejercicio'=>$ejercicioFiscal->id));
$esEditable = Institucion::model()->esEditable($config->fechaInicioEdicion, date('Y-m-d'), $config->fechaFinalEdicion);
?>
<?php if($usuarioActual->institucion->usuario->tipousuario->nombre == "Administrador"){ ?>
	<div class="well">
		<?php echo CHtml::button('Complete su registro', array('submit' => array('update','id'=>$usuarioActual->institucion_aid), 										'class'=>'btn btn-large btn-warning', 'style'=>'width:100%'));  ?>
	</div>
<?php } else { ?>
	<div class="alert alert-info">
	  <h4>Gracias!</h4>
	  Por cumplir con su registro, lo invitamos a que siga haciendo las demás actividades.
	</div>
<?php } ?>

<div class="row">
	<div style="width:100%; text-align:center">
		<div class="span4">
			<ul class="thumbnails">
			<li class="span4">
				<div class="thumbnail">				
				<img src="<?php echo Yii::app()->baseUrl . '/images/informe.png'; ?>" alt="iap"/>
					<div class="caption">
						<h3>Administrar IAP's</h3>
						<p style="text-align:left">El presupuesto es una planeación que se hace para el próximo año, en éste encontrará lo siguiente:</p>
						<p style="text-align:left">-Presupuesto de Ingresos<br/>
						-Presupuesto de Egresos<br/>
						-Inventario</p>
						<p>								
							<?php 
						    	$hechoIngreso = IngresoPorDonativo::model()->find('institucion_aid=:inst',
						    	array(':inst'=>$usuarioActual->institucion->id));
						    	if(isset($hechoIngreso))
						    	{
							    	if($esEditable)
							    		echo CHtml::button('Modificar', 
							    		array('submit' => 'actualizaringreso','class'=>'btn btn-large btn-primary', 'style'=>'width:100%')); 
							    	else
							    		echo CHtml::button('Realizado muchas gracias', 
							    		array('','class'=>'btn btn-large btn-success disabled', 'style'=>'width:100%'));     	    	
						    	}
						    	else
						    	{
							    	if($esEditable)
							    		echo CHtml::button('Crear', 
							    		array('submit' => 'crearingreso','class'=>'btn btn-large btn-primary', 'style'=>'width:100%')); 
							    	else
							    		echo CHtml::button('No Realizado', 
							    		array('','class'=>'btn btn-large disabled', 'style'=>'width:100%'));     	    	
						    	}
						    ?>
						</p>
					</div>
				</div>
			</li>
			<ul>
		</div>	   
		<div class="span4">
			<ul class="thumbnails">
			<li class="span4">
				<div class="thumbnail">				
				<img src="<?php echo Yii::app()->baseUrl . '/images/presupuesto.png'; ?>" alt="iap"/>
					<div class="caption">
						<h3>Presupuesto Anual</h3>
						<p style="text-align:left">El presupuesto es una planeación que se hace para el próximo año, en éste encontrará lo siguiente:</p>
						<p style="text-align:left">Presupuesto de Ingresos<br/>
						Presupuesto de Egresos<br/>
						Inventario</p>
						<p>
							<?php echo CHtml::button('Pendiente', array('submit' => array('institucion/reportes'),'class'=>'btn btn-large btn-primary', 'style'=>'width:100%')); ?>
						</p>
					</div>
				</div>
			</li>
			<ul>
		</div>
		<div class="span4">
			<ul class="thumbnails">
			<li class="span4">
				<div class="thumbnail">				
				<img src="<?php echo Yii::app()->baseUrl . '/images/programa.png'; ?>" alt="iap"/>
					<div class="caption">
						<h3>Administrar IAP's</h3>
						<p style="text-align:left">Verás el listado de IAP's que han hecho lo siguiente:</p>
						<p style="text-align:left">Presupuesto de Ingresos<br/>
						Presupuesto de Egresos<br/>
						Inventario</p>
						<p>
							<?php echo CHtml::button('Crear', array('submit' => array('institucion/reportes'),'class'=>'btn btn-large btn-primary', 'style'=>'width:100%')); ?>
						</p>
					</div>
				</div>
			</li>
			<ul>
		</div>	
	</div>
</div>		

