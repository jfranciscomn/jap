<?php
$this->pageCaption='';
$this->pageTitle=Yii::app()->name;

$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
$ejercicioFiscal = EjercicioFiscal::model()->find('estatus_did=1');
$config = Configuracion::model()->find('estatus_did=1 && ejercicioFiscal_did=:ejercicio',array(':ejercicio'=>$ejercicioFiscal->id));
$esEditable = Institucion::model()->esEditable($config->fechaInicioEdicion, date('Y-m-d'), $config->fechaFinalEdicion);
?>

<div class="hero-unit">
  <h1>Bienvenida</h1> <h2>Institución <?php echo $usuarioActual->institucion->nombre; ?></h2>
  <p>Esta es la nueva forma de mandar tu presupuesto.</p>
  <br/>
  <div class="span3" style="text-align:center">
  	<h3>Presupuesto de Ingresos</h3>
  	<br/>
    <?php 
    	$hechoIngreso = IngresoPorDonativo::model()->find('institucion_aid=:inst',array(':inst'=>$usuarioActual->institucion->id));
    	if(isset($hechoIngreso))
    	{
	    	if($esEditable)
	    		echo CHtml::button('Modificar', array('submit' => 'actualizaringreso','class'=>'btn btn-large btn-primary', 'style'=>'width:100%')); 
	    	else
	    		echo CHtml::button('Realizado muchas gracias', array('','class'=>'btn btn-large btn-success disabled', 'style'=>'width:100%'));     	    	
    	}
    	else
    	{
	    	if($esEditable)
	    		echo CHtml::button('Crear', array('submit' => 'crearingreso','class'=>'btn btn-large btn-primary', 'style'=>'width:100%')); 
	    	else
	    		echo CHtml::button('No Realizado', array('','class'=>'btn btn-large disabled', 'style'=>'width:100%'));     	    	
    	}
    ?>
  </div>
  <div class="span4" style="text-align:center">
 	<h3>Presupuesto de Egresos</h3>
  	<br/>
    <?php 
    	$hechoEgreso = GastoDeAdministracion::model()->find('institucion_aid=:inst',array(':inst'=>$usuarioActual->institucion->id));
    	if(isset($hechoEgreso))
    	{
	    	if($esEditable)
	    		echo CHtml::button('Modificar', array('submit' => 'actualizaregreso','class'=>'btn btn-large btn-primary', 'style'=>'width:100%')); 
	    	else
	    		echo CHtml::button('Realizado muchas gracias', array('','class'=>'btn btn-large btn-primary ', 'style'=>'width:100%')); 
    	}
    	else
    	{
	    	if($esEditable)
	    		echo CHtml::button('Crear', array('submit' => 'crearegreso','class'=>'btn btn-large btn-primary', 'style'=>'width:100%')); 
	    	else
	    		echo CHtml::button('No Realizado', array('','class'=>'btn btn-large disabled', 'style'=>'width:100%')); 
    	}
    	
    ?>
  </div>
  <div class="span3" style="text-align:center">
  	<h3>Inversiones</h3>
  	<br/>
    <?php 
    	$inversion = Inversion::model()->find('institucion_aid=:inst',array(':inst'=>$usuarioActual->institucion->id));
    	if(isset($inversion))
    	{
	    	if($esEditable)
	    		echo CHtml::button('Modificar', array('submit' => 'actualizarinversion','class'=>'btn btn-large btn-primary', 'style'=>'width:100%')); 
	    	else
	    		echo CHtml::button('Realizado muchas gracias', array('','class'=>'btn btn-large btn-success disabled', 'style'=>'width:100%'));     	    	
    	}
    	else
    	{
	    	if($esEditable)
	    		echo CHtml::button('Crear', array('submit' => 'crearinversion','class'=>'btn btn-large btn-primary', 'style'=>'width:100%')); 
	    	else
	    		echo CHtml::button('No Realizado', array('','class'=>'btn btn-large disabled', 'style'=>'width:100%'));     	    	
    	}
    ?>
  </div>
</div>