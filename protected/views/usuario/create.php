<?php
$this->pageCaption='Crear '. Usuario::classNameLabel();
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='Crear nuevo '.Usuario::classNameLabel();
$this->breadcrumbs=array(
	Usuario::classNameLabel()=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar '.Usuario::classNameLabel(), 'url'=>array('index')),
	array('label'=>'Administrar '.Usuario::classNameLabel(), 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>