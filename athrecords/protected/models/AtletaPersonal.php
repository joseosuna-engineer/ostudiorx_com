<?php

/**
 * This is the model class for table "tbl_atleta_personal".
 *
 * The followings are the available columns in table 'tbl_atleta_personal':
 * @property integer $cedula_atleta
 * @property string $fecha_ultima_actualizacion_registro
 * @property string $primer_nombre_atleta
 * @property string $segundo_nombre_atleta
 * @property string $primer_apellido_atleta
 * @property string $segundo_apellido_atleta
 * @property string $sexo_atleta
 * @property string $fecha_nacimiento_atleta
 * @property string $pais_nacimiento_atleta
 * @property string $estado_nacimiento_atleta
 * @property string $estado_civil_atleta
 * @property string $nacionalidad_atleta
 * @property string $direccion_estado_atleta
 * @property string $direccion_municipio_atleta
 * @property string $direccion_calle_atleta
 * @property string $direccion_tipo_calle_atleta


 * @property string $telefono_habitacion_atleta
 * @property string $telefono_celular_atleta
 * @property string $correo_electronico_atleta
 * @property string $talla_camisa_atleta
 * @property string $talla_franela_atleta
 * @property string $talla_pantalon_atleta
 * @property string $talla_short_atleta
 * @property string $talla_mono_atleta
 * @property string $talla_karategui_atleta
 * @property string $talla_dobok_atleta
 * @property string $talla_judogui_atleta
 * @property string $talla_traje_natacion_atleta
 * @property string $talla_calzado_atleta
 * @property string $talla_trusa_atleta
 * @property string $peso_atleta
 * @property string $estatura_atleta
 * @property string $alergias_atleta
 * @property string $evaluacion_medica_atleta
 * @property string $pertenece_ucv_atleta
 * @property string $sector_atleta
 * @property string $facultad_atleta
 * @property string $escuela_atleta
 * @property string $institucion_trabajo_atleta
 * @property string $departamento_trabajo_atleta

 *
 * The followings are the available model relations:
 * @property AtletaAcademico $atletaAcademico
 * @property AtletaCompetencia $atletaCompetencia
 * @property AtletaDeportivo $atletaDeportivo
 * @property AtletaExhibicion $atletaExhibicion
 * @property AtletaReconocimiento $atletaReconocimiento
 * @property AtletaSancion $atletaSancion
 */
class AtletaPersonal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return AtletaPersonal the static model class
	 */
	 
	 public $dia_nacimiento_atleta;
	 public $mes_nacimiento_atleta;
	 public $year_nacimiento_atleta;
	 public $foto_direccion;
	 public $fotocopia_direccion;
	 public $year_ingreso_educacion_superior_atleta;
	 public $disciplina_atleta;
	 public $es_atleta_activo;
	 
	
	 
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_atleta_personal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula_atleta,  primer_nombre_atleta, primer_apellido_atleta,  sector_atleta, escuela_atleta', 'required'),
			array('cedula_atleta', 'numerical', 'integerOnly'=>true),
			array('cedula_atleta', 'unique', 'attributeName'=>'cedula_atleta'),
			array('foto_direccion, fotocopia_direccion', 'file', 'allowEmpty'=>true, 'types'=>'gif, jpg, png', 'wrongType'=>'{attribute} no válida, tipos de imágenes permitidas: gif, jpg y png.'),
			array('primer_nombre_atleta, segundo_nombre_atleta, primer_apellido_atleta, segundo_apellido_atleta', 'ext.alpha', 'minChars'=>0, 'allowSpaces'=>true, 'allAccentedLetters'=>true, 'message'=>'{attribute} sólo debe contener letras, espacios y acentos.'),
			
			array('primer_nombre_atleta, segundo_nombre_atleta, primer_apellido_atleta, segundo_apellido_atleta, sexo_atleta, mes_nacimiento_atleta, pais_nacimiento_atleta, estado_nacimiento_atleta, estado_civil_atleta, nacionalidad_atleta, direccion_estado_atleta, direccion_municipio_atleta,   direccion_calle_atleta,     telefono_habitacion_atleta, telefono_celular_atleta, correo_electronico_atleta, talla_camisa_atleta, talla_franela_atleta, talla_pantalon_atleta, talla_short_atleta, talla_mono_atleta, talla_karategui_atleta, talla_dobok_atleta, talla_judogui_atleta, talla_traje_natacion_atleta, talla_calzado_atleta, talla_trusa_atleta, peso_atleta, estatura_atleta, evaluacion_medica_atleta, pertenece_ucv_atleta, sector_atleta, facultad_atleta, escuela_atleta, institucion_trabajo_atleta, departamento_trabajo_atleta', 'length', 'max'=>45),
			array('alergias_atleta', 'length', 'max'=>200),
			
			array('cedula_atleta, primer_nombre_atleta, segundo_nombre_atleta, primer_apellido_atleta, segundo_apellido_atleta, sexo_atleta,  pais_nacimiento_atleta, estado_nacimiento_atleta,  estado_civil_atleta, nacionalidad_atleta, direccion_estado_atleta, direccion_municipio_atleta,   direccion_calle_atleta,       telefono_habitacion_atleta, telefono_celular_atleta, correo_electronico_atleta, talla_camisa_atleta, talla_franela_atleta, talla_pantalon_atleta, talla_short_atleta, talla_mono_atleta, talla_karategui_atleta, talla_dobok_atleta, talla_judogui_atleta, talla_traje_natacion_atleta, talla_calzado_atleta, talla_trusa_atleta, peso_atleta, estatura_atleta, alergias_atleta, evaluacion_medica_atleta, pertenece_ucv_atleta, sector_atleta, facultad_atleta, escuela_atleta, institucion_trabajo_atleta, departamento_trabajo_atleta, dia_nacimiento_atleta, mes_nacimiento_atleta, year_nacimiento_atleta, direccion_tipo_calle_atleta, direccion_tipo_residencia_atleta, direccion_tipo_numero_atleta, foto_direccion, fotocopia_direccion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			
			array('cedula_atleta, primer_nombre_atleta, primer_apellido_atleta, escuela_atleta', 'safe', 'on'=>'search'),
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
			'atletaAcademico' => array(self::HAS_ONE, 'AtletaAcademico', 'cedula_atleta'),
			'atletaCompetencia' => array(self::HAS_ONE, 'AtletaCompetencia', 'cedula_atleta'),
			'atletaDeportivo' => array(self::HAS_ONE, 'AtletaDeportivo', 'cedula_atleta'),
			'atletaExhibicion' => array(self::HAS_ONE, 'AtletaExhibicion', 'cedula_atleta'),
			'atletaReconocimiento' => array(self::HAS_ONE, 'AtletaReconocimiento', 'cedula_atleta'),
			'atletaSancion' => array(self::HAS_ONE, 'AtletaSancion', 'cedula_atleta'),
			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cedula_atleta' => 'Cédula',
			'fecha_ultima_actualizacion_registro' => 'Última actualización del registro',
			'primer_nombre_atleta' => 'Primer nombre',
			'segundo_nombre_atleta' => 'Segundo nombre',
			'primer_apellido_atleta' => 'Primer apellido',
			'segundo_apellido_atleta' => 'Segundo apellido',
			'sexo_atleta' => 'Sexo',
			'fecha_nacimiento_atleta' => 'Fecha de nacimiento',
			'pais_nacimiento_atleta' => 'País',
			'estado_nacimiento_atleta' => 'Estado',
			'estado_civil_atleta' => 'Estado civil',
			'nacionalidad_atleta' => 'Nacionalidad',
			'direccion_estado_atleta' => 'Estado',
			
			'direccion_municipio_atleta' => 'Municipio',
			'direccion_calle_atleta' => 'Avenida, calle o escalera que pasa frente a la residencia',
			'telefono_habitacion_atleta' => 'Teléfono de habitación',
			'telefono_celular_atleta' => 'Teléfono celular',
			'correo_electronico_atleta' => 'Correo electrónico',
			'talla_camisa_atleta' => 'Talla de camisa',
			'talla_franela_atleta' => 'Talla de franela',
			'talla_pantalon_atleta' => 'Talla de pantalón',
			'talla_short_atleta' => 'Talla de short',
			'talla_mono_atleta' => 'Talla de mono deportivo',
			'talla_karategui_atleta' => 'Talla de karategui',
			'talla_dobok_atleta' => 'Talla de dobok',
			'talla_judogui_atleta' => 'Talla de judogui',
			'talla_traje_natacion_atleta' => 'Talla de traje de baño',
			'talla_calzado_atleta' => 'Talla de calzado',
			'talla_trusa_atleta' => 'Talla de trusa',
			'peso_atleta' => 'Peso en kilos',
			'estatura_atleta' => 'Estatura',
			'alergias_atleta' => 'Alérgico a',
			'evaluacion_medica_atleta' => '¿Posee evaluación médica precompetencia en la Dirección de Deportes?',
			'pertenece_ucv_atleta' => '¿Pertenece a la Comunidad Universitaria?',
			'sector_atleta' => 'Sector al que pertenece',
			'facultad_atleta' => 'Facultad',
			'escuela_atleta' => 'Escuela',
			'institucion_trabajo_atleta' => 'Institución donde trabaja',
			'departamento_trabajo_atleta' => 'Departamento donde trabaja',
			'foto_direccion' => 'Foto',
			'fotocopia_direccion' => 'Fotocopia de la cédula',
			
			'dia_nacimiento_atleta' => 'Día de nacimiento',
			'mes_nacimiento_atleta' => 'Mes de nacimiento',
			'year_nacimiento_atleta' => 'Año de nacimiento',
			
			
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
			
			$criteria->with=array('atletaAcademico','atletaDeportivo');
			
			$criteria->compare('t.cedula_atleta',$this->cedula_atleta);
			
			$criteria->compare('primer_nombre_atleta',$this->primer_nombre_atleta);
			
			$criteria->compare('primer_apellido_atleta',$this->primer_apellido_atleta);			
			
			$criteria->compare('escuela_atleta',$this->escuela_atleta);
			
			$criteria->compare('year_ingreso_educacion_superior_atleta',$this->year_ingreso_educacion_superior_atleta);
			
			$criteria->compare('disciplina_atleta',$this->disciplina_atleta);
			
			$criteria->compare('es_atleta_activo',$this->es_atleta_activo);

			$orden=new CSort;
			
			$orden->attributes=array(
					'cedula_atleta'=>array(
						'asc'=>'t.cedula_atleta ASC',
						'desc'=>'t.cedula_atleta DESC',
					),
					'primer_nombre_atleta'=>array(
						'asc'=>'primer_nombre_atleta ASC',
						'desc'=>'primer_nombre_atleta DESC',
						'label'=>'Nombre',
					),
					'primer_apellido_atleta'=>array(
						'asc'=>'primer_apellido_atleta ASC',
						'desc'=>'primer_apellido_atleta DESC',
						'label'=>'Apellido',
					),
					'escuela_atleta'=>array(
						'asc'=>'escuela_atleta ASC',
						'desc'=>'escuela_atleta DESC',
					),
					'atletaDeportivo.es_atleta_activo'=>array(
						'asc'=>'es_atleta_activo ASC',
						'desc'=>'es_atleta_activo DESC',
					),
					'atletaDeportivo.disciplina_atleta'=>array(
						'asc'=>'disciplina_atleta ASC',
						'desc'=>'disciplina_atleta DESC',
					),
					'atletaAcademico.year_ingreso_educacion_superior_atleta'=>array(
						'asc'=>'year_ingreso_educacion_superior_atleta ASC',
						'desc'=>'year_ingreso_educacion_superior_atleta DESC',
					),
					
				);
			$orden->defaultOrder=array(
					'atletaAcademico.year_ingreso_educacion_superior_atleta'=>TRUE,
				);
				
			Yii::app()->session['datos_filtrados'] = new CActiveDataProvider($this, array(
				'criteria'=>$criteria,
				'sort'=>$orden,
				'pagination'=>false,
			));
			

			return Yii::app()->session['datos_filtrados'];
		}
	
	
		protected function beforeSave(){
		
				// fecha de actualizacion del registro				
				date_default_timezone_set("America/Caracas");
				$this->fecha_ultima_actualizacion_registro = date('Y-m-d H:i:s');
				
			
			
				if(!empty($this->year_nacimiento_atleta)){ // si no hay fecha entonces no hagas nada
			
				$fecha = $this->year_nacimiento_atleta.'-'.$this->mes_nacimiento_atleta.'-'.$this->dia_nacimiento_atleta;
				$this->fecha_nacimiento_atleta = $fecha;
			
				}
				
				// colocar todas las letras en capitalizadas
				$this->setAttribute('primer_nombre_atleta', ucwords(strtolower($this->primer_nombre_atleta)));
				$this->setAttribute('segundo_nombre_atleta', ucwords(strtolower($this->segundo_nombre_atleta)));
				$this->setAttribute('primer_apellido_atleta', ucwords(strtolower($this->primer_apellido_atleta)));
				$this->setAttribute('segundo_apellido_atleta', ucwords(strtolower($this->segundo_apellido_atleta)));
				
				
				
				$this->setAttribute('correo_electronico_atleta', strtolower($this->correo_electronico_atleta));
				$this->setAttribute('alergias_atleta', ucfirst(strtolower($this->alergias_atleta)));			
				
			
			
			
	

			return parent::beforeSave();
		
		}		
	
		
		
}