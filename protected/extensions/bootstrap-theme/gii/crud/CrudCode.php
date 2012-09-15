<?php

class CrudCode extends CCodeModel
{
	public $model;
	public $controller;
	public $baseControllerClass='Controller';

	private $_modelClass;
	private $_table;
	private $_fieldTypes;
	

	public function rules()
	{
		return array_merge(parent::rules(), array(
			array('model, controller', 'filter', 'filter'=>'trim'),
			array('model, controller, baseControllerClass', 'required'),
			array('model', 'match', 'pattern'=>'/^\w+[\w+\\.]*$/', 'message'=>'{attribute} should only contain word characters and dots.'),
			array('controller', 'match', 'pattern'=>'/^\w+[\w+\\/]*$/', 'message'=>'{attribute} should only contain word characters and slashes.'),
			array('baseControllerClass', 'match', 'pattern'=>'/^[a-zA-Z_]\w*$/', 'message'=>'{attribute} should only contain word characters.'),
			array('baseControllerClass', 'validateReservedWord', 'skipOnError'=>true),
			array('model', 'validateModel'),
			array('baseControllerClass', 'sticky'),
		));
	}

	public function attributeLabels()
	{
		return array_merge(parent::attributeLabels(), array(
			'model'=>'Model Class',
			'controller'=>'Controller ID',
			'baseControllerClass'=>'Base Controller Class',
		));
	}

	public function requiredTemplates()
	{
		return array(
			'controller.php',
		);
	}

	public function init()
	{
		if(Yii::app()->db===null)
			throw new CHttpException(500,'An active "db" connection is required to run this generator.');
		
		parent::init();
		
		
		

		
	}

	public function successMessage()
	{
		$link=CHtml::link('try it now', Yii::app()->createUrl($this->controller), array('target'=>'_blank'));
		return "The controller has been generated successfully. You may $link.";
	}

	public function validateModel($attribute,$params)
	{
		if($this->hasErrors('model'))
			return;
		$class=@Yii::import($this->model,true);
		//echo '<pre>'; print_r (); echo '</pre>';
		//echo '<pre>'; print_r ($this->getModule()); echo '</pre>';
		$ruta=substr($this->model,0,strrpos($this->model,'.'));
		if(!empty($ruta))
			Yii::import(substr($this->model,0,strrpos($this->model,'.')).'.*',true);
		if(!is_string($class) || !$this->classExists($class))
			$this->addError('model', "Class '{$this->model}' does not exist or has syntax error.");
		else if(!is_subclass_of($class,'CActiveRecord'))
			$this->addError('model', "'{$this->model}' must extend from CActiveRecord.");
		else
		{
			$table=CActiveRecord::model($class)->tableSchema;
			if($table->primaryKey===null)
				$this->addError('model',"Table '{$table->name}' does not have a primary key.");
			else if(is_array($table->primaryKey))
				$this->addError('model',"Table '{$table->name}' has a composite primary key which is not supported by crud generator.");
			else
			{
				$this->_modelClass=$class;
				$this->_table=$table;
			}
			$this->generateFieldTypes();
		}
	}
	
	private function generateFieldTypes()
	{
		$modelo= new $this->_modelClass;
		$this->_fieldTypes=array();
		foreach($modelo->extendedRules() as $regla){
			if($regla[1]=='dropdownfield')
				$this->_fieldTypes['dropdownfield']=explode(', ',$regla[0]);
			else if($regla[1]=='autocompletefield')
				$this->_fieldTypes['autocompletefield']=explode(', ',$regla[0]);
			else if($regla[1]=='datefield')
				$this->_fieldTypes['datefield']=explode(', ',$regla[0]);
			}
	}
	
		
	public function prepare()
	{
		$this->files=array();
		$templatePath=$this->templatePath;
		$controllerTemplateFile=$templatePath.DIRECTORY_SEPARATOR.'controller.php';

		$this->files[]=new CCodeFile(
			$this->controllerFile,
			$this->render($controllerTemplateFile)
		);

		$files=scandir($templatePath);
		foreach($files as $file)
		{
			if(is_file($templatePath.'/'.$file) && CFileHelper::getExtension($file)==='php' && $file!=='controller.php')
			{
				$this->files[]=new CCodeFile(
					$this->viewPath.DIRECTORY_SEPARATOR.$file,
					$this->render($templatePath.'/'.$file)
				);
			}
		}
		
	}

	public function getModelClass()
	{
		return $this->_modelClass;
	}

	public function getControllerClass()
	{
		if(($pos=strrpos($this->controller,'/'))!==false)
			return ucfirst(substr($this->controller,$pos+1)).'Controller';
		else
			return ucfirst($this->controller).'Controller';
	}

	public function getModule()
	{
		if(($pos=strpos($this->controller,'/'))!==false)
		{
			$id=substr($this->controller,0,$pos);
			if(($module=Yii::app()->getModule($id))!==null)
				return $module;
		}
		return Yii::app();
	}

	public function getControllerID()
	{
		if($this->getModule()!==Yii::app())
			$id=substr($this->controller,strpos($this->controller,'/')+1);
		else
			$id=$this->controller;
		if(($pos=strrpos($id,'/'))!==false)
			$id[$pos+1]=strtolower($id[$pos+1]);
		else
			$id[0]=strtolower($id[0]);
		return $id;
	}

	public function getUniqueControllerID()
	{
		$id=$this->controller;
		if(($pos=strrpos($id,'/'))!==false)
			$id[$pos+1]=strtolower($id[$pos+1]);
		else
			$id[0]=strtolower($id[0]);
		return $id;
	}

	public function getControllerFile()
	{
		$module=$this->getModule();
		$id=$this->getControllerID();
		if(($pos=strrpos($id,'/'))!==false)
			$id[$pos+1]=strtoupper($id[$pos+1]);
		else
			$id[0]=strtoupper($id[0]);
		return $module->getControllerPath().'/'.$id.'Controller.php';
	}

	public function getViewPath()
	{
		return $this->getModule()->getViewPath().'/'.$this->getControllerID();
	}

	public function getTableSchema()
	{
		return $this->_table;
	}

	public function generateInputLabel($modelClass,$column)
	{
		return "CHtml::activeLabelEx(\$model,'{$column->name}')";
	}

	public function generateInputField($modelClass,$column)
	{
		
		if($column->type==='boolean')
			return "BHtml::activeCheckBox(\$model,'{$column->name}')";
		else if(stripos($column->dbType,'text')!==false)
			return "BHtml::activeTextArea(\$model,'{$column->name}',array('rows'=>6, 'cols'=>50))";
		else
		{
			if(preg_match('/^(password|pass|passwd|passcode)$/i',$column->name))
				$inputField='activePasswordField';
			else
				$inputField='activeTextField';

			if($column->type!=='string' || $column->size===null)
				return "BHtml::{$inputField}(\$model,'{$column->name}')";
			else
			{
				if(($size=$maxLength=$column->size)>60)
					$size=60;
				return "BHtml::{$inputField}(\$model,'{$column->name}',array('size'=>$size,'maxlength'=>$maxLength))";
			}
		}
	}

	public function generateActiveLabel($modelClass,$column)
	{
		if(is_string($column))
			return "\$form->labelEx(\$model,'{$column}')";
		else
			return "\$form->labelEx(\$model,'{$column->name}')";
	}

	public function generateActiveField($modelClass,$column)
	{
		$ret = array();
		$columname = is_string($column)?  $column:$column->name;
		
		$stringkey=Yii::app()->modules['gii']['custom']['StringKey'];
		if(!is_string($column) && $column->type==='boolean')
			return "\$form->checkBox(\$model,'{$columname}')";
		else if(!is_string($column) && stripos($column->dbType,'text')!==false)
			return "\$form->textArea(\$model,'{$columname}',array('rows'=>6, 'cols'=>50))";
		else
		{
			if(preg_match('/^(password|pass|passwd|passcode)$/i',$columname))
				$inputField='passwordField';
			else
				$inputField='textField';

			$modelo= new $this->_modelClass;
			if(!empty($this->_fieldTypes['dropdownfield'])  && in_array($columname,$this->_fieldTypes['dropdownfield']))
			{
				if(is_string($column))
				{
					$strtmp="array(
						'empty'=>'Seleccione un {$modelo->attributeDatatypeRelation($columname)}', 
						'ajax' => array(
							   'type'=>'POST',
							   'url'=>CController::createUrl('hijoController/dynamicList'),
							   'update'=>'#{$modelClass}_hijoAttr',
							   'data'=>array('{$columname}'=>'js:this.value'),
							),)";
					return '$form->dropDownList($model,\''.$columname.'\',CHtml::listData('.$modelo->attributeDatatypeRelation($columname)."::model()->findAll(), 'id', '{$stringkey}'),{$strtmp})";
				}
				else
					return '$form->dropDownList($model,\''.$columname.'\',CHtml::listData('.$modelo->attributeDatatypeRelation($columname)."::model()->findAll(), 'id', '{$stringkey}'))";
			}
			else if(!empty($this->_fieldTypes['autocompletefield'])  &&  in_array($columname, $this->_fieldTypes['autocompletefield']))
				return " ''; ?> <?php \$this->widget('ext.custom.widgets.EJuiAutoCompleteFkField', array(
						'model'=>\$model, 
						'attribute'=>'$columname', 
						'sourceUrl'=>Yii::app()->createUrl('".$modelo->attributeReferenceRelation($columname)."/autocompletesearch'), 
						'showFKField'=>false,
						'relName'=>'".$modelo->attributeReferenceRelation($columname)."', // the relation name defined above
						'displayAttr'=>'{$stringkey}',  // attribute or pseudo-attribute to display
						
						'options'=>array(
							'minLength'=>1, 
						),
					))";
			else if(!empty($this->_fieldTypes['datefield'])  &&  in_array($columname, $this->_fieldTypes['datefield']))
				return "\$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					                                       'model'=>\$model,
					                                       'attribute'=>'$columname',
					                                       'value'=>\$model->$columname,
					                                       'language' => 'es',
					                                       'htmlOptions' => array('readonly'=>\"readonly\"),
					                                       'options'=>array(
					                                               'autoSize'=>true,
					                                               'defaultDate'=>\$model->$columname,
					                                               'dateFormat'=>'yy-mm-dd',
					                                               'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
					                                               'buttonImageOnly'=>true,
					                                               'buttonText'=>'Fecha',
					                                               'selectOtherMonths'=>true,
					                                               'showAnim'=>'slide',
					                                               'showButtonPanel'=>true,
					                                               'showOn'=>'button',
					                                               'showOtherMonths'=>true,
					                                               'changeMonth' => 'true',
					                                               'changeYear' => 'true',
					                                               'minDate'=>\"-70Y\", //fecha minima
					                                               'maxDate'=> \"+10Y\", //fecha maxima
					                                       ),))";
			else if( !is_string($column) && ($column->type!=='string' || $column->size===null))
				return "\$form->{$inputField}(\$model,'{$columname}')";
			else
			{
				if(!is_string($column) && ($size=$maxLength=$column->size)>60)
					$size=60;
				return "\$form->{$inputField}(\$model,'{$column->name}',array('size'=>$size,'maxlength'=>$maxLength))";
			}
		}
		
	}

	public function guessNameColumn($columns)
	{
		foreach($columns as $column)
		{
			if(!strcasecmp($column->name,'name'))
				return $column->name;
		}
		foreach($columns as $column)
		{
			if(!strcasecmp($column->name,'title'))
				return $column->name;
		}
		foreach($columns as $column)
		{
			if($column->isPrimaryKey)
				return $column->name;
		}
		return 'id';
	}
}
