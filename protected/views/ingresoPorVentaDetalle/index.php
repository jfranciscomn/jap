<?php
$this->pageCaption=IngresoPorVentaDetalle::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar '. IngresoPorVentaDetalle::classNameLabel() ;
$this->breadcrumbs=array(
	IngresoPorVentaDetalle::classNameLabel(),
);

$this->menu=array(
	array('label'=>'Crear '.IngresoPorVentaDetalle::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Administrar '.IngresoPorVentaDetalle::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
