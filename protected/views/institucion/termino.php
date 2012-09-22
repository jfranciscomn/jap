<?php
	if(isset($_GET['que']))
	{
		$tipo = $_GET['que'];
	}
	$this->pageCaption='Gracias por terminar su presupuesto de ' . $tipo;
	$this->pageTitle='Gracias Presupuesto';
	$this->pageDescription='';
	$this->breadcrumbs=array(
		Institucion::classNameLabel()=>array('index'),
		'Crear',
	);
	
	$this->menu=array(
		array('label'=>'Volver ', 'url'=>array('site/index')),
	);