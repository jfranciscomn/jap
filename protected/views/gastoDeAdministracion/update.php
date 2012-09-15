<?php
$this->pageCaption='Actualizar '.GastoDeAdministracion::classNameLabel().' '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	GastoDeAdministracion::classNameLabel()=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar '.GastoDeAdministracion::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. GastoDeAdministracion::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Ver '. GastoDeAdministracion::classNameLabel(), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar '. GastoDeAdministracion::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>