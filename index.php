<title>Top shitpost site ok</title>
<h1>Tuzchan</h1>
<link rel='stylesheet' type='text/css' href='style.css'>
<h3><a href="archive">archived posts</a></h3>
<?php
echo("<h3>RANDOM QUOTE:</h3>");
$quotes = 'quotes';
$files =  glob($quotes. '/*.*');
$file = array_rand($files);
echo file_get_contents($files[$file]);

echo("\n<a href='quote.html'><br>Add your own quote :^)</a></br>");
?>
<form action="post.php" method="post">
<input name="name" id="name" type="text" value="ANONMOOSE"/><br>
<input name="link" id="link" type="text" placeholder="url"/> 
<input type="submit" name="submit" id="submit" value="post xd"/></br>

<textarea name="text" id="post" rows="5" cols="30" placeholder="ur shitpost here ok" maxlength="200"> </textarea>
</form>
<a href='shitcan.php'><button>gas the shitposts ok</button></a>
<?php echo file_get_contents('http://getgle.ga/ads/adPHP.php'); ?>
</html>
<?php
$showposts = file_get_contents('posts.html') or die("make a post ok");
$showposts = str_replace("javascript","lolno",$showposts);
$showposts = str_replace("window.location","lolno",$showposts);
$showposts = str_replace("<script>","lolno",$showposts);
$showposts = str_replace("<iframe>","lolno",$showposts);
echo "$showposts";
?>