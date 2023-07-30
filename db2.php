<?php
$sname=$_POST["sname"]; 
$email=$_POST["email"]; 
$service=$_POST["service"]; 
$time=$_POST["time"]; 
$date=$_POST["date"]; 
$ph=$_POST["ph"]; 
$mysql = mysqli_connect("localhost", "root")  
or die("Can't connect to DB"); 
mysqli_select_db($mysql, "paws")  
or die("Can't select DB"); 
mysqli_query($mysql, "insert into book values('$sname',' $email',' $service', '$time','$date','$ph')") 
or die("Query failed to insert"); 

mysqli_close($mysql);
?>
<html>
    <head>
        <style>
             .button {
                        display: inline-block;
                        border-radius: 4px;
                        background-color: rgb(17, 17, 74);
                        border: none;
                        color: #FFFFFF;
                        text-align: center;
                        justify-content: center;
                        align-items: center;
                        font-size: 28px;
                        padding: 20px;
                        width: 400px;
                        transition: all 0.5s;
                        cursor: pointer;
                        margin: 5px;
                        padding-bottom: 20px;
                      }

                       .button span {
                        cursor: pointer;
                        display: inline-block;
                        position: relative;
                        transition: 0.5s;
                      }
                      
                       .button span:after {
                        content: '\00bb';
                        position: absolute;
                        opacity: 0;
                        top: 0;
                        right: -20px;
                        transition: 0.5s;
                      }
                      
                       .button:hover span {
                        padding-right: 25px;
                      }
                      
                       .button:hover span:after {
                        opacity: 1;
                        right: 0;
                      }
            </style>
</head>
    <body align=center>
        
        <h1>BOOKED SUCCESSFULLY</h1>


    <a href="index1.html">
<button class="button" style="vertical-align:middle" ><span>HOME PAGE </span></button>
</a>
</body>
</html>