<?php
$this->pageCaption=Usuario::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Listar '. Usuario::classNameLabel() ;
$this->breadcrumbs=array(
	Usuario::classNameLabel(),
);

$this->menu=array(
	array('label'=>'Crear '.Usuario::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Administrar '.Usuario::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php $this->widget('ext.custom.widgets.CCustomListView', array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
