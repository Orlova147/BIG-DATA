<?php 
/* Принимаем данные из формы */ 
  $name = $_POST["name"];  
  $phone = $_POST["phone"]; 
  $date = $_POST["date"]; 
  $time = $_POST["time"]; 
   
/* Подключаемся к базе данных */ 
$link = mysqli_connect("localhost", "root", ""); 
mysqli_select_db($link, "OrlovaE"); 
 
/* Записываем данные в БД */  
$sql = "INSERT INTO OrlovaE(name, phone, date, number) VALUES ('$name', '$phone', '$date','$time')"; 
$result=mysqli_query($link, $sql); 
 
/* Делаем редирект обратно */ 
header("Location: ".$_SERVER["HTTP_REFERER"]);  
exit; 
?>