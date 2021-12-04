<?php   
   // require('del-conn.php');
    require("sqldatabase\del-conn.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> read </title>
	<style>
        
        table{border-collapse: collapse;}
        td, th{border: 1px solid black;  padding: 0 10px;}
        tr:nth-child(even){background-color: gray;}
    
    </style>
</head>

<body>
  
    <form action="" method="post">
       <input type = "submit" id="viewBtn" value="View work" class="btn" name="viewBtn">
    
     <a href="index.php" id="home">Home</a>
        <label for=""></label>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>City</th>
            <th>State</th>
            <th>Start miles</th>  
            <th>End miles</th>  
            <th>#_deliveried</th>  
            <th>Price</th>  
            <th>Total miles</th>  
            <th>Gas</th> 
            <th>Total Gas</th> 
            <th>Income</th> 
            <th>Notes</th> 
         </tr>
        
        <?php
            if(isset($_POST['viewBtn'])){
               // $viewbtn = $_POST['viewBtn'];
                $sqlread= "SELECT * FROM delivery_endday;";
                $result = $conn->query($sqlread);
                //$tdata = "<td> </td>";
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                    //echo $sqlread;
                    echo '';
                    //echo "<tbody>". $row["ID"]->$tdata "</tbody>";

                    echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["Date"]. "</td><td>" . $row["City"]. "</td><td>" . $row["State"]. " </td><td>" . $row["Start_Miles"]."</td><td>" . $row["End_Miles"]."</td><td>" . $row["#_deliveried"]."</td><td>" . $row["Price"]."</td><td>" . $row["Total_miles"]."</td><td>" . $row["Galllons"]."</td><td>" . $row["Total_gas"]."</td><td>" . $row["Income"]."</td><td>" . $row["Notes"]."</td></tr>";
                //echo "ID: " . $row["ID"]. " First Name: " . $row["First_name"]. " Last Name: " . $row["Last_name"]. " Age: " . $row["Age"]. " Email: " . $row["Email"]."<br>";
                }
            }//print ($result);
                } else {
                    //$result = $conn->query($sqlread);
                    //print mysqli_error();
                    //print ($result);
                    die("Data not found");
            }//else {
            // die("Button not found");}
        ?>
    </table>
    
    </form> 
     <script type="text/javascript" src="delivery.js"></script>
    </body>
</html>
