<?php 
 
    echo $_POST["name"]; 
    $fullname = $_POST["name"];
    echo "<br/>";
    echo $_POST["myfcolor"]; 
    $mfc = $_POST["myfcolor"]; 
    $size = $_POST["size"]; 
    echo "<br/>";
    echo $_POST["mobile_number"]; 
    echo "<br/>";
    echo $_POST["pwd"];
    echo "<br/>";

    echo "<font color=\"$mfc\" size=\"$size\">$fullname</font>";
	
 
?>