<?php

class AtletaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' action
				'actions'=>array('create', 'view', 'index', 'update', 'generarMunicipios', 'generarEstados', 'generarEscuelasPersonal', 'admin', 'generarEscuelasAcademico', 'generarPdfAtleta', 'generarPdfBusqueda'),
				'expression'=>'!$user->isAdmin()',
			),
			
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	// mostrar foto desde la BD
	
	public function actionMostrarFoto($id){
	
		//'model'=>$this->loadModel($id,'Foto');
	
	}
	
	// generar PDF
	
	public function actionGenerarPdfAtleta($id)
    {
        $this->render('pdfAtleta',array(
			'model'=>$this->loadModel($id,'AtletaPersonal'),
			'model8'=>$this->loadModel($id,'Foto'),
        ));
    }
	
	public function actionGenerarPdfBusqueda()
    {
        $this->render('pdfBusqueda');
    }

	
		// generar los municipios dependiendo del estado
			
	public function actionGenerarMunicipios()
	{	  
		$id=Estado::model()->find(array( // hallar el id del estado dado
			'select'=>'id_estado',
			'condition'=>'estado=:estado_parametro',
			'params'=>array(':estado_parametro'=>$_POST['AtletaPersonal']['direccion_estado_atleta']),
		));
		
		$id_estado=$id->id_estado;// es un objeto
		
		$data=Municipio::model()->findAll(array( // hallar todos los municipio de ese estado
			'select'=>'municipio',
			'condition'=>'id_estado=:id_parametro',
			'params'=>array(':id_parametro'=>$id_estado), 
		));
		
		$data=CHtml::listData($data,'municipio','municipio'); // lleno una lista solo con los municipios de ese estado
		
		echo CHtml::tag('option',array('value' => ''),'Seleccione el municipio:',true);
		
		foreach($data as $value=>$name)
		{		// imprimo la lista que se va a actualizar
			echo CHtml::tag('option',
					   array('value'=>$value),CHtml::encode($name),true);
		}
	}

		// generar los estados dependiendo del pais
			
	public function actionGenerarEstados()
	{	  
		$id=Pais::model()->find(array( // hallar el id del pais dado
			'select'=>'id_pais',
			'condition'=>'pais=:pais_parametro',
			'params'=>array(':pais_parametro'=>$_POST['AtletaPersonal']['pais_nacimiento_atleta']),
		));
		
		$id_pais=$id->id_pais;// es un objeto
		
		$data=Estado::model()->findAll(array( // hallar todos los estados de ese pais
			'select'=>'estado',
			'condition'=>'id_pais=:id_parametro',
			'params'=>array(':id_parametro'=>$id_pais), 
		));
		
		$data=CHtml::listData($data,'estado','estado'); // lleno una lista solo con los estados de ese pais
		
		echo CHtml::tag('option',array('value' => ''),'Seleccione el estado:',true);
		
		foreach($data as $value=>$name)
		{		// imprimo la lista que se va a actualizar
			echo CHtml::tag('option',
					   array('value'=>$value),CHtml::encode($name),true);
		}
	}

	
		// generar las escuelas dependiendo de la facultad
			
	public function actionGenerarEscuelasPersonal()
	{	  
		$id=FacultadAtleta::model()->find(array( // hallar el id de la facultad dada
			'select'=>'id_facultad',
			'condition'=>'facultad=:facultad_parametro',
			'params'=>array(':facultad_parametro'=>$_POST['AtletaPersonal']['facultad_atleta']),
		));
		
		$id_facultad=$id->id_facultad;// es un objeto
		
		$data=EscuelaAtleta::model()->findAll(array( // hallar todas las escuelas de esa facultad
			'select'=>'escuela',
			'condition'=>'id_facultad=:id_parametro',
			'params'=>array(':id_parametro'=>$id_facultad), 
		));
		
		$data=CHtml::listData($data,'escuela','escuela'); // lleno una lista solo con las escuelas de esa facultad
		
		echo CHtml::tag('option',array('value' => ''),'Seleccione la escuela:',true);
		
		foreach($data as $value=>$name)
		{		// imprimo la lista que se va a actualizar
			echo CHtml::tag('option',
					   array('value'=>$value),CHtml::encode($name),true);
		}
	}
	
		// generar las escuelas dependiendo de la facultad
			
	public function actionGenerarEscuelasAcademico()
	{	  
		$id=FacultadAtleta::model()->find(array( // hallar el id de la facultad dada
			'select'=>'id_facultad',
			'condition'=>'facultad=:facultad_parametro',
			'params'=>array(':facultad_parametro'=>$_POST['AtletaAcademico']['facultad_anterior_atleta']),
		));
		
		$id_facultad=$id->id_facultad;// es un objeto
		
		$data=EscuelaAtleta::model()->findAll(array( // hallar todas las escuelas de esa facultad
			'select'=>'escuela',
			'condition'=>'id_facultad=:id_parametro',
			'params'=>array(':id_parametro'=>$id_facultad), 
		));
		
		$data=CHtml::listData($data,'escuela','escuela'); // lleno una lista solo con las escuelas de esa facultad
		
		echo CHtml::tag('option',array('value' => ''),'Seleccione la escuela:',true);
		
		foreach($data as $value=>$name)
		{		// imprimo la lista que se va a actualizar
			echo CHtml::tag('option',
					   array('value'=>$value),CHtml::encode($name),true);
		}
	}
	
	
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('AtletaPersonal',  array(                       
                        'criteria'=>array( 
							'with'=> array('atletaDeportivo'), //join
							'condition'=>'es_atleta_activo="Activo"'),
						'pagination'=>array(
                                'pageSize'=>5,
                        ),
                ));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
			
	}
	
		/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$dataExhibicion=new CActiveDataProvider('AtletaExhibicion',  array(                       
                        'criteria'=>array( 							
							'condition'=>'cedula_atleta='.$id,
							'order'=>'year_exhibicion ASC',),
						 'pagination' => false
                ));
				
		$dataReconocimiento=new CActiveDataProvider('AtletaReconocimiento',  array(                       
                        'criteria'=>array( 							
							'condition'=>'cedula_atleta='.$id,
							'order'=>'year_reconocimiento ASC',),
						 'pagination' => false
                ));
				
		$dataSancion=new CActiveDataProvider('AtletaSancion',  array(                       
                        'criteria'=>array( 							
							'condition'=>'cedula_atleta='.$id,
							'order'=>'year_inicio_sancion ASC',),
						 'pagination' => false
                ));
				
		$dataCompetencia=new CActiveDataProvider('AtletaCompetencia',  array(                       
                        'criteria'=>array( 							
							'condition'=>'cedula_atleta='.$id,
							'order'=>'year_competencia ASC',),
						 'pagination' => false
                ));
				
		
		
		$this->render('view',array(
			'model'=>$this->loadModel($id,'AtletaPersonal'),
			'dataExhibicion'=>$dataExhibicion,
			'dataReconocimiento'=>$dataReconocimiento,
			'dataSancion'=>$dataSancion,
			'dataCompetencia'=>$dataCompetencia,
			
		));
	}



	/**
	 * Al Crear un atleta todos los modelos de datos asociados a él se crean (inicializan)
	 */
	public function actionCreate()
	{
		foreach (glob(  "./images/_foto*.jpg"  ) as $filename) { // borrar las fotos que esten en el directorio
							unlink($filename);
						}
						
		foreach (glob(  "./images/_cedula*.jpg"  ) as $filename) { // borrar las fotos que esten en el directorio
							unlink($filename);
						}
		
		$model1=new AtletaPersonal;
		$model2=new AtletaAcademico;
		$model3=new AtletaDeportivo;
		$model4=new AtletaCompetencia;
		$model5=new AtletaExhibicion;
		$model6=new AtletaReconocimiento;
		$model7=new AtletaSancion;
		$model8=new Foto;
		$model9=new Fotocopia;
		
		// El nuevo atleta sólo cuenta con 7 datos criticos
		// c.i., 1º nombre, 1º apellido, sector al que pertenece el atleta,
		// escuela (no obligatorio), año ingreso a la educación superior, disciplina, el resto es vacio
		// para crear cada tabla relacionada sólo hace falta el c.i.

		if(isset($_POST['AtletaPersonal'],$_POST['AtletaAcademico'],$_POST['AtletaDeportivo'])) // los modelos son sets?
		{
			$model1->cedula_atleta=$_POST['AtletaPersonal']['cedula_atleta'];
			$model1->primer_nombre_atleta=$_POST['AtletaPersonal']['primer_nombre_atleta'];
			$model1->primer_apellido_atleta=$_POST['AtletaPersonal']['primer_apellido_atleta'];
			$model1->sector_atleta=$_POST['AtletaPersonal']['sector_atleta'];
			$model1->escuela_atleta=$_POST['AtletaPersonal']['escuela_atleta'];
			
			$model2->cedula_atleta=$_POST['AtletaPersonal']['cedula_atleta'];
			$model2->year_ingreso_educacion_superior_atleta=$_POST['AtletaAcademico']['year_ingreso_educacion_superior_atleta'];
			$model2->escuela_estudia_atleta=$_POST['AtletaPersonal']['escuela_atleta'];
			
			$model3->cedula_atleta=$_POST['AtletaPersonal']['cedula_atleta'];
			$model3->disciplina_atleta=$_POST['AtletaDeportivo']['disciplina_atleta'];
			
			
			$model4->cedula_atleta=$_POST['AtletaPersonal']['cedula_atleta'];
			
			$model5->cedula_atleta=$_POST['AtletaPersonal']['cedula_atleta'];
						
			$model6->cedula_atleta=$_POST['AtletaPersonal']['cedula_atleta'];
			
			$model7->cedula_atleta=$_POST['AtletaPersonal']['cedula_atleta'];	
			
			$model8->cedula_atleta=$_POST['AtletaPersonal']['cedula_atleta'];	
			
			$model9->cedula_atleta=$_POST['AtletaPersonal']['cedula_atleta'];	
			
			CActiveForm::validate(array(  // validando
				'model1'=>$model1,
				'model2'=>$model2,
				'model3'=>$model3,			
			));
				// si pasaron las validaciones
			if(!(($model1->hasErrors())||($model2->hasErrors())||($model3->hasErrors()))){
				$model1->save();
				$model2->save();
				$model3->save();	// guardar
				$model4->save();
				$model5->save();
				$model6->save();
				$model7->save();
				$model8->save();
				$model9->save();
								// redireccionando
				$this->redirect(array('view','id'=>$model1->cedula_atleta,'creado'=>'si'));
			}	
			
		}

		$this->render('create',array(
			'model1'=>$model1,
			'model2'=>$model2,
			'model3'=>$model3,
			'model4'=>$model4,
			'model5'=>$model5,
			'model6'=>$model6,
			'model7'=>$model7,			
			'model8'=>$model8,	
			'model9'=>$model9,	
		));
	}
	
		/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{		
		// cargar todos los modelos de ese atleta
		$model1=$this->loadModel($id,'AtletaPersonal');
		if(!(empty($model1->fecha_nacimiento_atleta))){
			$model1->dia_nacimiento_atleta=Yii::app()->dateFormatter->format("dd", $model1->fecha_nacimiento_atleta);
			$model1->mes_nacimiento_atleta=Yii::app()->dateFormatter->format("MM", $model1->fecha_nacimiento_atleta);
			$model1->year_nacimiento_atleta=Yii::app()->dateFormatter->format("yyyy", $model1->fecha_nacimiento_atleta);
		}
		$model2=$this->loadModel($id,'AtletaAcademico');
		$model3=$this->loadModel($id,'AtletaDeportivo');
		$model4=$this->loadItems($id,'AtletaCompetencia','year_competencia');
		$model5=$this->loadItems($id,'AtletaExhibicion','year_exhibicion');
		$model6=$this->loadItems($id,'AtletaReconocimiento','year_reconocimiento');
		$model7=$this->loadItems($id,'AtletaSancion','year_inicio_sancion');
		$model8=$this->loadModel($id,'Foto');
		$model9=$this->loadModel($id,'Fotocopia');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['AtletaPersonal']))
		{
			
			
			CActiveForm::validate(array(  // validando
				'model1'=>$model1,
				'model2'=>$model2,
				'model3'=>$model3,	
				/*'model4'=>$model4,
				'model5'=>$model5,   // no los puedo validar porque son arreglos de arreglos
				'model6'=>$model6,
				'model7'=>$model7,*/
				'model8'=>$model8,
				'model9'=>$model9,
			));
			
			if(!(($model1->hasErrors())||($model2->hasErrors())||($model3->hasErrors())||($model8->hasErrors())||($model9->hasErrors()))){
				
				$model1->attributes=$_POST['AtletaPersonal'];
				$model2->attributes=$_POST['AtletaAcademico'];
				$model2->escuela_estudia_atleta=$_POST['AtletaPersonal']['escuela_atleta'];
				$model3->attributes=$_POST['AtletaDeportivo'];
				
				
				$model1->save();
				$model2->save();
				$model3->save();
				$model8->save(); // las fotos las estoy cargando en sus propios modelos con beforesave
				$model9->save();				
			
					// borro todos los registros
					foreach($model4 as $i=>$item):  							
							$item->delete();
					endforeach;					
					
					// si no hay registro, inserto el registro vacio
					if(!isset($_POST['AtletaCompetencia'])){
						$comp=new AtletaCompetencia;
						$comp->cedula_atleta=$_POST['AtletaPersonal']['cedula_atleta'];
						$comp->save();
					}else{
						//inserto los nuevos
						foreach($_POST['AtletaCompetencia'] as $i=>$item):  							
								$comp=new AtletaCompetencia;
								$comp->cedula_atleta=$_POST['AtletaPersonal']['cedula_atleta'];
								$comp->attributes=$item;
								$comp->save();							
						endforeach;
					}
					
					// borro todos los registros
					foreach($model5 as $i=>$item):  							
							$item->delete();
					endforeach;
					
					// si no hay registro, inserto el registro vacio
					if(!isset($_POST['AtletaExhibicion'])){
						$comp=new AtletaExhibicion;
						$comp->cedula_atleta=$_POST['AtletaPersonal']['cedula_atleta'];
						$comp->save();
					}else{
					
						//inserto los nuevos
						foreach($_POST['AtletaExhibicion'] as $i=>$item):  							
								$comp=new AtletaExhibicion;
								$comp->cedula_atleta=$_POST['AtletaPersonal']['cedula_atleta'];
								$comp->attributes=$item;
								$comp->save();							
						endforeach;
					}
					// borro todos los registros
					foreach($model6 as $i=>$item):  							
							$item->delete();
					endforeach;
					
					// si no hay registro, inserto el registro vacio
					if(!isset($_POST['AtletaReconocimiento'])){
						$comp=new AtletaReconocimiento;
						$comp->cedula_atleta=$_POST['AtletaPersonal']['cedula_atleta'];
						$comp->save();
					}else{
					
						//inserto los nuevos
						foreach($_POST['AtletaReconocimiento'] as $i=>$item):  							
								$comp=new AtletaReconocimiento;
								$comp->cedula_atleta=$_POST['AtletaPersonal']['cedula_atleta'];
								$comp->attributes=$item;
								$comp->save();							
						endforeach;
					}
					// borro todos los registros
					foreach($model7 as $i=>$item):  							
							$item->delete();
					endforeach;
					
					// si no hay registro, inserto el registro vacio
					if(!isset($_POST['AtletaSancion'])){
						$comp=new AtletaSancion;
						$comp->cedula_atleta=$_POST['AtletaPersonal']['cedula_atleta'];
						$comp->save();
					}else{
					
						//inserto los nuevos
						foreach($_POST['AtletaSancion'] as $i=>$item):  							
								$comp=new AtletaSancion;
								$comp->cedula_atleta=$_POST['AtletaPersonal']['cedula_atleta'];
								$comp->attributes=$item;
								$comp->save();							
						endforeach;
					
					}	
				
				
								// redireccionando
				$this->redirect(array('view','id'=>$model1->cedula_atleta,'actualizado'=>'si'));
			}			
			
				
		}

		$this->render('update',array(
			'model1'=>$model1,
				'model2'=>$model2,
				'model3'=>$model3,	
				'model4'=>$model4,
				'model5'=>$model5,
				'model6'=>$model6,
				'model7'=>$model7,
				'model8'=>$model8,
				'model9'=>$model9,
		));
	}
	
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new AtletaPersonal('search');
		$model2=new AtletaAcademico('search');
		$model3=new AtletaDeportivo('search');

		$model->unsetAttributes();  // clear any default values
		$model2->unsetAttributes();  // clear any default values
		$model3->unsetAttributes();  // clear any default values

		if(isset($_GET['AtletaPersonal'])){
			$model->attributes=$_GET['AtletaPersonal'];	
			$model->year_ingreso_educacion_superior_atleta=$_GET['AtletaAcademico']['year_ingreso_educacion_superior_atleta'];	
			$model->disciplina_atleta=$_GET['AtletaDeportivo']['disciplina_atleta'];	
			$model->es_atleta_activo=$_GET['AtletaDeportivo']['es_atleta_activo'];	
		}
			
		

		$this->render('admin',array(
			'model'=>$model,
			'model2'=>$model2,		
			'model3'=>$model3,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id,$md)
	{
		$model=$md::model()->findByPk((int)$id);
		if($model===null)
			throw new CHttpException(404,'El Atleta requerido no está registrado.');
		return $model;
	}
	
	public function loadItems($id,$md,$or)
	{
		$model=$md::model()->findAll(array('order'=>$or, 'condition'=>'cedula_atleta=:x', 'params'=>array(':x'=>$id)));
		if($model===null)
			throw new CHttpException(404,'El Atleta requerido no está registrado.');
		return $model;
	}
	

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='atleta-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}	
}
