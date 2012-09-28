<div class="form">

<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'institucion-form',
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

	<div class="<?php echo $form->fieldClass($model, 'siglas'); ?>">
		<?php echo $form->labelEx($model,'siglas'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'siglas',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'siglas'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'mision'); ?>">
		<?php echo $form->labelEx($model,'mision'); ?>
		<div class="input">
			
			<?php echo $form->textArea($model,'mision',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'mision'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'vision'); ?>">
		<?php echo $form->labelEx($model,'vision'); ?>
		<div class="input">
			
			<?php echo $form->textArea($model,'vision',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'vision'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'domicioDireccion'); ?>">
		<?php echo $form->labelEx($model,'domicioDireccion'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'domicioDireccion',array('size'=>60,'maxlength'=>145)); ?>
			<?php echo $form->error($model,'domicioDireccion'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'domicilioCP'); ?>">
		<?php echo $form->labelEx($model,'domicilioCP'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'domicilioCP',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'domicilioCP'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'domicilioMunicipio_aid'); ?>">
		<?php echo $form->labelEx($model,'domicilioMunicipio_aid'); ?>
		<div class="input">
			
			<?php echo  ''; ?> <?php $this->widget('ext.custom.widgets.EJuiAutoCompleteFkField', array(
						'model'=>$model, 
						'attribute'=>'domicilioMunicipio_aid', 
						'sourceUrl'=>Yii::app()->createUrl('municipio/autocompletesearch'), 
						'showFKField'=>false,
						'relName'=>'domicilioMunicipio', // the relation name defined above
						'displayAttr'=>'nombre',  // attribute or pseudo-attribute to display
						
						'options'=>array(
							'minLength'=>1, 
						),
					)); ?>
			<?php echo $form->error($model,'domicilioMunicipio_aid'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'contactoTelefono'); ?>">
		<?php echo $form->labelEx($model,'contactoTelefono'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'contactoTelefono',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'contactoTelefono'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'contactoFax'); ?>">
		<?php echo $form->labelEx($model,'contactoFax'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'contactoFax',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'contactoFax'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'contactoEmail'); ?>">
		<?php echo $form->labelEx($model,'contactoEmail'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'contactoEmail',array('size'=>60,'maxlength'=>145)); ?>
			<?php echo $form->error($model,'contactoEmail'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'fechaConstitucion_dt'); ?>">
		<?php echo $form->labelEx($model,'fechaConstitucion_dt'); ?>
		<div class="input">
			
			<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker',
			array(
				'model'=>$model,
				'attribute'=>'fechaConstitucion_dt',
				'language'=>'es',
				'options'=> array(
					'dateFormat'=>'yy-mm-dd', 
					'altFormat'=>'dd-mm-yy', 
					'changeMonth'=>'true', 
					'changeYear'=>'true', 
					'yearRange'=>'1990:'.date('Y'), 
					'showOn'=>'both',
					'buttonText'=>'<i class="icon-calendar"></i>'
				),
			));
			
			?>	
			<?php echo $form->error($model,'fecha_f'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'fechaTransformacion_dt'); ?>">
		<?php echo $form->labelEx($model,'fechaTransformacion_dt'); ?>
		<div class="input">
			
			<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker',
			array(
				'model'=>$model,
				'attribute'=>'fechaTransformacion_dt',
				'language'=>'es',
				'options'=> array(
					'dateFormat'=>'yy-mm-dd', 
					'altFormat'=>'dd-mm-yy', 
					'changeMonth'=>'true', 
					'changeYear'=>'true', 
					'yearRange'=>'1990:'.date('Y'), 
					'showOn'=>'both',
					'buttonText'=>'<i class="icon-calendar"></i>'
				),
			));
			
			?>	
			<?php echo $form->error($model,'fecha_f'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'rfc'); ?>">
		<?php echo $form->labelEx($model,'rfc'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'rfc',array('size'=>13,'maxlength'=>13)); ?>
			<?php echo $form->error($model,'rfc'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'donativoDeducible'); ?>">
		<?php echo $form->labelEx($model,''); ?>
		<div class="input">
			
			<?php echo $form->checkBox($model, 'donativoDeducible', array('size'=>1,'maxlength'=>1, 'value'=>'1', 'uncheckValue'=>'0')); ?>
			<?php echo $form->error($model,'donativoDeducible'); ?>
		</div>
	</div>
	
	<div class="<?php echo $form->fieldClass($model, 'donativoConvenio'); ?>">
		<?php echo $form->labelEx($model,''); ?>
		<div class="input">
			
			<?php echo $form->checkBox($model, 'donativoConvenio', array('size'=>1,'maxlength'=>1, 'value'=>'1', 'uncheckValue'=>'0')); ?>
			<?php echo $form->error($model,'donativoConvenio'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'cluni'); ?>">
		<?php echo $form->labelEx($model,'cluni'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'cluni',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'cluni'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'ambito_did'); ?>">
		<?php echo $form->labelEx($model,'ambito_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'ambito_did',CHtml::listData(Ambito::model()->findAll(), 'id', 'nombre')); ?>
			<?php echo $form->error($model,'ambito_did'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'areageografica_did'); ?>">
		<?php echo $form->labelEx($model,'areageografica_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'areageografica_did',CHtml::listData(AreaGeografica::model()->findAll(), 'id', 'nombre')); ?>
			<?php echo $form->error($model,'areageografica_did'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'horasPromedio_trabajador'); ?>">
		<?php echo $form->labelEx($model,'horasPromedio_trabajador'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'horasPromedio_trabajador'); ?>
			<?php echo $form->error($model,'horasPromedio_trabajador'); ?>
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
