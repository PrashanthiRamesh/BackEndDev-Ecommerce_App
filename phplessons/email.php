<?php   

$to_email = 'testtoweb1@gmail.com';
$subject = 'New Test Mail';
$message = 'New Test Mail';
$headers = 'From:testfromweb1@gmail.com';
mail($to_email,$subject,$message,$headers);

echo "Mail send successfully!";
?>
