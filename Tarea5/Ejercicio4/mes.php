<?php
$numero=$_GET["numero"];
if($numero>=1 && $numero<=12){
	switch ($numero) {
		case 1:
			echo"<select name='' id=''>
			<option value='enero'>".enero."</option>
				</select>";
		break;
		case 2:
			echo"<select name='' id=''>
			<option value='febrero'>".febrero."</option>
				</select>";
		break;
		case 3:
			echo"<select name='' id=''>
			<option value='marzo'>".marzo."</option>
				</select>";
		break;
		case 4:
			echo"<select name='' id=''>
			<option value='abril'>".abril."</option>
				</select>";
		break;
		case 5:
			echo"<select name='' id=''>
			<option value='mayo'>".mayo."</option>
				</select>";
		break;
		case 6:
			echo"<select name='' id=''>
			<option value='junio'>".junio."</option>
				</select>";
		break;
		case 7:
			echo"<select name='' id=''>
			<option value='julio'>".julio."</option>
				</select>";
		break;
		case 8:
			echo"<select name='' id=''>
			<option value='agosto'>".agosto."</option>
				</select>";
		break;
		case 9:
			echo"<select name='' id=''>
			<option value='septiembre'>".septiembre."</option>
				</select>";
		break;
		case 10:
			echo"<select name='' id=''>
			<option value='octubre'>".octubre."</option>
				</select>";
		break;
		case 11:
			echo"<select name='' id=''>
			<option value='noviembre'>".noviembre."</option>
				</select>";
		break;
		case 12:
			echo"<select name='' id=''>
			<option value='diciembre'>".diciembre."</option>
				</select>";
		break;
	}
}else{
	echo"valor fuera de rango";
}
?>