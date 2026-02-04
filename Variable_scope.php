<?php
//DataTypes
//String
$name="Sri Vaishnavi";
echo "Name: $name <br>";

//Integer
$age=19;
echo "Age: $age <br>";

//Float
$percentage=8.86;
echo "Percentage $percentage <br>";

//Boolean
$isStudent=true;
echo "Boolean: ";
var_dump($isStudent);
echo "<br>";

//Array
$subjects=array("DSP","WT","IOR","COA","CD");
echo "Subjects: ";
print_r($subjects);
echo "<br><br>";

//Scope
//Local Scope
function localScope(){
    $localVar="I am a local variable";
    echo "Local Scope: $localVar <br>";
}
localScope();

//Global Scope
$globalVar="I am a global variable";
function globalScope(){
    global $globalVar;
    echo "Global Scope: $globalVar <br>";
}
globalScope();

//Static Scope
function staticScope(){
    static $count=0;
    $count++;
    echo "Static Scope Count: $count <br>";
}
staticScope();
staticScope();
staticScope();
?>