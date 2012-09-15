<?php
$this->pageCaption='Crear '. GastoOperativo::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo '.GastoOperativo::classNameLabel();
$this->breadcrumbs=array(
	GastoOperativo::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar '.GastoOperativo::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Administrar '.GastoOperativo::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>