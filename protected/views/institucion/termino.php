<?php
	if(isset($_GET['que']))
	{
		$tipo = $_GET['que'];
		$accion = $_GET['ac'];
	}
	$this->pageCaption='Gracias por ' .  $accion . ' su presupuesto de ' . $tipo;
	$this->pageTitle='Gracias Presupuesto';
	$this->pageDescription='';
	$this->breadcrumbs=array(
		Institucion::classNameLabel()=>array('index'),
		'Crear',
	);
	
	
	echo CHtml::button('Volver', array('submit' => array('institucion/acciones'),'class'=>'btn btn-primary'));