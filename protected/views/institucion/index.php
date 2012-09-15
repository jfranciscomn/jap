<?php
$this->pageCaption=Institucion::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar '. Institucion::classNameLabel() ;
$this->breadcrumbs=array(
	Institucion::classNameLabel(),
);

$this->menu=array(
	array('label'=>'Crear '.Institucion::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Administrar '.Institucion::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
