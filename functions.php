//File Read / Write Functions
<?php 
echo "<h2> PHP File Functions </h2>";
//fopen() + fwrite()
$filename="example.txt";
$file=fopen($filename,"w");
fwrite($file,"Hello PHP File Functions\nThis is a Task");
fclose($file);

//fread()
$file=fopen($filename,"r");
echo "<b>fread():</b><br>";
echo fread($file,filesize($filename));
fclose($file);

echo "<hr>";

//file_get_contents()
echo "<b>file_get_contents():</b> <br>";
echo file_get_contents($filename);
echo "<hr>";

//file_put_contents()
file_put_contents($filename,"Written using file_put_contents()");

//file()
echo "<b>file():</b><br>";
print_r(file($filename));

echo "<hr>";

//FILE INFORMATION

echo "<b>file_exists():</b>";
echo file_exists($filename) ? "yes" : "no";

echo "<br><b>filesize():</b>".filesize($filename). "bytes";
echo "<br><b>filetype():</b>".filetype($filename);
echo "<br><b>fileatime():</b>".date("d-m-y H:i:s",fileatime($filename));
echo "<br><b>filemtime():</b>".date("d-m-y H:i:s",filemtime($filename));
echo "<br><b>fileperms():</b>".substr(sprintf('%o',fileperms($filename)),-4);
echo "<br><b>fileowner():</b>".fileowner($filename);
echo "<br><b>filegroup():</b>".filegroup($filename);
echo "<br><b>fileinode():</b>".fileinode($filename);
echo "<hr>";

//FILE AND FOLDER MANAGEMENT

copy("example.txt","copy.txt");
rename("example.txt","newfile.txt");
//unlink("newfile.txt");
if(!is_dir("textfolder")){
    mkdir("textfolder");
    echo "folder created successfully";
}
 //rmdir("testfolder");

  echo "<br><b>is_file():</b>";
  var_dump(is_file($filename));

  echo "<br><b>is_dir():</b>";
  var_dump(is_dir("textfolder"));

  echo "<hr>";

  //DIRECTORY HANDLING
  echo "<b>scandir():</b><br>";
  print_r(scandir("."));

  echo "<b>opendir():</b><br>";
  print_r(opendir("."));

  closedir();
  chdir("..");
  echo "<br> <b>After chdir():</b>".getcwd();
  
  //FILE LOCKING
  $lockfile=fopen("ex1.txt","w");
  if(flock($lockfile,LOCK_EX)){
    fwrite($lockfile,"File locked using flock()");
    flock($lockfile,LOCK_UN);
  }
  fclose($lockfile);
  echo "<br><b>flock():</b> File locked and written successfully"
?>
