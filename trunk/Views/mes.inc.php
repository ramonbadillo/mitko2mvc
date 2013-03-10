<!doctype html> 
<html class="no-js">

	<head>
<?php
$month = 0;
$year = 0;


?>
<meta  charset="iso-8859-1">

<meta  charset="iso-8859-1">
	</head>
	
	
	<body>
<?php
if(isset($_POST['month']))
	$month = $_POST['month'];
if(isset($_POST['year']))
	$year = $_POST['year'];
//echo get_date_spanish(strtotime('01-'.$month.'-'.$year), true, 'month').' '.$year;
$fecha=$year."-".$month;
$monthName = date("F", mktime(0, 0, 0, $month, 1));
//$day = date('j');
$total = date("t",mktime(0,0,0,$month,1,$year));
$primero = date("w", mktime(0,0,0,$month,1,$year));
$tempDays = $primero + $total;
$semanas = ceil($tempDays/7);
$restantes = ($semanas * 7) - $tempDays;


$dateMas = strtotime(date("Y-m-d", strtotime('1-'.$month.'-'.$year)) . " +1 month");
$dateMenos = strtotime(date("Y-m-d", strtotime('1-'.$month.'-'.$year)) . " -1 month");


echo '<ol class="calendar" start="6">';

echo <<<END
<li></li>
<li id="lastmonth">
<ul start="29">
<li class="diassemana">Domingo</li>
<li class="diassemana">Lunes</li>
<li class="diassemana">Martes</li>
<li class="diassemana">Miércoles</li>
<li class="diassemana">Jueves</li>
<li class="diassemana">Viernes</li>
<li class="diassemana">Sábado</li>
END;

for ($i = 1; $i <= $primero; $i++) {
	echo '<li id="lastmonth">'.$wnuevo = date("t",mktime(0,0,0,date('n', $dateMenos),1,date('Y', $dateMenos)))-$primero+$i.'</li>' ;
}
							echo '</ul> ';
						echo '</li>';
		
						echo '<li id="thismonth">';
	
							echo '<ul> ';
								
								
								for ($i = 1; $i <= $total; $i++) {
									if($i<10)
										$fecha2= $fecha.'-0'.$i;
									else 
										$fecha2= $fecha.'-'.$i;
									
									$u=Evento::find('all', array('conditions' => array('fechaie = ?', $fecha2)));
									$times= count($u);
									if($times>0){
											echo ' 
											<a class="diascalendario"><li class="manual" ids="'.$fecha2.'">
												<strong>'.$i.'</strong>
												<ol>';
											if($times>1)
													echo'<li><img class="poshytip" ids="'.$fecha2.'" title="'.$times.' eventos en este día" src="../images/'.$u[0]->idevento.'.jpg" alt="Imagen" height="70" width="115"></li>';
											else	
												echo'<li><img class="poshytip" ids="'.$fecha2.'" title="'.$times.' evento en este día" src="../images/'.$u[0]->idevento.'.jpg" alt="Imagen" height="70" width="115"></li>';
											echo '<li><strong><p style="color:black;">'.$u[0]->nombre.'</p></strong></li>
												</ol>
											</li>
											</a>
										  ' ;
									}
									else{
								    		echo '
											<a class="diascalendario2" ><li>
												<strong>'.$i.'</strong>
												<ol>
													
												</ol>
											</li>
											</a>
										  ' ;
								    }
								}
				
							echo '</ul>
						</li>
		
						<li id="nextmonth">

							<ul>';
								
								for ($i = 1; $i <= $restantes; $i++) {
								    echo '<li>'.$i.'</li>' ;
								}
							echo '</ul>
						</li>
		
					</ol>';



?>

	</body>
</html>