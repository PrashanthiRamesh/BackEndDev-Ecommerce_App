<?php

#sequence of numbers

$numbers=array(1,2,3,4,5,6,7,8,9,10,20,30);

for($no=0;$no<sizeof($numbers);$no++){
    if($no==sizeof($numbers)-1){
        echo "$numbers[$no]";
    }else{
        echo "$numbers[$no] -";
    }
    
}


#sum of numbers
$sum=0;
for($i=0;$i<=30;$i++){
    $sum+=$i;
}
echo "<br>$sum<br>";

#pattern

for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "* ";
    }
    echo "<br>";
}

function factorial($value){
    if($value==0){
        return 1;
    }else{
        $fact=1;
        for($i=1;$i<=$value;$i++){
            $fact*=$i;
        }
        return $fact;
    }
}

echo factorial(4);



