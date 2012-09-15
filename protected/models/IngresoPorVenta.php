<?php

/**
 * This is the model class for table "IngresoPorVenta".
 *
 * The followings are the available columns in table 'IngresoPorVenta':
 * @property integer $id
 * @property integer $institucion_aid
 * @property integer $ejercicio_did
 * @property integer $estatus_did
 * @property integer $editable
 * @property string $ultimaModificacion_dt
 *
 * The followings are the available model relations:
 * @property EjercicioFiscal $ejercicio
 * @property Institucion $institucion
 * @property Estatus $estatus
 * @property IngresoPorVentaDetalle[] $ingresoPorVentaDetalles
 */
class IngresoPorVenta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return IngresoPorVenta the static model class
	 */
	 
	public static function classNameLabel()
	{
		return 'IngresoPorVenta';
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
		return 'IngresoPorVenta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, institucion_aid, ejercicio_did, estatus_did, editable, ultimaModificacion_dt', 'required'),
			array('id, institucion_aid, ejercicio_did, estatus_did, editable', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, institucion_aid, ejercicio_did, estatus_did, editable, ultimaModificacion_dt', 'safe', 'on'=>'search'),
		);
	}
	
	
	public function extendedRules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ejercicio_did, estatus_did','dropdownfield'),
			array('institucion_aid','autocompletefield'),
			
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
			'ejercicio' => array(self::BELONGS_TO, 'EjercicioFiscal', 'ejercicio_did'),
			'institucion' => array(self::BELONGS_TO, 'Institucion', 'institucion_aid'),
			'estatus' => array(self::BELONGS_TO, 'Estatus', 'estatus_did'),
			'ingresoPorVentaDetalles' => array(self::HAS_MANY, 'IngresoPorVentaDetalle', 'ingresoPorVenta_aid'),
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
		foreach ($this->$ingresoPorVentaDetalles as $ingresoPorVentaDetallesn )
			$ingresoPorVentaDetallesn->deleteCascade();

		$this->delete();
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'institucion_aid' => 'Institucion',
			'ejercicio_did' => 'Ejercicio',
			'estatus_did' => 'Estatus',
			'editable' => 'Editable',
			'ultimaModificacion_dt' => 'Ultima Modificacion Dt',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('institucion_aid',$this->institucion_aid);
		$criteria->compare('ejercicio_did',$this->ejercicio_did);
		$criteria->compare('estatus_did',$this->estatus_did);
		$criteria->compare('editable',$this->editable);
		$criteria->compare('ultimaModificacion_dt',$this->ultimaModificacion_dt,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
