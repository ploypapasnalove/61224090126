
<?php 
 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "shop";
 // Create connection
 $conn = new mysqli($servername, $username, $password,$dbname);
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 //echo "Connected successfully";
 mysqli_set_charset($conn, "utf8");
 
 echo "<table style=\"width:100%\" cellspacing=\"0\" bgcolor=\"#ccccff\">";
 echo"<tr>";
   echo"<th> ID </th>";
   echo"<th> Username </th>";
   echo"<th> Province</th>";
 echo"</tr>";
 //$sql = "SELECT suuid, usname, suprovince FROM user";
 $sql = "SELECT * FROM user"; 
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         //echo "id: " . $row["suuid"]. " - Name: " . $row["usname"]. "- Province " . $row["suprovince"]. "<br>";
         if($row["suuid"]%2==0){
             echo "<tr>";
             echo "<td bgcolor=\"blue\"><center><font color=\"#ffffff\"> ".$row["suuid"]."</font></center></td>";
             echo "<td bgcolor=\"#ffffcc\"><center>".$row["usname"]."</center></td>";
             echo "<td bgcolor=\"#ffffcc\"><center>".$row["suprovince"]."</center></td>";
             echo "</tr>";
         }else{
             echo "<tr>";
             echo "<td bgcolor=\"red\"><center><font color=\"#ffffff\"> ".$row["suuid"]."</font></center></td>";
             echo "<td bgcolor=\"#e6f9ff\"><center>".$row["usname"]."</center></td>";
             echo "<td bgcolor=\"#e6f9ff\"><center>".$row["suprovince"]."</center></td>";
             echo "</tr>"; 
         }
     }
 } else {
     echo "0 results";
 }
 echo "</table>";
 
 $conn->close();

?>

