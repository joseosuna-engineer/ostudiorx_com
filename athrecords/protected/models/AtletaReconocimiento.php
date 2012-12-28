<?php

/**
 * This is the model class for table "tbl_atleta_reconocimiento".
 *
 * The followings are the available columns in table 'tbl_atleta_reconocimiento':
 * @property integer $id
 * @property integer $cedula_atleta
 * @property string $nombre_reconocimiento
 * @property string $institucion_reconocimiento
 * @property integer $year_reconocimiento
 * @property string $categoria_reconocimiento
 * @property string $evento_reconocimiento
 *
 * The followings are the available model relations:
 * @property AtletaPersonal $cedulaAtleta
 */
class AtletaReconocimiento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return AtletaReconocimiento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_atleta_reconocimiento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('cedula_atleta', 'required'),
			array('cedula_atleta, year_reconocimiento', 'numerical', 'integerOnly'=>true),
			array('nombre_reconocimiento, institucion_reconocimiento, categoria_reconocimiento, evento_reconocimiento', 'length', 'max'=>45),
			array('year_reconocimiento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cedula_atleta, nombre_reconocimiento, institucion_reconocimiento, year_reconocimiento, categoria_reconocimiento, evento_reconocimiento', 'safe', 'on'=>'search'),
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
			'cedulaAtleta' => array(self::BELONGS_TO, 'AtletaPersonal', 'cedula_atleta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
	
			'nombre_reconocimiento' => 'Nombre del reconocimiento',
			'institucion_reconocimiento' => 'Institución otorgante',
			'year_reconocimiento' => 'Año',
			
			'evento_reconocimiento' => 'Evento en el que fue otorgado',
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

		$criteria->compare('cedula_atleta',$this->cedula_atleta);
		$criteria->compare('nombre_reconocimiento',$this->nombre_reconocimiento,true);
		$criteria->compare('institucion_reconocimiento',$this->institucion_reconocimiento,true);
		$criteria->compare('year_reconocimiento',$this->year_reconocimiento);
		$criteria->compare('categoria_reconocimiento',$this->categoria_reconocimiento,true);
		$criteria->compare('evento_reconocimiento',$this->evento_reconocimiento,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}