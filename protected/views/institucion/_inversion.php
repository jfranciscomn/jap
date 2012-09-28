<div class="well">
	<div class="form">
	
		<?php $form=$this->beginWidget('BActiveForm', array(
			'id'=>'inversion-form',
			'enableAjaxValidation'=>false,
		)); ?>
	
		
		<div class="alert alert-info">
		  <h4>Inversiones!</h4>
		  Por favor introduzca la información que se pide a continuación.
		</div>
	
		<?php echo $form->errorSummary($modelInversion); ?>
	
		<div class="<?php echo $form->fieldClass($modelInversion, 'terrenos'); ?>">
			<?php echo $form->labelEx($modelInversion,'terrenos'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				<?php echo $form->textField($modelInversion,'terrenos'); ?>
				<?php echo $form->error($modelInversion,'terrenos'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelInversion, 'muebles'); ?>">
			<?php echo $form->labelEx($modelInversion,'muebles'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				<?php echo $form->textField($modelInversion,'muebles'); ?>
				<?php echo $form->error($modelInversion,'muebles'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelInversion, 'vehiculosServicio'); ?>">
			<?php echo $form->labelEx($modelInversion,'vehiculosServicio'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				<?php echo $form->textField($modelInversion,'vehiculosServicio'); ?>
				<?php echo $form->error($modelInversion,'vehiculosServicio'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelInversion, 'vehiculosAdministrativos'); ?>">
			<?php echo $form->labelEx($modelInversion,'vehiculosAdministrativos'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				<?php echo $form->textField($modelInversion,'vehiculosAdministrativos'); ?>
				<?php echo $form->error($modelInversion,'vehiculosAdministrativos'); ?>
			</div>
		</div>
	
		<div class="<?php echo $form->fieldClass($modelInversion, 'otros'); ?>">
			<?php echo $form->labelEx($modelInversion,'otros'); ?>
			<div class="input-prepend">
				<span class="add-on">$</span>
				<?php echo $form->textField($modelInversion,'otros'); ?>
				<?php echo $form->error($modelInversion,'otros'); ?>
			</div>
		</div>
	
		<div class="actions">
			<?php echo BHtml::submitButton($modelInversion->isNewRecord ? 'Mandar Inversión' : 'Modificar Inversión'); ?>
		</div>
	
	<?php $this->endWidget(); ?>
	
	</div><!-- form -->
</div>
