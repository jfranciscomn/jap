<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'inversion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php $this->widget('BAlert',array(

		'content'=>'<p>Los campos marcados con <span class="required">*</span> son requeridos.</p>'
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="<?php echo $form->fieldClass($model, 'terrenos'); ?>">
		<?php echo $form->labelEx($model,'terrenos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'terrenos'); ?>
			<?php echo $form->error($model,'terrenos'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'muebles'); ?>">
		<?php echo $form->labelEx($model,'muebles'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'muebles'); ?>
			<?php echo $form->error($model,'muebles'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'vehiculosServicio'); ?>">
		<?php echo $form->labelEx($model,'vehiculosServicio'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'vehiculosServicio'); ?>
			<?php echo $form->error($model,'vehiculosServicio'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'vehiculosAdministrativos'); ?>">
		<?php echo $form->labelEx($model,'vehiculosAdministrativos'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'vehiculosAdministrativos'); ?>
			<?php echo $form->error($model,'vehiculosAdministrativos'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'otros'); ?>">
		<?php echo $form->labelEx($model,'otros'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'otros'); ?>
			<?php echo $form->error($model,'otros'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'institucion_aid'); ?>">
		<?php echo $form->labelEx($model,'institucion_aid'); ?>
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
			<?php echo $form->error($model,'institucion_aid'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'estatus_did'); ?>">
		<?php echo $form->labelEx($model,'estatus_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'estatus_did',CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre')); ?>
			<?php echo $form->error($model,'estatus_did'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'ejercicio_did'); ?>">
		<?php echo $form->labelEx($model,'ejercicio_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'ejercicio_did',CHtml::listData(EjercicioFiscal::model()->findAll(), 'id', 'nombre')); ?>
			<?php echo $form->error($model,'ejercicio_did'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'editable'); ?>">
		<?php echo $form->labelEx($model,'editable'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'editable'); ?>
			<?php echo $form->error($model,'editable'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'ultimaModificacion_dt'); ?>">
		<?php echo $form->labelEx($model,'ultimaModificacion_dt'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'ultimaModificacion_dt'); ?>
			<?php echo $form->error($model,'ultimaModificacion_dt'); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
