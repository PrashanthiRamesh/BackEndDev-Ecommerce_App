<?php

//open 2 files in read mode

// read the contents 

//concatenate the contents into a variable

//open another file in write mode

//write the merged content into the new file

$file_php=fopen("read.txt","r");
while(!feof($file_php)){
    echo fgets($file_php);
}
echo htmlentities(file_get_contents("timer.php"));