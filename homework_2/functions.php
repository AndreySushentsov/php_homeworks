<?php
// basic
$string = 'This is a is this';
$wordsArray = explode(' ', $string);
$numberArray = [1, 2, 3, 4, 5, 6];


// Echo string in paragraph
function task1($arr, $second)
{
  $count = count($arr);

  if($second == true) {
    for($i = 0; $i < $count; $i++) {
      echo $arr[$i] . ' ';
    }
  } else {
    for($i = 0; $i < $count; $i++) {
      echo '<p>' . $arr[$i] . '</p>';
    }
  }
}


//arithmetic operations
function task2($arr, $str) {

  switch ($str) {
    case '+':
     for($i = 0; $i < count($arr); $i++){
       $result += $arr[$i];
     }
     echo $result;
      break;
    case '-':
      for($i = 0; $i < count($arr); $i++){
        $result -= $arr[$i];
      }
      echo $result;
      break;
    case '*':
      for($i = 0; $i < count($arr); $i++){
        $result *= $arr[$i];
      }
      echo $result;
      break;
    case '/':
      for($i = 0; $i < count($arr); $i++){
        $result /= $arr[$i];
      }
      echo $result;
      break;
    default:
      echo "You enter encorrect operation";
      break;
  }
}

function task3($str)
{
    $args = func_get_args();
    $first = $args[0];
    switch ($first) {
      case '+':
          for($i = 1; $i < count($args); $i++){
            $result += $args[$i];
          }
          echo $result;
        break;
      case '-':
          for($i = 1; $i < count($args); $i++){
            $result -= $args[$i];
            echo $result;
          }

        break;
      default:
        echo "You enter encorrect first argument";
        break;
    }

}

function task4($arg1 = 1, $arg2 = 1)
{
  echo "<table>";
  for($i = 1; $i <= $arg1; $i++){
    echo "<tr>";
    for($x = 1; $x <= $arg2; $x++){
      echo "<td style='border: 1px solid #000; margin:0; padding:10px; text-align:center'>" . $i * $x . "</td>";
    }
    echo "<tr>";
  }
  echo "</table>";
}

function task5_1($str)
{
  $toLowerCase = mb_strtolower($str);
  $array = explode(' ', $toLowerCase);
  $reverse = array_reverse($array);
  $implodeStr = implode(' ', $reverse);

  if($toLowerCase == $implodeStr){
    return true;
  } else {
    return false;
  }
}


function task5_2($arg)
{
  if($arg == true){
    echo "This is palendrom";
  } else {
    echo "This is not palendrom";
  }
}

function task6()
{
    echo date("d.m.Y H:i") . "<br>";
    echo time();
}

function task7($str)
{
  $newStr = str_replace('T', '', $str); // Find simbol and replace it.
  echo $newStr . '<br>';

  $newStr = str_replace('This', 'THIS', $str); //Find word and replace it on new word
  echo $newStr;
}

task7($string);
