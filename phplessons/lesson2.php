<?php

$values=array(34,76,12,98,43,12);

//bubble sort

for ($i=0;$i<count($values)-1;$i++){
    for($j=$i+1;$j<count($values);$j++){
            if($values[$i]<$values[$j]){
                $temp=$values[$i];
                $values[$i]=$values[$j];
                $values[$j]=$temp;
            }
    }
}

print_r($values);
