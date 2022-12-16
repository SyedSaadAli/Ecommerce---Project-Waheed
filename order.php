<?php
 include('security.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soukmax</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class=".container">
    <!--Header code starts-->
  <div class="header">
      <img src="images/logo.jpg" alt="" height="60px" width="auto">
  </div><br>
   <!--  <div class="navbar">
     <div class="nav">
      <ul class="list">
      <?php
      	// $query2 = "SELECT * FROM Category";
        //   $query_run2 = mysqli_query($connection, $query2);
    
  		// 	if(mysqli_num_rows($query_run2) > 0)        
  		// 	{
  		// 		while($row2 = mysqli_fetch_assoc($query_run2))
  		// 		{
  					?>
                <li><a href=""><?php  //echo $row2['Category'];?> </a></li>
             
<?php
                // }}
?>
      </ul>
     </div>
  </div> -->
    <!--Header COde Ends-->
    
    <div class="ordercontainer">
      <div class="leftproductswap">
      <!--Bscreen COde start-->
      <?php
      if(isset($_GET['res'])){
      $_SESSION['res'] = $_GET['res'];
      }
      if(isset($_GET['Prd_ID'])){
      $_SESSION['Prd_ID'] = $_GET['Prd_ID'];
      }
      if(isset($_GET['Prd_ID'])){
      $Prd_ID = $_SESSION['Prd_ID'];
      }
      if(isset($_GET['IS'])){
      $_SESSION['IS'] = $_GET['IS'];
      }
      if(isset($_GET['Image'])){
      $_SESSION['Image'] = rawurldecode($_GET['Image']);
      echo  $_SESSION['Image'];
      }
      if(isset($_GET['DS'])){
      $_SESSION['DS'] = $_GET['DS'];
      }
      if(isset($_GET['SP'])){
      $_SESSION['SP'] = $_GET['SP'];
      }
      if(isset($_GET['Name'])){
        $_SESSION['Name'] = $_GET['Name'];
        }
        if(isset($_GET['Description'])){
            $_SESSION['Description'] = $_GET['Description'];
            }
      ?>
      <div class="bscreen">
        <div class="imgbox">
          <div class="oftag"><p><?php echo round($_SESSION['res']); ?>% Off</p></div>
          <div class="soldtag"><p> <?php echo $_SESSION['IS']; ?> Sold</p></div>
          <div class="freedtag"><p>Free Delivery</p></div>
          <img src="admin/<?php echo $_SESSION['Image']; ?>" alt="">
 
        </div>
        </div>
        <!--Bscreen Code ends-->
        <div class="imgswap">
            <?php
            $count = 0;
        $query = "SELECT Image FROM image WHERE Prd_ID = '".$_SESSION['Prd_ID']."'";
                    $query_run = mysqli_query($connection, $query);
                    if(mysqli_num_rows($query_run) > 0)        
            {
                while($row = mysqli_fetch_assoc($query_run))
                {
                    ?>
          <img src="admin/<?php echo $row['Image']; ?>" alt="">
         
         
          <?php 
           $count++ ;
           if($count === 5){
            break;
           }
                }}
          ?>
        </div>
        <div class="pinfo orderinfo">
          <div class="price"><?php echo $_SESSION['DS']; ?> AED <span class="cutprice"><?php echo $_SESSION['SP']; ?> AED</span></div>
      </div>
      </div>
      <div class="rightorderform">
      <h1>Order Now</h1>
      <?php  
					if(isset($_SESSION['success']) && $_SESSION['success'] != '')
					{
	echo '<h2 class="bg-primary"> '.$_SESSION['success'].' </h2>';# text-white
	unset($_SESSION['success']);
}
if(isset($_SESSION['status']) && $_SESSION['status'] != '' )
{
      echo '<h2 class="big-danger"> '.$_SESSION['status'].' </h2>';# text-white
      unset($_SESSION['status']);
  }
  ?>
      <p>Kindly fill the form & we will deliver next day(AbuDhabi 2 days).</p> <br><br>
      <form action="Code.php" method="post">
        <!--Input field-->
        <label for="">Full Name<span>*</span></label><br>
        <input type="text" name='Name' placeholder="Full Name" required> <br><br>
        <!--Input Field Closed-->
             <!--Input field-->
             <label for="">Mobile<span>*</span></label><br>
             <input type="+tel" name='Phone' placeholder="Enter Phone Number" required><br><br>
             <!--Input Field Closed-->
                  <!--Input field-->
        <label for="">Quantity<span>*</span></label><br>
        <!-- <input type="text" placeholder="Full Name"> -->
        <select name="Quantity" id="" required>
          <option value="1 - 49 AED">1 - 49 AED</option>
          <option value="2 - 98 AED">2 - 98 AED</option>
          <option value="3 - 147 AED">3 - 147 AED</option>
          <option value="4 - 196 AED">4 - 196 AED</option>
          <option value="5 - 245 AED">5 - 245 AED</option>
        </select>
        <br><br>
        <!--Input Field Closed-->
             <!--Input field-->
             <label for="">Emirates<span>*</span></label><br>
             <!-- <input type="text" placeholder="Full Name"> -->
             <select name="City" id="" aria-placeholder="Select City" required>
              <option value="">Select City*</option>
              <option value="Dubai">Dubai - Free Delivery </option>
              <option value="Abu Dhabi">Abu Dhabi - Free Delivery</option>
              <option value="Sharjah">Sharjah - Free Delivery</option>
              <option value="Ajman">Ajman - Free Delivery</option>
              <option value="Rak">Rak - Free Delivery</option>
              <option value="Fujairah">Fujairah - Free Delivery</option>
              <option value="UAQ">UAQ - Free Delivery</option>
              <option value="Al Ain">Al Ain - Free Delivery</option>
            </select>
             <br><br>
             <!--Input Field Closed-->
                  <!--Input field-->
        <label for="">Delivery Address<span>*</span></label><br>
        <!-- <input type="text" placeholder="Full Name"> -->
        <textarea name="Address" id="" cols="30" rows="5" placeholder="Delivery Address" required></textarea>
        <br><br>

        <input type="hidden" name="Prd_ID" value="<?php  echo $_SESSION['Prd_ID']; ?>">
        <!--Input Field Closed-->
        <button type="submit" name='submit_order'>Submit Order</button>

      </form>
      </div>
    </div>
   <!--Order Description -->
   <div class="orderdescription">
    <div class="des">
      <h4>Description</h4><br>
      <hr size="1"><br>
    <p><?php echo $_SESSION['Description']; ?></p>
    </div>
  </div>
  <br><br>
   <!--Order Description Code Ends-->
   <div class="ourproducts">
    <h3>Other Products</h3>
      <!--productCode Starts-->
     
      <?php
     $query2 = "SELECT * FROM product";
     $query_run2 = mysqli_query($connection, $query2);
            if(mysqli_num_rows($query_run2) > 0)        
            {
                while($row2 = mysqli_fetch_assoc($query_run2))
                {
                    $id = $row2['Product_ID'];
              
                    $query6 = "SELECT Image FROM image WHERE Prd_ID = '$id'";
                    $query_run6 = mysqli_query($connection, $query6);
                    $row6 = mysqli_fetch_assoc($query_run6);
                    $x = $row2['ItemsSold'];
                   ?>
        <a href="order.php?IS=<?php  echo $row2['ItemsSold']; ?>&Image=<?php  echo rawurlencode($row6['Image']); ?>&Name=<?php  echo $row2['Name']; ?>&Description=<?php  echo $row2['Description']; ?>&DS=<?php  echo $row2['DP']; ?>&SP=<?php  echo $row2['SP']; ?>&Prd_ID=<?php  echo $id; ?>&res=<?php  echo $res; ?>" class="productform">
       
        <?php
        if($row2['SP']>0){
        $res = (($row2['SP'] - $row2['DP'])/$row2['SP']) * 100 ;
        }
        ?>
        <input type="hidden" name="res" value="<?php  echo $res; ?>">
            <button>
                <div class="productcard">
                    <div class="offtag"><p><?php echo round($res); ?>% Off</p></div>
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

               <?php
                }}
               ?>
    <!--Product Code Ends-->
           
   </div>
    </div>
  
      <script type="text/javascript">
        $(document).ready(function () {
          $('.leftproductswap .imgswap > img ').click(function () {
            var $smallImages = $(this).attr('src');
            $('.imgbox > img').attr('src', $smallImages);
          });
    
        });
      </script>
</body>
</html>