<?php
$this->pageCaption=IngresoPorDonativo::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar '. IngresoPorDonativo::classNameLabel() ;
$this->breadcrumbs=array(
	IngresoPorDonativo::classNameLabel(),
);

$this->menu=array(
	array('label'=>'Crear '.IngresoPorDonativo::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Administrar '.IngresoPorDonativo::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
