<?php
$this->pageCaption='';
$this->pageTitle=Yii::app()->name;

$ejercicioFiscal = EjercicioFiscal::model()->find('estatus_did=1');
$ejercicioID = ($ejercicioFiscal->id==1) ? $ejercicioFiscal->id : 0;
$connection = Yii::app()->db;
$queryInstCumplidasIngreso = 'select count(distinct(institucion_aid)) as ingresos, 
								(select count(*) from Institucion where estatus_did = 1) as instituciones
								from IngresoPorDonativo
								where ejercicioFiscal_did = ' . $ejercicioID;

$commandInstCumplidasIngreso = $connection->createCommand($queryInstCumplidasIngreso);
$instCumplidasIngreso = $commandInstCumplidasIngreso->queryAll();

$queryInstCumplidasEgreso = 'select distinct(i.nombre) as nombre, i.id as id, contactoTelefono, contactoEmail, rfc, cluni, a.nombre as ambito 
							from GastoDeAdministracion ipd
							inner join Institucion i on i.id = ipd.institucion_aid
							inner join Ambito a on a.id = i.ambito_did
							where ejercicioFiscal_did = ' . $ejercicioID;

$commandInstCumplidasEgreso = $connection->createCommand($queryInstCumplidasEgreso);
$instCumplidasEgreso = $commandInstCumplidasEgreso->queryAll();

$queryInstCumplidasAmbos = 'select distinct(i.nombre) as nombreGa, i.id as idInst, contactoTelefono, contactoEmail, rfc, cluni, a.nombre as ambito 
								from GastoDeAdministracion ipd
								inner join Institucion i on i.id = ipd.institucion_aid
								inner join Ambito a on a.id = i.ambito_did
								where i.nombre in (
									select distinct(i.nombre) as nombreIn
									from IngresoPorDonativo ipd
									inner join Institucion i on i.id = ipd.institucion_aid
								) && ejercicioFiscal_did = ' . $ejercicioID;

$commandInstCumplidasAmbos = $connection->createCommand($queryInstCumplidasAmbos);
$instCumplidasAmbos = $commandInstCumplidasAmbos->queryAll();

?>

<h2>Bienvenidos</h2>

<h3>A continuación mostramos cierta información de relevancia</h3>

<div class="span4">
	<?php
		//Gráfica de Activos por Departamento Columnas
		echo '<script type="text/javascript">
				google.load("visualization", "1.0", {"packages":["corechart"]});
				google.setOnLoadCallback(drawChart);
				function drawChart() {
					var data = new google.visualization.DataTable();
					data.addColumn("string", "Ingresos");
					data.addColumn("number", "Instituciones");';
					foreach($instCumplidasIngreso as $valor){
						echo 'data.addRows([["' . $valor['instituciones'] . '",' . $valor['ingresos'] . ']]);';
					}
			
					echo '
					var options = {
						"title":"Activos designados por Departamento",
						"width":400,
						"height":300,
						hAxis: {title: "Departamentos"},
						vAxis: {title: "Cantidad de Activos"},
						legend: "none",
						colors:["#492D17"],
					};

					var chart = new google.visualization.ColumnChart(document.getElementById("activosPorDepto"));
					chart.draw(data, options);
			    }
		    </script>';
		    ?>
</div>