<?php
$this->pageCaption=TipoUsuario::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar '. TipoUsuario::classNameLabel() ;
$this->breadcrumbs=array(
	TipoUsuario::classNameLabel(),
);

$this->menu=array(
	array('label'=>'Crear '.TipoUsuario::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Administrar '.TipoUsuario::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
