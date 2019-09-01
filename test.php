<?php 
 
 $type = $_POST["gender"]; 
    echo $type;
    echo "<br>";
    echo $_POST["name"]; 
    $fullname = $_POST["name"];
    echo "<br/>";
    echo $_POST["province"]; 
    echo "<br/>";
    echo $_POST["myfcolor"]; 
    $mfc = $_POST["myfcolor"]; 
    $size = $_POST["size"]; 
    echo "<br/>";
    echo $_POST["mobile_number"]; 
    echo "<br/>";
    echo $_POST["pwd"];
    echo "<br/>";
    echo $_POST["intro"];
    echo "<br/>";
    echo "<font color=\"$mfc\" size=\"$size\">$fullname</font>";

	Setcookie('city',$_POST["province"], time()+60);
    echo "<a href=\"cookie.php\">ดูค่า Cookie</a>";
?>