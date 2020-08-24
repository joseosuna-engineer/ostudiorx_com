<?php

/**
 * This is the model class for table "tbl_facultad_atleta".
 *
 * The followings are the available columns in table 'tbl_facultad_atleta':
 * @property integer $id_facultad
 * @property string $facultad
 *
 * The followings are the available model relations:
 * @property EscuelaAtleta[] $escuelaAtletas
 */
class FacultadAtleta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return FacultadAtleta the static model class
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
		return 'tbl_facultad_atleta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_facultad, facultad', 'required'),
			array('id_facultad', 'numerical', 'integerOnly'=>true),
			array('facultad', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_facultad, facultad', 'safe', 'on'=>'search'),
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
			'escuelaAtletas' => array(self::HAS_MANY, 'EscuelaAtleta', 'id_facultad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_facultad' => 'Id Facultad',
			'facultad' => 'Facultad',
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
		$criteria->compare('facultad',$this->facultad,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}