
<html>
<head>
<meta charset="utf-8">
<title>Login | User</title>

</head>


<body>


	 <center>
	 <h2>Log In Here</h2>
	 <form method="GET" action="20.php">
	   <h3><p>Email</p></h3>
	   <input type="text" name="ssn" placeholder="Enter SSN"/>
	  <!--  <h3><p>Password</p></h3>
	   <input type="password" name="pswrd" placeholder="*********" > -->
	   <br><br>
	   <input type="submit" name="submit" />
	   
	   </form>
	   
	   </center>

	   <?php

error_reporting(0);
 if(isset($_GET["ssn"])){
    $ssn = $_GET["ssn"];

   $conn = mysql_connect("localhost","root","4862") or die ("unsuccessfull");
     $db= mysql_select_db("EMP",$conn)
            or die ("unsuccessfull1");
  

   $query = "select * from EMPLOYEE, DEPARTMENT where Mgr_ssn='$ssn' AND Dno=Dnumber ";
   
  $res = mysql_query($query);

        
   if($res){


   		echo "<table border=\"5\">";

   		$i=0;
   		/*echo "<th>";
			   		echo "<td>".mysql_field_name( $h,$i++ )."</td>";
		}*/

          while ($s=mysql_fetch_array($res)) {

          		        	echo "<tr>";			


        				echo "<td>".$s['Fname']."</td>";
        				echo "<td>".$s[1]."</td>";
        				echo "<td>".$s[2]."</td>";
        				echo "<td>".$s[3]."</td>";
        				echo "<td>".$s[4]."</td>";
        				echo "<td>".$s[5]."</td>";
        				echo "<td>".$s[6]."</td>";
        				echo "<td>".$s[7]."</td>";
        				echo "<td>".$s[8]."</td>";
        				echo "<td>".$s[9]."</td>";
        				echo "<td>".$s[10]."</td>";
        				echo "<td>".$s['Dno']."</td>";

        				echo "</tr>";

            }  
            	echo "</table>";

       }


      else{

          
            echo "<h1>Not registered</h1>";

       }



 }
?>



</body>

</html>

