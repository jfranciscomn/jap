<div class="wide form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="clearfix">
		<?php echo $form->label($model,'id'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'id'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'sueldos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'sueldos'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'honorarios'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'honorarios'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'combustibles'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'combustibles'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'luzTelefono'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'luzTelefono'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'papeleria'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'papeleria'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'impuestosDerechos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'impuestosDerechos'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'otros'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'otros'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'institucion_aid'); ?>
		<div class="input">
			
			<?php echo  ''; ?> <?php $this->widget('ext.custom.widgets.EJuiAutoCompleteFkField', array(
						'model'=>$model, 
						'attribute'=>'institucion_aid', 
						'sourceUrl'=>Yii::app()->createUrl('institucion/autocompletesearch'), 
						'showFKField'=>false,
						'relName'=>'institucion', // the relation name defined above
						'displayAttr'=>'nombre',  // attribute or pseudo-attribute to display
						
						'options'=>array(
							'minLength'=>1, 
						),
					)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'ejercicioFisca_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'ejercicioFisca_did',CHtml::listData(EjercicioFiscal::model()->findAll(), 'id', 'nombre')); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'estatus_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'estatus_did',CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre')); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'editable'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'editable'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'ultimaModificacion_dt'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'ultimaModificacion_dt'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
