<?php
 include('security.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Soukmax</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php
  	$query = "SELECT * FROM Category";
  	$query_run = mysqli_query($connection, $query);

  	?>
    <div class="container">
        <div class="header">
            <img src="images/logo.jpg" alt="" height="60px" width="auto" >
        </div>
        <div class="navbar">
           <div class="nav">
            <ul class="list">
            <form code='index.php' method='post'>
            <li><button type='submit' name='All' style="border:none; cursor:pointer; background:none; font-size:16px;">All </button></li>
            </form>
            <?php
  			if(mysqli_num_rows($query_run) > 0)        
  			{
  				while($row = mysqli_fetch_assoc($query_run))
  				{
  					?>
                    <form code='index.php' method='post'>
                    <input type="hidden" name="Cat_ID" value="<?php echo $row['Cat_ID']; ?>">
                <li><button type='submit' style="border:none; cursor:pointer;  background:none; font-size:16px;"><?php  echo $row['Category'];?> </button></li>
               
                </form>
<?php
                }}
?>
            </ul>
           </div>
        </div>
       <div class="pbox">

        <?php
        if(isset($_POST['Cat_ID'])){
     
             $query2 = "SELECT * FROM product WHERE Cat_ID='".$_POST['Cat_ID']."'";
             $query_run2 = mysqli_query($connection, $query2);
        }elseif(isset($_POST['All'])){

            $query2 = "SELECT * FROM product";
            $query_run2 = mysqli_query($connection, $query2);
        }else{
            $query2 = "SELECT * FROM product";
            $query_run2 = mysqli_query($connection, $query2);
        }
            if(mysqli_num_rows($query_run2) > 0)        
            {
                while($row2 = mysqli_fetch_assoc($query_run2))
                {
                    $id = $row2['Product_ID'];
              
                    $query6 = "SELECT Image FROM image WHERE Prd_ID = '$id'";
                    $query_run6 = mysqli_query($connection, $query6);
                    $row6 = mysqli_fetch_assoc($query_run6);
                  
                    if($row2['SP']>0){
                        $res1 = (($row2['SP'] - $row2['DP'])/$row2['SP']) * 100 ;
                        $res = round((int)$res1);
                    }
                   ?>
        <a href="order.php?IS=<?php  echo $row2['ItemsSold']; ?>&Image=<?php  echo rawurlencode($row6['Image']); ?>&Name=<?php  echo $row2['Name']; ?>&Description=<?php  echo $row2['Description']; ?>&DS=<?php  echo $row2['DP']; ?>&SP=<?php  echo $row2['SP']; ?>&Prd_ID=<?php  echo $id; ?>&res=<?php  echo $res; ?>" class="productform">
       -->
       

            <button>
                <div class="productcard">
                    <div class="offtag"><p><?php echo $res; ?>% Off</p></div>
                    <div class="offtag peices"><p><?php  echo $row2['ItemsSold']; ?> Sold</p></div>
                    <div class="pimg" style="    background-image: url('admin/<?php  echo $row6['Image']; ?>');">
                        <div class="freedelivery"><p>Free Delivery</p></div>
                    </div>
                    <div class="pinfo">
                        <div class="description"><?php  echo $row2['Name']; ?></div>
                        <div class="price"><?php  echo $row2['DP']; ?> AED <span class="cutprice"><?php  echo $row2['SP']; ?> AED</span></div>
                    </div>
                </div>
            </button>

        </a>
        <!--Product Code Ends-->
               <?php
                }}
               ?>
       </div>

       <!-- ----------Footer Code Start -->
<div class="fcontainer">
    <div class="footer">
      <div class="colone" style="background-color: white"  >
        <h3>Useful links</h3>
        <p><b style="color:deepskyblue;background-color: white;">About us</b></p>
        <p><b style="color:deepskyblue;background-color: white;">Unclaimable Products</b></p>
        <p><b style="color:deepskyblue;background-color: white;">Why us?</b></p>
    </div>
    <div class="coltwo"  style="background-color: white">
      <h3>Contact Info</h3>
     
              <p>Mega Services FZE</p>
              <P>Fujairah, UAE</P>
              <P>Webpage  <b style="color:deepskyblue;background-color: white;">www.megadeals.ae</b></P>
              <P>Instagram: <b style="color:deepskyblue;background-color: white">MegaDeals</b></P>
              <P>Email: <b style="color:deepskyblue;background-color: white">Sales@megadeals.ae</b></P>
              <P>Whatsapp: <b style="color:deepskyblue;background-color: white">+971 54 783 8124</b></P>
  </div>
  <div class="colthree"  style="background-color: white" >
    <h3 >Accept Payment</h3>
    <p>CASH ON DELIVERY
      </p>
      <p>PAYPAL AND PAYMENT METHOD COMING SOON</p>
  </div>
    </div>
  </div>
    <!-- ----------Footer Code End -->

</body>
</html>