<?php
$date = date('Y-m-d H:i:s');
copy("posts.html","archive/$date.html");
unlink("posts.html");
unlink("count.txt");
header("location:index.php");
?>