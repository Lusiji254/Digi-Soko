<?php
  include "update_profile.php";
  session_start();
  if(!isset($_SESSION["email"]))
  {
    header("location:Veg.LogIn.html");
  }

   $conn = mysqli_connect('localhost', 'root','','vegetables_website' );

   if(!$conn){
       echo "Connection failed";
   }

   $prod=$_GET["product"];
   $sql="SELECT * FROM `product_profile` WHERE Product_id='$prod'";
   $result=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_assoc($result)){

  

?>
<!DOCTYPE html>
<html>
<head>
  <title>Product profile</title>
</head>
<body>
  <header>
  <div class="profile_info">
      
        <strong><?php echo $_SESSION['email']; ?></strong>
          <small>
            <i  style="color: #888;"></i> 
            <br>
            <a href="welcome.php?logout='1'" style="color: red;">logout</a>
          </small>

  <form method="post" enctype="multipart/form-data" onsubmit="<?php echo update($prod)?>">
    <input type="hidden" name="size" value="1000000">
    <p>
      <?php echo "<img src='list/".$row['Image']."' >";?></p>
    <p><label>Product name</label>
      <input type="text" name="pname" value="<?php echo $row['Product_name']?>" readonly></p>
      <p><label>Price per Unit</label>
      <input type="number" name="price" value="<?php echo $row['Price']?>" ></p>
<p><label>Quantity</label>
      <input type="number" name="quantity" value="1"></p>
<p><label>Location</label>
      <input type="text" name="location" value="<?php echo $row['Location']?>"></p>
<p><label>Amount</label>
      <input type="number" name="description" value="<?php echo $row['Price']* $row['Quantity']?>"></p>
      

<input type="submit" name="post" value="Confirm Order">
  </form>

</body>
</html>
<?php
}
?>