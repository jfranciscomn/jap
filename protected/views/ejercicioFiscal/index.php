<?php
$this->pageCaption=EjercicioFiscal::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar '. EjercicioFiscal::classNameLabel() ;
$this->breadcrumbs=array(
	EjercicioFiscal::classNameLabel(),
);

$this->menu=array(
	array('label'=>'Crear Ejercicio Fiscal', 'url'=>array('create')),
	array('label'=>'Administrar Ejercicio Fiscal', 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
