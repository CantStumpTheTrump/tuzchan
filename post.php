<?php
$date = date('Y-m-d H:i:s');
$count = file_get_contents("count.txt");
$count ++;
$handle = fopen('count.txt','w');
fputs($handle,$count);
$post = $_POST['text'];
$name = $_POST['name'];
$link= $_POST['link'];
$file = fopen("posts.html","a");
fwrite($file,"<a href='$link'><div id='$count'><h4>$count\n $name:$post</h4></a></div>");
fclose($file);
header("location:index.php");
?>
