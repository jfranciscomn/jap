<?php
$this->pageCaption='Crear '. GastoDeAdministracion::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo '.GastoDeAdministracion::classNameLabel();
$this->breadcrumbs=array(
	GastoDeAdministracion::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar '.GastoDeAdministracion::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Administrar '.GastoDeAdministracion::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>