<?php

/**
 * This is the model class for table "tbl_componente_disciplina".
 *
 * The followings are the available columns in table 'tbl_componente_disciplina':
 * @property integer $id_componente
 * @property string $componente
 */
class ComponenteDisciplina extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return ComponenteDisciplina the static model class
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
		return 'tbl_componente_disciplina';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_componente, componente', 'required'),
			array('id_componente', 'numerical', 'integerOnly'=>true),
			array('componente', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_componente, componente', 'safe', 'on'=>'search'),
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
			'id_componente' => 'Id Componente',
			'componente' => 'Componente',
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

		$criteria->compare('id_componente',$this->id_componente);
		$criteria->compare('componente',$this->componente,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}