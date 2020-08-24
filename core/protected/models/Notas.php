<?php

/**
 * This is the model class for table "tbl_notas".
 *
 * The followings are the available columns in table 'tbl_notas':
 * @property integer $id_nota
 * @property string $nota
 */
class Notas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Notas the static model class
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
		return 'tbl_notas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_nota, nota', 'required'),
			array('id_nota', 'numerical', 'integerOnly'=>true),
			array('nota', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_nota, nota', 'safe', 'on'=>'search'),
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
			'id_nota' => 'Id Nota',
			'nota' => 'Nota',
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

		$criteria->compare('id_nota',$this->id_nota);
		$criteria->compare('nota',$this->nota,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}