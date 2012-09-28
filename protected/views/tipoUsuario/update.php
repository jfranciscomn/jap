<?php
$this->pageCaption='Actualizar '.TipoUsuario::classNameLabel().' '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	TipoUsuario::classNameLabel()=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Tipo Usuario', 'url'=>array('index')),
	array('label'=>'Crear Tipo Usuario', 'url'=>array('create')),
	array('label'=>'Ver Tipo Usuario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Tipo Usuario', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>