<?php

/**
 * This is the model class for table "tbl_estatus_academico".
 *
 * The followings are the available columns in table 'tbl_estatus_academico':
 * @property integer $id_estatus
 * @property string $estatus_academico
 */
class EstatusAcademico extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return EstatusAcademico the static model class
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
		return 'tbl_estatus_academico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_estatus, estatus_academico', 'required'),
			array('id_estatus', 'numerical', 'integerOnly'=>true),
			array('estatus_academico', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_estatus, estatus_academico', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_estatus' => 'Id Estatus',
			'estatus_academico' => 'Estatus Academico',
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

		$criteria->compare('id_estatus',$this->id_estatus);
		$criteria->compare('estatus_academico',$this->estatus_academico,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}