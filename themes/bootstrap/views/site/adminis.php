<?php
	$this->pageCaption='Bienvenido JAP';
	$this->pageTitle='Gracias Presupuesto';
	$this->pageDescription='';
	$this->breadcrumbs=array(
		'Administrador',
	);
?>

<div class="row">
	<div style="width:100%; text-align:center">			
		<div class="span4">
			<ul class="thumbnails">
			<li class="span4">
				<div class="thumbnail">				
				<img src="<?php echo Yii::app()->baseUrl . '/images/iap.png'; ?>" alt="iap"/>
					<div class="caption">
						<h3>Administrar IAP's</h3>
						<p style="text-align:left">Verás el listado de IAP's que han hecho lo siguiente:</p>
						<p style="text-align:left">Presupuesto de Ingresos<br/>
						Presupuesto de Egresos<br/>
						Inventario</p>
						<p>
							<?php echo CHtml::button('Si quiero ir', array('submit' => array('institucion/reportes'),'class'=>'btn btn-large btn-primary')); ?>
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
				<img src="<?php echo Yii::app()->baseUrl . '/images/otra.png'; ?>" alt="iap"/>
					<div class="caption">
						<h3>Administrar IAP's</h3>
						<p style="text-align:left">Verás el listado de IAP's que han hecho lo siguiente:</p>
						<p style="text-align:left">Presupuesto de Ingresos<br/>
						Presupuesto de Egresos<br/>
						Inventario</p>
						<p>
							<?php echo CHtml::button('Pendiente', array('submit' => array('institucion/reportes'),'class'=>'btn btn-large btn-primary')); ?>
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
				<img src="<?php echo Yii::app()->baseUrl . '/images/otra.png'; ?>" alt="iap"/>
					<div class="caption">
						<h3>Administrar IAP's</h3>
						<p style="text-align:left">Verás el listado de IAP's que han hecho lo siguiente:</p>
						<p style="text-align:left">Presupuesto de Ingresos<br/>
						Presupuesto de Egresos<br/>
						Inventario</p>
						<p>
							<?php echo CHtml::button('Pendiente', array('submit' => array('institucion/reportes'),'class'=>'btn btn-large btn-primary')); ?>
						</p>
					</div>
				</div>
			</li>
			<ul>
		</div>	   
	</div>
</div>