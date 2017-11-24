<?php

include("db.php");

header("Content-Type: application/xml; charset=utf-8"); 
echo '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL; 
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' .PHP_EOL; 


$sql_query="SELECT * FROM event_wishes";
$result_set=mysqli_query($con,$sql_query) or die('error');

while($user_wish=mysqli_fetch_array($result_set))
{
 echo '<url>'.PHP_EOL; 
 echo '<loc>'.'https://www.mydiwali.club/'.$user_wish['str'].'</loc>'. PHP_EOL; 
 echo '<changefreq>weekly</changefreq>'.PHP_EOL; 
 echo '</url>'.PHP_EOL;
}

echo '</urlset>';

?>
