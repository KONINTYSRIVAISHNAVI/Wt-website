<?php 
echo "<h2>String Functions</h2>";
$text="Welcome to my webpage";

echo "Length:".strlen($text)."<br>";
echo "Word Count:".str_word_count($text)."<br>";
echo "Reverse:".strrev($text)."<br>";

echo "Uppercase:".strtoupper($text)."<br>";
echo "Lowercase:".strtolower($text)."<br>";
echo "Ucfirst:".ucfirst(trim($text))."<br>";
echo "Ucwords:".ucwords(trim($text))."<br>";

echo "Position of 'my':".strpos($text,"my")."<br>";
echo "Replace:".str_replace("my webpage","this webpage",$text)."<br>";

echo "Substring:".substr($text,0,7)."<br>";

echo "Trim:".trim($text)."<br>";
echo "Ltrim:".ltrim($text)."<br>";
echo "Rtrim:".rtrim($text)."<br>";

echo "Compare:".strcmp("Hello","hello")."<br>";
echo "Compare Ignore Case:".strcasecmp("Hello","hello")."<br>";

echo "Html Special Chars:".htmlspecialchars("<h1>Hello</h1>")."<br>";
echo "Add Slashes:".addslashes("I'am Website")."<br>";
?>