<?php
    require("sqldatabase\del-conn.php");
    //include("/mysql-php/connect.php");

function handleOnClockOut($conn) {
    $submit =$_POST['submitBtn'];
    $city =$_POST['city'];
    $state =$_POST['state'];
    $startm =$_POST['startm'];
    $endm =$_POST['endm'];
    $deliveried =$_POST['deliveried'];
    $price =$_POST['price'];
    $totalm =$_POST['totalm'];
    $gallons =$_POST['gallons'];
    $totalgas =$_POST['totalgas'];
    $dincome =$_POST['dincome'];
    $notes =$_POST['notes'];


//validate the form
$problem = false;
if(!$problem){
    $sql = "INSERT INTO delivery_endday (City, State, Start_miles, End_miles, `#_deliveried`, Price, Total_miles, Galllons, Total_gas, Income, Notes) VALUES ('$city', '$state', '$startm', '$endm', '$deliveried', '$price', '$totalm', '$gallons', '$totalgas',  '$dincome','$notes');";
        
    $result = mysqli_query($conn, $sql);
    
    if ($result){
     
    } else {
        print 'bad';
        
        
    }
}else {
    mysqli_error($conn);
    mysqli_error($sql);
}
    
}
handleOnClockOut($conn);
//print is_null($conn);

if (isset($_POST['submitBtn'])) {
   // $submit =$_POST['submitBtn'];
    //handleOnClockOut($conn);
    //print '<p> The data is been added!</p>';
}else {
    
   echo 'The button is not exiting';
}
/*$sql ="";
if(isset($_POST['viewBtn'])){
    $sql = "SELECT * FROM delivery_endsay";
     $result = mysqli_query($conn, $sql);
}else {
    
}*/

/**/
