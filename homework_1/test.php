<?php
  // 01 создание переменной
  $name = "Andrey";
  $age = 32;

  echo 'My name is: ' . $name  . '<br>';
  echo "My age is: $age <br>";
  echo "\"!|\/'\" <br>";


  /*
    02 Задача про выставку рисунков
  */
  $pictures = 80;
  $picturesFeltipPen = 23;
  $picturesPencil = 40;
  $picturesPaints = $pictures - $picturesPencil - $picturesFeltipPen ;

  echo "Красками выполненно: $picturesPaints рисунков. <br>";


  // 03 Константы
  define("birthday", "7.4.1985");
  if(defined("birthday") == true ){
    echo "Поздравляем у Вас есть дата рождения.<br>";
  }
  define("birthday", "26.07.1990");
  echo birthday . ' Дату рождеиня нельзя изменить дружочек :) <br>';


  // 04 Условные операторы
  $age = 66;

  if($age >= 18 && $age<= 65){
    echo "Вам еще работать и работать<br>";
  }else if($age > 65){
    echo "Вам пора на пенсию.<br>";
  }else{
    echo "Вам еще рано работать.<br>";
  }

  // 05 Оператор switch
  $day = 2;

  switch ($day) {
    case '1':
      echo "Это рабочий день.<br>";
      break;
    case '2':
      echo "Это рабочий день.<br>";
      break;
    case '3':
      echo "Это рабочий день.<br>";
      break;
    case '4':
      echo "Это рабочий день.<br>";
      break;
    case '5':
      echo "Это рабочий день.<br>";
      break;
    case '6':
      echo "Это выходной день.<br>";
      break;
    case '7':
      echo "Это выходной день.<br>";
      break;
    default:
      echo "Неизвестный день.<br>";
      break;
  }


  // 06 Массивы
  $cars["BMW"] = array("car"=>"BMW", "model" => "X5", "speed" => 200, "doors" => 5, "year" => 2015 );
  $cars["Toyota"] = array("car"=>"Toyota", "model" => "Camry", "speed" => 200, "doors" => 4, "year" => 2017 );
  $cars["Audi"] = array("car"=>"Audi", "model" => "A8", "speed" => 200, "doors" => 4, "year" => 2017 );

  echo $cars["BMW"]["car"] . "<br>";
  echo $cars["BMW"]["model"] . " " . $cars["BMW"]["speed"] . " " . $cars["BMW"]["doors"] . " " . $cars["BMW"]["year"] . "<br><br>";
  echo $cars["Toyota"]["car"] . "<br>";
  echo $cars["Toyota"]["model"] . " " . $cars["Toyota"]["speed"] . " " . $cars["Toyota"]["doors"] . " " . $cars["Toyota"]["year"] . "<br><br>";
  echo $cars["Audi"]["car"] . "<br>";
  echo $cars["Audi"]["model"] . " " . $cars["Audi"]["speed"] . " " . $cars["Audi"]["doors"] . " " . $cars["Audi"]["year"] . "<br><br>";


  // 07 Циклы
  echo "<table>";
  for($i = 1; $i <=10; $i++){
    echo "<tr>";
    for($x = 1; $x <= 10; $x++){
      echo '<td style = "border:solid 1px #000; padding: 10px; text-align:center;">' . $i * $x . '</td>';
    }
    echo "</tr>";
  }
  echo "</table>";
