<?php
$this->pageCaption=Inversion::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar '. Inversion::classNameLabel() ;
$this->breadcrumbs=array(
	Inversion::classNameLabel(),
);

$this->menu=array(
	array('label'=>'Crear '.Inversion::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Administrar '.Inversion::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
