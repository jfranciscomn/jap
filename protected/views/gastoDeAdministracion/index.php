<?php
$this->pageCaption=GastoDeAdministracion::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar '. GastoDeAdministracion::classNameLabel() ;
$this->breadcrumbs=array(
	GastoDeAdministracion::classNameLabel(),
);

$this->menu=array(
	array('label'=>'Crear '.GastoDeAdministracion::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Administrar '.GastoDeAdministracion::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
