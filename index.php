<?php
    
    session_start();
    //require("read_mydate.php");
    //require_once("sqlfunction.php");
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <script type="text/javascript" src="delivery.js"></script>
    <style>
        h2 { margin: auto; text-align: center;
    
        }
        #mainBtns { 
            margin-top: 20%;
        }
        input {
            display: block;
            width: 45%;
            font-size: 1.2em;
            margin: 10px auto;
            padding: 10px 0;
            
        }
        #endday{
            display: none;
        }
        #endday input {
            display: inline;
            width: %;
            font-size: 1em;
            margin: 10px auto;
            padding: 2px 0;
            
        }
         #endday label {
            display: inline-block;
            width: 35%;
            font-size: 1.2em;
            margin: 10px auto;
            padding: 2px 0;
        }
         #submitBtn {
            font-size: 1em;
            width: 25%;
            margin: 0px auto;
            display:non;
        }
        #home {
            display: none;
            width: 25%;
            padding: 5px;
            text-align: center;
            font-size: 1.5em;
            margin: 10px auto;
            background-color: aqua;
            text-decoration: none;
        }
    </style>
</head>
<body>
<header> 
    <h2>Independent Delivery Service/<br> Self-employed</h2>
   <!-- <h3>Address: <span>This information will come from your account </span></h3>
    <h3>4007 SW 333rd ST Federal Way, WA 98023 <br>Phone: <span>(206) 460-3154 </span> Fax: <span> None </span> Email: <span> hmberwa1@gmail.com </span></h3> -->
</header>
<hr>
 <a href="index.php" id="home">Home</a>
        <div id="mainBtns">
            <input type = "button" id="newdaybtn" value="Clock In" class="btn" disabled>
            <input type = "button" id="enddaybtn" value="Clock Out" class="btn">
            <input type = "button" id="viewBtn" value="View work" class="btn" name="viewBtn">
            <input type = "button" id="editbtn" value="Edit" class="btn" disabled>
            <input type = "button" id="searchbtn" value="Search" class="bt" name="btn" disabled>
		</div>
		
		<div id="endday">
            <p style="font-weight: bold; text-decoration: underline;">End of the day</p>
           <form action="" method="post" >
            <label for="" id="label">City: </label>
            <input type = "text" name ="city" placeholder = "City" size="8" required>
            <label for="" id="label">State: </label>
            <input type = "text" name ="state" placeholder = "State" size="8" required>
            <br>
            <label for="" id="label">Start Miles: </label>
            <input type = "text" name ="startm" placeholder = "Start Miles" size="8" id="startmiles" required>
            <label for="" id="label">End Miles: </label>
            <input type = "text" name ="endm" placeholder = "End Miles" size="8" id="endmiles" required>
            <br>
            <label for="" id="label"># of item deliveried</label>
            <input type = "text" name ="deliveried" placeholder = "Ex: 100" size="8" id="deliveried" required>
            <br>
            <label for="" id="label">total price: $</label>
            <input type = "text" name ="price" placeholder = "$" size="8" id="perprice" required>
            <br>
            <label for="" id="label">Total miles: </label>
            <input type = "text" name ="totalm" size="8" id="totalmiles" placeholder = "$">
            <br>
            <label for="" id="label"> Total Gas: </label>
            <input type = "text" name ="gallons" placeholder = "galons" size="8" id="gallon" required> 
            <br>
            <label for="" id="label">Gas total: $</label>
            <input type = "text" name ="totalgas" placeholder = "$" size="8" id="gas">
            <br>
            <label for="" id="label">Income: $</label>
            <input type = "text" name ="dincome" placeholder = "$" id="dayincome" >
            <br><br>
            <label for="" id="label">Notes: </label>
            <textarea name="notes" cols="40" rows="5" id="notes" required></textarea>
            <br><br>
            <input type="submit" name="submitBtn" id="submitBtn" value="Submit">
            </form>
            
        </div>
    <script type="text/javascript" src="delivery.js"></script>
<!-- READ DATA FROM THE SERVER -->
    
    <?php
    //require("sqldatabase\del-conn.php");
    require_once("sqlfunction.php");
    //require("read_mydate.php");
    ?>
     
    </body>
    </html>
    
 