<?php
$this->pageCaption=IngresoPorCuotasdeRecuperacion::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar '. IngresoPorCuotasdeRecuperacion::classNameLabel() ;
$this->breadcrumbs=array(
	IngresoPorCuotasdeRecuperacion::classNameLabel(),
);

$this->menu=array(
	array('label'=>'Crear '.IngresoPorCuotasdeRecuperacion::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Administrar '.IngresoPorCuotasdeRecuperacion::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
