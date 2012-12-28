<?php

/**
 * This is the model class for table "tbl_semestre".
 *
 * The followings are the available columns in table 'tbl_semestre':
 * @property integer $id_semestre
 * @property string $semestre
 */
class Semestre extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Semestre the static model class
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
		return 'tbl_semestre';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_semestre, semestre', 'required'),
			array('id_semestre', 'numerical', 'integerOnly'=>true),
			array('semestre', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_semestre, semestre', 'safe', 'on'=>'search'),
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
			'id_semestre' => 'Id Semestre',
			'semestre' => 'Semestre',
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

		$criteria->compare('id_semestre',$this->id_semestre);
		$criteria->compare('semestre',$this->semestre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}