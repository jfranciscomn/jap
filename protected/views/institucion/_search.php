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
		<?php echo $form->label($model,'nombre'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>145)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'siglas'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'siglas',array('size'=>45,'maxlength'=>45)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'mision'); ?>
		<div class="input">
			
			<?php echo $form->textArea($model,'mision',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'vision'); ?>
		<div class="input">
			
			<?php echo $form->textArea($model,'vision',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'domicioDireccion'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'domicioDireccion',array('size'=>60,'maxlength'=>145)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'domicilioCP'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'domicilioCP',array('size'=>45,'maxlength'=>45)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'domicilioMunicipio_aid'); ?>
		<div class="input">
			
			<?php echo  ''; ?> <?php $this->widget('ext.custom.widgets.EJuiAutoCompleteFkField', array(
						'model'=>$model, 
						'attribute'=>'domicilioMunicipio_aid', 
						'sourceUrl'=>Yii::app()->createUrl('domicilioMunicipio/autocompletesearch'), 
						'showFKField'=>false,
						'relName'=>'domicilioMunicipio', // the relation name defined above
						'displayAttr'=>'nombre',  // attribute or pseudo-attribute to display
						
						'options'=>array(
							'minLength'=>1, 
						),
					)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'contactoTelefono'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'contactoTelefono',array('size'=>45,'maxlength'=>45)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'contactoFax'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'contactoFax',array('size'=>45,'maxlength'=>45)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'contactoEmail'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'contactoEmail',array('size'=>60,'maxlength'=>145)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'fechaConstitucion_dt'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'fechaConstitucion_dt'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'fechaTransformacion_dt'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'fechaTransformacion_dt'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'rfc'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'rfc',array('size'=>13,'maxlength'=>13)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'donativoDeducible'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'donativoDeducible'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'donativoConvenio'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'donativoConvenio'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'cluni'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'cluni',array('size'=>45,'maxlength'=>45)); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'ambito_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'ambito_did',CHtml::listData(Ambito::model()->findAll(), 'id', 'nombre')); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'areageografica_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'areageografica_did',CHtml::listData(AreaGeografica::model()->findAll(), 'id', 'nombre')); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'horasPromedio_trabajador'); ?>
		<div class="input">
			
			<?php echo $form->textField($model,'horasPromedio_trabajador'); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->label($model,'estatus_did'); ?>
		<div class="input">
			
			<?php echo $form->dropDownList($model,'estatus_did',CHtml::listData(Estatus::model()->findAll(), 'id', 'nombre')); ?>
		</div>
	</div>

	<div class="actions">
		<?php echo BHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
