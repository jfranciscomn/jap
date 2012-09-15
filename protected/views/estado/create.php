<?php
$this->pageCaption='Crear '. Estado::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo '.Estado::classNameLabel();
$this->breadcrumbs=array(
	Estado::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar '.Estado::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Administrar '.Estado::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>