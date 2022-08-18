<?php
session_start();
if(isset($_POST['submit'])){
      $username=$_POST['email'];
      $password=$_POST['password'];

      $conn=mysqli_connect("localhost","root","","vegetables_website");


      $result=mysqli_query($conn,"select * from users where email='$username' and password = '$password'");
            
            
            if(mysqli_num_rows($result)){

            /*$logged_in_user = mysqli_fetch_assoc($results);
                        if ($logged_in_user['user_type'] == 'c') {

                              $_SESSION['email'] = $logged_in_user;
                              $_SESSION['success']  = "You are now logged in";
                              header('location: welcome.php');         
                        }else if ($logged_in_user['user_type'] == 'f') {
                              # code...
                        
                              $_SESSION['email'] = $logged_in_user;
                              $_SESSION['success']  = "You are now logged in";

                              header('location: farmerlanding.php');
                        }else{
                              $_SESSION['email'] = $logged_in_user;
                              $_SESSION['success']  = "You are now logged in";

                              header('location: adminlanding.php');

                        }
                  }
            }*/
                  while($row=mysqli_fetch_assoc($result))
                  {
                        $_SESSION["email"]=$row["email"];
                        header("location:welcome.php");
                  }
            }
            else
            {
                  die("Error:".mysqli_error($conn));
            }
}


 