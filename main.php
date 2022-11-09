 <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/al.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Practice "My site" </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?>  </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="img/foto.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут: 
                    <?php echo '<b>'. $name .'</b>', ' ', '<b>'.$surname.'</b>' . '<br>'; 
                          echo 'Мой город:', ' ', '<b>'.$city.'</b>'; ?>                                      
                    </p> 
                    <p> Мне: <?php  echo '<b>'.$age.'</b>';   ?> <b>года</b> </p>
                    <p> <i>Мы изучили переменные.</i> </p>
                    <p> <i>Научились создавать простые операции с ними.</i> </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php  echo $a_1, ' ', $b_1, ' ', $c_1; ?> <br>
                    
                    <?php  echo $examples;?> <br>                   
                    <?php  echo 'Математические операции, 7 умножить на 5';?> <br>
                    <?php  echo 'Присвоим переменной $a число 7, ','$a = 7;';?> <br>
                    <?php  echo 'Присвоим переменной $b число 5, ','$b = 5;';?> <br> 
                    <?php  echo '$c = $a * $b;';?> <br>
                    <?php  echo 'echo $c';?> <br> 
                    <?php  echo 'Результат:';?> <br>
                    
                    <?php
                        $a = 7;
                        $b = 5;
                        $c = $a * $b;
                        echo $c;
                    ?> <br>                
                    <?php  echo ' ';?> <br>  
                    <?php  echo 'Использование логического оператора: ';?> <br>
                    <?php  echo 'Есть число 18',' ', 'присвоим его переменной: ', '$int' ;?> <br> 
                    <?php  echo ' ';?> <br>
                    <?php  echo "<?php";?> <br> 
                    <?php  echo '$int = 18;';?> <br>  
                    <?php  echo 'if(($int >= 15) && ($int <= 20) {';?> <br> 
                    <?php  echo 'echo ', 'Это число находится между 15 и 20',';';?> <br>
                    <?php  echo '}';?> <br> 
                    <?php
                    echo <<<'EOD'
                    В этом коде оператор && (логическое И) приводит значения слева и справа к булеву типу, 
                    а затем и сам возвращает булево значение: true (правда), если слева и справа true, либо false (ложь), 
                    если одно из условий false. То есть, если и одно, и другое условие истинно, то оператор && возвращает истину. 
                    EOD;?> <br>
                    <?php  echo 'Результат:';?> <br>
                    <?php echo $d;?> 

            </div>

            <div class="article">
                <p class="text">
                Я узнал:
                что такое язык программирования PHP, для чего он нужен;
                как происходит взаимодействие между сервером и клиентом (браузером);
                основной синтаксис языка PHP;
                какие бывают типы данных;
                виды переменных, константы;
                простейшие операции и способы вывода информации;
                основные инструменты для разработки и отладки.
                Научился:
                устанавливать и запускать локальный веб-сервер;
                создавать простейшие скрипты и выводить информацию.
                Я создал простейшую страницу-визитку с использованием полученных знаний и вывел получившийся результат в браузер.
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>