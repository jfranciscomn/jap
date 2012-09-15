<?php
$this->pageCaption='Actualizar '.GastoOperativo::classNameLabel().' '.$model->id;
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	GastoOperativo::classNameLabel()=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar '.GastoOperativo::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Crear '. GastoOperativo::classNameLabel(), 'url'=>array('create')),
	array('label'=>'Ver '. GastoOperativo::classNameLabel(), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar '. GastoOperativo::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>