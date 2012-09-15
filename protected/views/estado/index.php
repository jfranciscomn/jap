<?php
$this->pageCaption=Estado::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar '. Estado::classNameLabel() ;
$this->breadcrumbs=array(
	Estado::classNameLabel(),
);

$this->menu=array(
	array('label'=>'Crear '.Estado::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Administrar '.Estado::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
