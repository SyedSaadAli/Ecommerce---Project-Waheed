<?php 
include('security.php');

if(isset($_POST['login_btn']))
{


    $Username = $_POST['Username'];
    $Password = $_POST['Password'];


    $query = "SELECT * FROM admin";
    $query_run = mysqli_query($connection, $query);
    if(mysqli_num_rows($query_run) > 0){
        while($row = mysqli_fetch_assoc($query_run)){

          if($row['Name'] === $Username && password_verify($Password, $row['Password']))
          {
      
             $_SESSION['Username'] = $Username ;
             $_SESSION['Password'] = $Password ;
              header('Location: admin/index.php');
        

         }
     }
 }

if(!isset( $_SESSION['Username'])){
             header('Location: login.php');
 }

}



if(isset($_POST['contact_btn']))
{
  //echo "Working";


    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];
  

  $query = "INSERT INTO contact (Name,Email,Subject,Message) VALUES ('$Name','$Email','$Subject','$Message')";
     $query_run = mysqli_query($connection, $query);

     
     if($query_run)
    {
        $_SESSION['status'] = "Your message has been sent. Thank you!";
        $_SESSION['status_code'] = "success";
        header('Location: index.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your message has not been sent. Thank you!";
        $_SESSION['status_code'] = "error";
        header('Location: index.php');  
    }
  }





//--------------------------------------------------------------------------------------------------------

if(isset($_POST['submit_order']))
{



    $Name = $_POST['Name'];
    $Phone = $_POST['Phone'];
    $Quantity = $_POST['Quantity'];
    $City = $_POST['City'];
    $Address = $_POST['Address'];
    $Prd_ID = $_POST['Prd_ID'];
 
  $query = "INSERT INTO ordernow (FullName,Mobile,Quantity,City,Address,Product_ID) VALUES 
  ('$Name','$Phone','$Quantity','$City','$Address','$Prd_ID')";
     $query_run = mysqli_query($connection, $query);

     if($query_run)
    {
        $_SESSION['status'] = "Your Order Has Been Successfully Placed !";
        $_SESSION['status_code'] = "success";
        header('Location: order.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Order Has Not Been Placed !";
        $_SESSION['status_code'] = "error";
        header('Location: order.php');  
    }
  }
  













    ?>

