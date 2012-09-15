<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'ejercicio-fiscal-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php $this->widget('BAlert',array(

		'content'=>'<p>Los campos marcados con <span class="required">*</span> son requeridos.</p>'
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="<?php echo $form->fieldClass($model, 'nombre'); ?>">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>145)); ?>
			<?php echo $form->error($model,'nombre'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'fechaInicio_dt'); ?>">
		<?php echo $form->labelEx($model,'fechaInicio_dt'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'fechaInicio_dt'); ?>
			<?php echo $form->error($model,'fechaInicio_dt'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'fechaFin_dt'); ?>">
		<?php echo $form->labelEx($model,'fechaFin_dt'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'fechaFin_dt'); ?>
			<?php echo $form->error($model,'fechaFin_dt'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'estatus_did'); ?>">
		<?php echo $form->labelEx($model,'estatus_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'estatus_did',CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre')); ?>
			<?php echo $form->error($model,'estatus_did'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
