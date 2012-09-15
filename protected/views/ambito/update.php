<?php
$this->pageCaption='Actualizar '.Ambito::classNameLabel().' '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	Ambito::classNameLabel()=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar '.Ambito::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. Ambito::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Ver '. Ambito::classNameLabel(), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar '. Ambito::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>