<?php

/**
 * This is the model class for table "tbl_escuela_atleta".
 *
 * The followings are the available columns in table 'tbl_escuela_atleta':
 * @property integer $id_facultad
 * @property integer $id_escuela
 * @property string $escuela
 *
 * The followings are the available model relations:
 * @property FacultadAtleta $idFacultad
 */
class EscuelaAtleta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return EscuelaAtleta the static model class
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
		return 'tbl_escuela_atleta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_facultad, id_escuela, escuela', 'required'),
			array('id_facultad, id_escuela', 'numerical', 'integerOnly'=>true),
			array('escuela', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_facultad, id_escuela, escuela', 'safe', 'on'=>'search'),
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
			'idFacultad' => array(self::BELONGS_TO, 'FacultadAtleta', 'id_facultad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_facultad' => 'Id Facultad',
			'id_escuela' => 'Id Escuela',
			'escuela' => 'Escuela',
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

		$criteria->compare('id_facultad',$this->id_facultad);
		$criteria->compare('id_escuela',$this->id_escuela);
		$criteria->compare('escuela',$this->escuela,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}