<?php
$this->pageCaption='Actualizar '.Configuracion::classNameLabel().' '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	Configuracion::classNameLabel()=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar '.Configuracion::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. Configuracion::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Ver '. Configuracion::classNameLabel(), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar '. Configuracion::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>