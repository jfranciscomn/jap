<?php
$this->pageCaption=AreaGeografica::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar '. AreaGeografica::classNameLabel() ;
$this->breadcrumbs=array(
	AreaGeografica::classNameLabel(),
);

$this->menu=array(
	array('label'=>'Crear '.AreaGeografica::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Administrar '.AreaGeografica::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
