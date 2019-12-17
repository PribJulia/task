<?php
$mem_start = memory_get_usage(); //объем памяти выделяемый скрипту 

//phpinfo();

echo("Привет </br>");
echo("PHP Version 7.1.22 </br>");
echo(date('d-m-Y H:i:s')."</br>");

// PHP синтаксис
$htmllab ="ru";
echo($htmllab.'</br>');
define(NPP, 10);
$num1 = 34;
$num2 = 8;
echo($num1+$num2."</br>");
$test= "345";
echo ( gettype($test)."</br>" );
$test= (int)$test;
echo ( gettype($test)."</br>" );
echo ( (date(H)/2 == 0) ? "<body style='background-color: red'>" :  "<body style='background-color: lightblue'>");

switch (date('l')) {
	case 'Monday':
		echo "понедельник </br>";
		break;
	case 'Tuesday': 
		echo "вторник </br>";
		break;
		case 'Wednesday':
		echo "среда </br>";
		break;
		case 'Thursday':
		echo "четвег </br>";
		break;
		case 'Friday':
		echo "пятница </br>";
		break;
		case 'Saturday':
		echo "суббота </br>";
		break;
		case 'Sunday':
		echo "воскресенье </br>";
		break;
	default:
		echo "ошибка! </br>";
		
}


// циклы
for($i=1;$i<=100;$i++){
echo($i."; ");
}
echo "</br>";
for($i=23;$i<=78;$i++){
echo($i."; ");
}
echo "</br>";
echo memory_get_usage() - $mem_start;