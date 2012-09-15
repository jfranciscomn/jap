<?php
$this->pageCaption=IngresoPorVenta::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar '. IngresoPorVenta::classNameLabel() ;
$this->breadcrumbs=array(
	IngresoPorVenta::classNameLabel(),
);

$this->menu=array(
	array('label'=>'Crear '.IngresoPorVenta::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Administrar '.IngresoPorVenta::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
