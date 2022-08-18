<?php

/**
 * Connect to the database
 */

 $conn = mysqli_connect('localhost', 'root','','vegetables_website' );

 if(!$conn){
     echo "Connection failed";
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Requests</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style>
        * {
    box-sizing: border-box;
  }
  
  body {
    margin: 0;
    /*background-image: url(../images/admin.jpg);*/
    background-repeat: no-repeat;
    background-size: 1920px 1080px;
    font-family: Arial;
  }
  
  .header {
    text-align: center;
    padding: 32px;
  }
  
  .row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    padding: 0 20px;
  }
  
  /* Create four equal columns that sits next to each other */
  .column {
    border: 5px solid whitesmoke;
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
    max-width: 25%;
    max-height: 25%;
    padding: 0 20px;

  }
  
  .column img {
    margin-top: 8px;
    vertical-align: middle;
    width: 150px;
    height: 150px;
  }
  
  /* Responsive layout - makes a two column-layout instead of four columns */
  @media screen and (max-width: 800px) {
    .column {
      -ms-flex: 50%;
      flex: 50%;
      max-width: 50%;
    }
  }
  
  /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .column {
      -ms-flex: 100%;
      flex: 100%;
      max-width: 100%;
    }
  }
    </style>
</head>
<body>
<!--<div class="page-header">
    <?php
    //Find the number of items in the database
     $num //= mysqli_query($link, "SELECT * FROM product_profile")?>
    <h1>Hi, You have <b><?php //echo $total = mysqli_num_rows($num); ?></b> parts in Store.</h1>
</div>-->
<div class="row" style="background-color:aliceblue;">
    <?php
    //Display images from the database
        $sql = "SELECT * FROM request_profile";
        mysqli_query($conn,$sql);
        $result = mysqli_query($conn,$sql);?>
        <?php while ($row = mysqli_fetch_array($result)) {?> 
  <div class="column">
            <?php echo "<p> Product Name:".$row['Product_name']."</p>";?>
            <?php echo "<p> Description:".$row['Description']."</p>";?>
            <?php echo "<p> Quantity: ".$row['Quantity']."</p>";?>
            <?php echo "<p> Location:".$row['Location']."</p>";?>
            <?php echo "<a class='btn btn-primary' href='update_request_form.php?request=".$row["Request_number"]."'>Update</a>"?>
            <?php echo "<a class='btn btn-danger' href='delete_request.php?request=".$row["Request_number"]."'>Delete</a>"?>
            <br>
        <br>
  </div>
        <?php } ?>
</div>
    
</body>
</html>