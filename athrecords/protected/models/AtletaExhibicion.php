<?php

/**
 * This is the model class for table "tbl_atleta_exhibicion".
 *
 * The followings are the available columns in table 'tbl_atleta_exhibicion':
 * @property integer $id
 * @property integer $cedula_atleta
 * @property string $nombre_exhibicion
 * @property string $nombre_sede_exhibicion
 * @property integer $year_exhibicion
 * @property string $facilitador_exhibicion
 *
 * The followings are the available model relations:
 * @property AtletaPersonal $cedulaAtleta
 */
class AtletaExhibicion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return AtletaExhibicion the static model class
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
		return 'tbl_atleta_exhibicion';
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
			array('cedula_atleta, year_exhibicion', 'numerical', 'integerOnly'=>true),
			array('nombre_exhibicion, nombre_sede_exhibicion, facilitador_exhibicion', 'length', 'max'=>45),
			array('year_exhibicion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cedula_atleta, nombre_exhibicion, nombre_sede_exhibicion, year_exhibicion, facilitador_exhibicion', 'safe', 'on'=>'search'),
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
			
			'nombre_exhibicion' => 'Nombre',
			'nombre_sede_exhibicion' => 'Sede',
			'year_exhibicion' => 'Año',
			'facilitador_exhibicion' => 'Facilitador',
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
		$criteria->compare('nombre_exhibicion',$this->nombre_exhibicion,true);
		$criteria->compare('nombre_sede_exhibicion',$this->nombre_sede_exhibicion,true);
		$criteria->compare('year_exhibicion',$this->year_exhibicion);
		$criteria->compare('facilitador_exhibicion',$this->facilitador_exhibicion,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}