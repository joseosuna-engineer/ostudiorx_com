<?php
$pdf = Yii::createComponent('application.extensions.MPDF53.mpdf');
$dataProvider = Yii::app()->session['datos_filtrados']->getData();
$contador=count($dataProvider);
date_default_timezone_set("America/Caracas");
$hoy = date("d-m-Y");
$hora = date("g:i a");
$year = date("Y");


$html="

<style>
body{
	margin:0;
	width:279mm;
	padding: 0mm 30mm 25mm 30mm;
	color:black;
}
#contenido{
	margin:0;
	padding:0;
	width: 279mm;
}
#logo{
	margin:0;
	padding:0;
	width: 83px;
	height: 82px;
	float: left;
}
#membrete{
	text-align:center;
	float: left;
	width:80%;
	margin-top:11pt;
}
.membrete{
	margin:0;
	font-family:'Tahoma';
	font-size:10pt;
	text-indent: 0;
}
#pie{
	text-align:center;
}
.pie{
	margin:0;
	font-family:'Tahoma';
	font-size:10pt;
	text-indent: 0;
}
#foto{
	margin:0;
	padding:0;
	height: 150px;
}
#titulo{
	font-family: 'Arial';
    font-size: 11pt;
    font-weight: bold;	
	margin-top: 22pt;
}



table{
	width:100%;
}

.principal{
	font-weight: bold;
	font-size: 10pt;
}
</style>

<body>

	<div id='contenido'>
	
		
		
		
		<div id='cuerpo'>
		
			<p><b>FECHA DE IMPRESIÓN:</b> ".$hoy." <b>HORA:</b> ".$hora."</p>
		
			<table>
			
				<tbody>
				
					<tr>
						<td class='principal' width='14%'>Estatus deportivo</td>
						<td class='principal' width='16%'>Año de ingreso a la educación superior</td>
						<td class='principal' width='14%'>Disciplina deportiva</td>
						<td class='principal' width='14%'>Escuela</td>
						<td class='principal' width='14%'>Cédula</td>
						<td class='principal' width='14%'>Nombre</td>
						<td class='principal' width='14%'>Apellido</td>
					</tr>";
					
					 $i=0;
       
         
				 while($i<$contador){
					$html.="
					<tr class='odd'>
						<td class='odd' width='14%'>".$dataProvider[$i]['atletaDeportivo']['es_atleta_activo']."</td>
						<td class='odd' width='16%'>".$dataProvider[$i]['atletaAcademico']['year_ingreso_educacion_superior_atleta']."</td>
						<td class='odd' width='14%'>".$dataProvider[$i]['atletaDeportivo']['disciplina_atleta']."</td>
						<td class='odd' width='14%'>".$dataProvider[$i]['escuela_atleta']."</td>
						<td class='odd' width='14%'>".Yii::app()->numberFormatter->format( '#,###', $dataProvider[$i]['cedula_atleta'])."</td>						
						<td class='odd' width='14%'>".$dataProvider[$i]['primer_nombre_atleta']."</td>
						<td class='odd' width='14%'>".$dataProvider[$i]['primer_apellido_atleta']."</td>
					";
					$html.="</tr>"; $i++;
				 }
				 
			$html.="</tbody>
				
			</table>
			
			

		</div>
		
	</div>

</body>



";
$header="<div id='encabezado'>
		
			<div id='logo'>
			
				<img src='./images/logo_deportes.png'   />
			
			</div>
			
			<div>
			
				<div id='membrete'>
				
					<p class='membrete'>UNIVERSIDAD CENTRAL DE VENEZUELA</p>
					<p class='membrete'>DIRECCIÓN DE DEPORTES</p>
					<p class='membrete'>CARACAS</p>
					
					<p id='titulo'>REPORTE ATLETAS CLUB UCV</p>
				
				</div>
				
				<div id='foto'>
				
					<img src='./images/logo_ucv.png'   />
				
				</div>
			
			
			</div>
			
			
		
		</div>	
";
$footer="<div id='pie'>
		
					<p class='pie'>Derechos de Autor © ".$year." UTI - UCV.</p>
					<p class='pie'>Todos los derechos reservados.</p>
					<p class='pie'>Dirección de Deportes</p>

		</div> <div style='text-align:right;'>{PAGENO}/{nb}</div>";
		
$mpdf=new mPDF(
				'utf-8', // mode
				'Letter',// format
				'',		// font size
				'',		// font
				15,		// margin left
				15,		// margin right
				60,		// margin top
				25,		// margin bottom
				25,		// margin header
				10		// margin footer
				);
$mpdf->SetHTMLHeader($header);
$mpdf->SetHTMLFooter($footer);
$mpdf->WriteHTML($html);

$mpdf->Output('Busqueda-Atleta-'.$hoy.'.pdf','D'); //Descargar




exit;


?>