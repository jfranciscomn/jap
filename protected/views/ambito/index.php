<?php
$this->pageCaption=Ambito::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar '. Ambito::classNameLabel() ;
$this->breadcrumbs=array(
	Ambito::classNameLabel(),
);

$this->menu=array(
	array('label'=>'Crear '.Ambito::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Administrar '.Ambito::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
