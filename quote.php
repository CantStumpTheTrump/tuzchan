<?php
$name = $_POST['name'];
$quote = $_POST['quote'];
$file = fopen("quotes/$name.txt","w");
fwrite($file,"$quote - $name");
header("location:index.php");
?> 