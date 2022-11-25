<?php
$type = 'D';	// тип верстки 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Basics of algorithms</title>
  </head>
  <body>
    <header>
      <div class="wrapper">
        <div class="header__wrapper">
          <div class="logo">
            <img
              src="./assets/black-logo.PNG"
              alt="logo"
              height="90"
              width="270"
            />
          </div>
          <div class="contacts">
            <p>
              <span class="name">Меркель И.С.</span>
              <span class="group">211-362</span>
              <span class="lab">Лабораторная работа №9</span>
              <span class="variant">Вариант №8</span>
            </p>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="wrapper">
        <div class="main__wrapper">
        <?php 
          if ($type == "B") echo '<ul>';
          if ($type == "C") echo '<ol>';
          if ($type == "D") echo '<table border=1>';
         ?>
         <?php if($type == "D") {
          echo '
            <tr>
              <td>i</td>
              <td>x</td>
              <td>F</td>
            </tr>
          ';
         }
         ?>
        <?php
            $x = -10;	// начальное значение аргумента
            $encounting = 10000;	// количество вычисляемых значений
            $step = 2;	// шаг изменения аргумента
            $sum = 0; // сумма

            // -- Найти максимум и минимум
            $min = 9999999; 
            $max = 0;

            // -- Минимальное / максимальное значения для функции
            $max_value = 100;
            $min_value = -1000;

            // -- Иницилизация счетчика
            $i = 0;
          
            // -- Цикл for
              // for($i = 0; $i < $encounting; $i++, $x+=$step) {
              //   if ($x <= 10) {	
              //       $f = 7*$x+18;
              //   }

              //   if ($x > 10 && $x < 20) {
              //     if ($x == 16) {
              //       $f = 'error';
              //     } 
              //     else {
              //       $f = ($x-17)/(8-$x*0.5);
              //     }
              //   }

              //   if ($x >= 20) {
              //     $f = ($x+4)*($x-7);
              //   }

              //   $count++;
              //   if (!($f <= $max_value && $f > $min_value)) {
              //     break;
              //   }

              // // -- Проверки на типы
              // switch ($type) {
              //   case 'A':
              //     echo 'F('.$x.') = '.$f.'</br>';
              //     break;
                
              //   case 'B':
              //     echo '<li>F('.$x.') = '.$f.'</li>';
              //     break;

              //   case 'C':
              //     echo '<li>F('.$x.') = '.$f.'</li>';
              //     break;

              //   case 'D':
              //     echo '
              //     <tr>
              //       <td>'.$i.'</td>
              //       <td>'.$x.'</td>
              //       <td>'.$f.'</td>
              //     </tr>
              //     ';
              //     break;

              //   case 'E':
              //     echo '<div class="function">F('.$x.') = '.$f.'</div>';
              //     break;

              //   default:
              //     echo 'Не выбран тип верстки';
              // }


              //   // -- Подсчет суммы
              //   $sum += $f;

              //   // -- Проверка на максимум
              //   if ($f > $max) {
              //     $max = $f;
              //   }

              //   // -- Проверка на минимум
              //   if ($f < $min) {
              //     $min = $f;
              //   }

              // }

              // -- Цикл while
              $f = 0;
              while ($i < $encounting && ($f <= $max_value && $f > $min_value)){
               if ($x <= 10) {	
              $f = 7*$x+18;
            }

                if ($x > 10 && $x < 20) {
              if ($x == 16) {
                $f = 'error';
              } else {
                $f = ($x-17)/(8-$x*0.5);
              }
            }

              if ($x >= 20) {
              $f = ($x+4)*($x-7);
            }

              // -- Проверка на типы:
              switch ($type) {
                case 'A':
                  echo 'F('.$x.') = '.$f.'</br>';
                  break;
                
                case 'B':
                  echo '<li>F('.$x.') = '.$f.'</li>';
                  break;

                case 'C':
                  echo '<li>F('.$x.') = '.$f.'</li>';
                  break;

                case 'D':
                  echo '
                  <tr>
                    <td>'.$i.'</td>
                    <td>'.$x.'</td>
                    <td>'.$f.'</td>
                  </tr>
                  ';
                  break;

                case 'E':
                  echo '<div class="function">F('.$x.') = '.$f.'</div>';
                  break;

                default:
                  echo 'Не выбран тип верстки';
              }


              // -- Подсчет суммы
              if (is_numeric($f)) {
                $sum += $f;
              }
              

              // -- Проверка на максимум
              if ($f > $max) {
                $max = $f;
              }

              // -- Проверка на минимум
              if ($f < $min) {
                $min = $f;
              }

            
              $i++; 
              $x += $step;
            }



            // -- Цикл do..while
            // $count = 0;
            // do {
            //   if ($x <= 10) {	
              // $f = 7*$x+18;
            // }

            //     if ($x > 10 && $x < 20) {
            //   if ($x == 16) {
            //     $f = 'error';
            //   } else {
            //     $f = ($x-17)/(8-$x*0.5);
            //   }
            // }

            //   if ($x >= 20) {
            //   $f = ($x+4)*($x-7);
            // }

            //   // -- Проверка на типы:
            //   switch ($type) {
            //     case 'A':
            //       echo 'F('.$x.') = '.$f.'</br>';
            //       break;
                
            //     case 'B':
            //       echo '<li>F('.$x.') = '.$f.'</li>';
            //       break;

            //     case 'C':
            //       echo '<li>F('.$x.') = '.$f.'</li>';
            //       break;

            //     case 'D':
            //       echo '
            //       <tr>
            //         <td>'.$i.'</td>
            //         <td>'.$x.'</td>
            //         <td>'.$f.'</td>
            //       </tr>
            //       ';
            //       break;

            //     case 'E':
            //       echo '<div class="function">F('.$x.') = '.$f.'</div>';
            //       break;

            //     default:
            //       echo 'Не выбран тип верстки';
            //   }


            //   // -- Подсчет суммы
            //   $sum += $f;

            //   // -- Проверка на максимум
            //   if ($f > $max) {
            //     $max = $f;
            //   }

            //   // -- Проверка на минимум
            //   if ($f < $min) {
            //     $min = $f;
            //   }

            
            //   $i++; 
            //   $x += $step;
            // } while ($i < $encounting && ($f <= $max_value && $f > $min_value));

              
        ?>
         <?php 
          if ($type == "B") echo '</ul>';
          if ($type == "C") echo '</ol>';
          if ($type == "D") echo '</table>';
         ?>
          </div>
          <?php  echo 'Сумма: '.$sum.'</br>'; ?>
          <?php if ($i != 0) {
            echo 'Среднее: '.$sum / $i.'</br>';
          } else {
            echo 'Среднее: '.$sum / $count.'</br>';
          }?>
          <?php  echo 'Минимум: '.$min.'</br>'; ?>
          <?php  echo 'Максимум: '.$max.'</br>'; ?>
        </div>
      </div>
    </main>
    <footer>
      <div class="wrapper">
        <div class="footer__wrapper">
          <p>Тип верстки: <?php echo $type; ?></p>
        </div>
      </div>
    </footer>
  </body>
</html>
