<?php
$this->pageCaption=GastoOperativo::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar '. GastoOperativo::classNameLabel() ;
$this->breadcrumbs=array(
	GastoOperativo::classNameLabel(),
);

$this->menu=array(
	array('label'=>'Crear '.GastoOperativo::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Administrar '.GastoOperativo::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
