<?php
$this->pageCaption='';
$this->pageTitle=Yii::app()->name;

$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
?>

<div class="hero-unit">
  <h1>Bienvenida</h1> <h2>Institución <?php echo $usuarioActual->institucion->nombre; ?></h2>
  <p>Esta es la nueva forma de hacer tus planeaciones.</p>
  <br/>
  <p>
    <?php echo CHtml::button('Crear Presupuesto', array('submit' => 'index.php/institucion/crear','class'=>'btn btn-large btn-primary')); ?>
  </p>
</div>