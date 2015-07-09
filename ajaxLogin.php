<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//code that does the ajax call for the login by checking that the details match with those stored server side
$con = mysqli_connect("127.0.0.1", "root", "password", "Companydatabase");
$tablename = employeelist;

if (mysqli_connect_errno()) {
    echo "failed to connect to MySQL" . mysqli_connect_error();
} else {
    $fldval = $_REQUEST["fldval"];
    $fldval2 = $_REQUEST["fldval2"];

    $str = "SELECT password FROM employeeList WHERE userName =".$fldval;
    $result = mysqli_query($con, $str);
     //print_r($result);
     $row = mysqli_fetch_array($result);
      print_r($row) ;
    if($row == null){
        echo"incorrect username ";
     }
         elseif($row[password] == $fldval2)
             {
            $cookie_name = "user";
            $cookie_value = $fldval;
            setcookie($cookie_name, $cookie_value, time() + (10*30), "/");
             }
        else{ echo "incorrect password";}
         
     }
?>
