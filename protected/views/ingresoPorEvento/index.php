<?php
$this->pageCaption=IngresoPorEvento::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar '. IngresoPorEvento::classNameLabel() ;
$this->breadcrumbs=array(
	IngresoPorEvento::classNameLabel(),
);

$this->menu=array(
	array('label'=>'Crear '.IngresoPorEvento::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Administrar '.IngresoPorEvento::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
