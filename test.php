<?php

for ($i=0; $i<=100; $i++) {
  
    if($i % 15 == 0) echo 'fizzbuzz<br>';
    else if ($i % 5 == 0 ) echo 'buzz<br>';
    else if ($i % 3 == 0 ) echo 'fizz<br>';
    else echo $i. '<br>';
  
}

