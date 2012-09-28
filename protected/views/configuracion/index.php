<?php
$this->pageCaption=Configuracion::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar '. Configuracion::classNameLabel() ;
$this->breadcrumbs=array(
	Configuracion::classNameLabel(),
);

$this->menu=array(
	array('label'=>'Crear '.Configuracion::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Administrar '.Configuracion::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
