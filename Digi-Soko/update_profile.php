<?php

function update($value){
    if (isset($_POST['post'])) {
    # code...
    $pname=$_POST['pname'];
    $image = $_FILES['image']['name'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $location=$_POST['location'];
    $description=$_POST['description'];

    //image file directory
    $target ="images/".basename($image);

    $conn=mysqli_connect("localhost","root","","vegetables_website");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
 if(empty($pname)){ echo "Product name Required";}
    if(empty($image)){ echo "Image Required";}
    if(empty($price)){ echo "Price Required";}
    if(empty($quantity)){ echo "Quantity Required";}
    if(empty($location)){ echo "Location Required";}
    if(empty($description)){ echo "Description Required";}

    $sql="UPDATE `product_profile` SET `Product_name`='$pname',`Price`='$price',`Quantity`='$quantity',`Location`='$location',`Description`='$description',`Image`='$image' WHERE Product_id='$value'";

    $result=mysqli_query($conn,$sql);

    if($result){
        if (!empty($image)) {
            # code...
       
            header("location:product_change.php");}
    } else {
        echo "Image Required";
    } 

}
}

?>