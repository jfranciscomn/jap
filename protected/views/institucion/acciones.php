<?php
$this->pageCaption='';
$this->pageTitle=Yii::app()->name;

$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
?>

<div class="hero-unit">
  <h1>Bienvenida</h1> <h2>Institución <?php echo $usuarioActual->institucion->nombre; ?></h2>
  <p>Esta es la nueva forma de mandar tu presupuesto.</p>
  <br/>
  <div class="span5">
    <?php 
    	echo CHtml::button('Presupuesto de Ingresos', array('submit' => 'crearingreso','class'=>'btn btn-large btn-primary', 'style'=>'width:100%')); 
    ?>
  </div>
  <div class="span5">
    <?php 
    	echo CHtml::button('Presupuesto de Egresos', array('submit' => 'crearegreso','class'=>'btn btn-large btn-primary', 'style'=>'width:100%')); 
    ?>
  </div>
</div>