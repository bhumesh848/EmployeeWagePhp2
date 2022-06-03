<?php
class EmpWage{
     static function welcomeMsg(){
        echo "Welcome to Employee wage program \n";
    }
    function empCheck(){
       $present =1;
        $number =rand(0,1);
        if($number==$present){
            echo "Employee is present";
        }
        else{
            echo "Employee is Absent";
        }
 
    }
 }
EmpWage::welcomeMsg();
$emp = new EmpWage();
$emp->empCheck();
?>