<?php
$fp = fopen("newfile.txt", "r");
//only read mode
while (!feof($fp)) {
    echo fgets($fp);
}

fclose($fp);

//only write mode
$fp = fopen("newfile.txt", "w");

fwrite($fp, "This is write mode\n");

fclose($fp);

// only append mode
$fp = fopen("newfile.txt", "a");

fwrite($fp, "This line is appended\n");

fclose($fp);

//x mode
// $fp = fopen("examples.txt", "x");

// fwrite($fp, "File created using x mode");

// fclose($fp);

//read and write file must exist
$fp = fopen("newfile.txt", "r+");

fwrite($fp, "Hello ");
rewind($fp);
echo fread($fp, filesize("newfile.txt"));

fclose($fp);

//read and write deletes the existing content
$fp = fopen("newfile.txt", "w+");

fwrite($fp, "Fresh content");
rewind($fp);
echo fread($fp, filesize("demo.txt"));

fclose($fp);

//reads and appends 
$fp = fopen("demo.txt", "a+");

fwrite($fp, "\nNew appended line");
rewind($fp);
echo fread($fp, filesize("demo.txt"));

fclose($fp);

//x+ create a new file if not exists (read and write)
// $fp = fopen("examples.txt", "x+");

// fwrite($fp, "Read and write mode");
// rewind($fp);
// echo fread($fp, filesize("brandnew.txt"));

// fclose($fp);
?>


