<?php

/**
 * This is the model class for table "tbl_usuario".
 *
 * The followings are the available columns in table 'tbl_usuario':
 * @property integer $cedula_usuario
 * @property string $nombre_usuario
 * @property string $apellido_usuario
 * @property string $clave_usuario
 * @property string $identificador_usuario
 * @property string $dependencia_usuario
 * @property string $rol_usuario
 */
class Usuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Usuario the static model class
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
		return 'tbl_usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula_usuario, nombre_usuario, apellido_usuario, clave_usuario, identificador_usuario, dependencia_usuario, rol_usuario', 'required'),
			array('cedula_usuario', 'numerical', 'integerOnly'=>true),
			array('nombre_usuario, apellido_usuario, clave_usuario, identificador_usuario, dependencia_usuario, rol_usuario', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cedula_usuario, nombre_usuario, apellido_usuario, clave_usuario, identificador_usuario, dependencia_usuario, rol_usuario', 'safe', 'on'=>'search'),
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
			'cedula_usuario' => 'Cédula',
			'nombre_usuario' => 'Nombre',
			'apellido_usuario' => 'Apellido',
			'clave_usuario' => 'Clave',
			'identificador_usuario' => 'Identificador',
			'dependencia_usuario' => 'Dependencia',
			'rol_usuario' => 'Rol',
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

		$criteria->compare('cedula_usuario',$this->cedula_usuario);
		$criteria->compare('nombre_usuario',$this->nombre_usuario,true);
		$criteria->compare('apellido_usuario',$this->apellido_usuario,true);
		$criteria->compare('clave_usuario',$this->clave_usuario,true);
		$criteria->compare('identificador_usuario',$this->identificador_usuario,true);
		$criteria->compare('dependencia_usuario',$this->dependencia_usuario,true);
		$criteria->compare('rol_usuario',$this->rol_usuario,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}