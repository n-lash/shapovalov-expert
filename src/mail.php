
<meta charset="utf-8"> 
<?php
$subject="Сообщение с сайта";
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы		
if (isset($_POST['name']))		{$name	= $_POST['name'];	if ($name == '')	{unset($name);}}
if (isset($_POST['tel']))		{$tel	= $_POST['tel'];	if ($tel == '')	    {unset($tel);}}
if (isset($_POST['text']))		{$text	= $_POST['text'];	if ($text == '')	{unset($text);}}
if (isset($_POST['sab']))		{$sab	= $_POST['sab'];	if ($sab == '')		{unset($sab);}}
//стирание треугольных скобок из полей формы
/* комментарий */
if (isset($name) ) {
$name=stripslashes($name);
$name=htmlspecialchars($name);
}
if (isset($tel) ) {
$tel=stripslashes($tel);
$tel=htmlspecialchars($tel);
}
if (isset($text) ) {
$text=stripslashes($text);
$text=htmlspecialchars($text);
}
// адрес почты куда придет письмо
$address="natalas111222@gmail.com";
// текст письма 
$note_text="Тема : $subject \r\nИмя : $name \r\n Телефон : $tel \r\n Дополнительная информация : $text";

if (isset($name)  &&  isset ($sab) ) {
mail($address,$subject,$note_text,"Content-type:text/plain; windows-1251"); 
// сообщение после отправки формы
    
echo "<p style='color:grey;'>Уважаемый(ая) <b style='color:blue;'>$name</b> Ваша заявка отправлена успешно. <br> Спасибо. <br>Вам скоро перезвонят на номер <b style='color:blue;'> $tel</b>.</p>";
}

?>

<a href="index.html#form"><b> <<< Назад </b></a>
