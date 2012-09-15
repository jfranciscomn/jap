<?php
$this->pageCaption=Municipio::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar '. Municipio::classNameLabel() ;
$this->breadcrumbs=array(
	Municipio::classNameLabel(),
);

$this->menu=array(
	array('label'=>'Crear '.Municipio::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Administrar '.Municipio::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
