<?php
$this->pageCaption=Estatus::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar '. Estatus::classNameLabel() ;
$this->breadcrumbs=array(
	Estatus::classNameLabel(),
);

$this->menu=array(
	array('label'=>'Crear '.Estatus::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Administrar '.Estatus::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
