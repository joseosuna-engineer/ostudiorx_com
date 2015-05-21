<?php

/**
 * This is the model class for table "tbl_foto".
 *
 * The followings are the available columns in table 'tbl_foto':
 * @property integer $cedula_atleta
 * @property string $foto_atleta
 */
class Foto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Foto the static model class
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
		return 'tbl_foto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula_atleta', 'required'),
			array('cedula_atleta', 'numerical', 'integerOnly'=>true),
			array('foto_atleta', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cedula_atleta, foto_atleta', 'safe', 'on'=>'search'),
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
			'cedula_atleta' => 'Cedula Atleta',
			'foto_atleta' => 'Foto Atleta',
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
		$criteria->compare('foto_atleta',$this->foto_atleta,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
	
		protected function beforeSave(){
	
		// tomar la foto que puse en el directorio y llevarla a la base de datos
			$fotos = glob(  "./images/_foto*.jpg"  );
			if( count($fotos) > 0 ){
			
				$foto_arc = $fotos[0];
				
				
				if(file_exists($foto_arc)){
					$this->foto_atleta = file_get_contents($foto_arc);
					unlink($foto_arc);
				}
			
			}else{
			
				$foto_arc = './images/foto.jpg';
				if(file_exists($foto_arc)){
					$this->foto_atleta = file_get_contents($foto_arc);
				}			
			}
	
		return parent::beforeSave();
		
	}
}