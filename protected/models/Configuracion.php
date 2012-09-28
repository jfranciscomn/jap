<?php

/**
 * This is the model class for table "Configuracion".
 *
 * The followings are the available columns in table 'Configuracion':
 * @property string $id
 * @property integer $ejercicioFiscal_did
 * @property string $fechaInicioEdicion
 * @property string $fechaFinalEdicion
 * @property integer $estatus_did
 *
 * The followings are the available model relations:
 * @property EjercicioFiscal $ejercicioFiscal
 * @property Estatus $estatus
 */
class Configuracion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Configuracion the static model class
	 */
	 
	public static function classNameLabel()
	{
		return 'Configuracion';
	}
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Configuracion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ejercicioFiscal_did, fechaInicioEdicion, estatus_did', 'required'),
			array('ejercicioFiscal_did, estatus_did', 'numerical', 'integerOnly'=>true),
			array('fechaFinalEdicion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, ejercicioFiscal_did, fechaInicioEdicion, fechaFinalEdicion, estatus_did', 'safe', 'on'=>'search'),
		);
	}
	
	
	public function extendedRules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ejercicioFiscal_did, estatus_did','dropdownfield'),
			
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'ejercicioFiscal' => array(self::BELONGS_TO, 'EjercicioFiscal', 'ejercicioFiscal_did'),
			'estatus' => array(self::BELONGS_TO, 'Estatus', 'estatus_did'),
		);
	}
	
	
	/**
	*
	*/
	public function setLinkedRelations(){
		/*return array('municipio_id'=>array(
				'model'=>'Estado',
				'attribute' =>'estado_id',
				'value'=> $this->municipio->estado->id,
			),);*/
			
		return array();
	}
	
	
	/**
	* elimina en cascada
	**/
	public function deleteCascade()
	{
		$this->delete();
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ejercicioFiscal_did' => 'Ejercicio Fiscal',
			'fechaInicioEdicion' => 'Fecha Inicio Edicion',
			'fechaFinalEdicion' => 'Fecha Final Edicion',
			'estatus_did' => 'Estatus',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('ejercicioFiscal_did',$this->ejercicioFiscal_did);
		$criteria->compare('fechaInicioEdicion',$this->fechaInicioEdicion,true);
		$criteria->compare('fechaFinalEdicion',$this->fechaFinalEdicion,true);
		$criteria->compare('estatus_did',$this->estatus_did);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
