<?php



$con= mysqli_connect("localhost","root","","elecbits");

if (mysqli_connect_errno () )
 {
    echo "Connection is not established";
}

//getting the IP address


function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}

//getting the carts

function carts()
{
    if (isset($_GET['add_cart']))
     {
        global $con;

        $pro_id = $_GET['add_cart'];

        $ip = getIp();

        $check_pro = "SELECT * FROM cart WHERE ip_add= '$ip' AND  p_id='$pro_id' ";

        $run_check = mysqli_query($con, $check_pro);

        if ( mysqli_num_rows($run_check) > 0 ) {

        echo "";
            
        }

        else{

            $insert_pro = "INSERT INTO cart (p_id, ip_add) VALUES ('$pro_id','$ip')";


            $run_pro = mysqli_query($con, $insert_pro);
            echo "<script>windows.open('index.php','_self')</script>";

        }

       }

}

//getting the total items

function total_items()
{
    if (isset($_GET['add_cart'])) {

        global $con;

        $count_items = 0;

        $ip = getIp();

        $get_items = "SELECT * FROM cart WHERE ip_add='$ip'";

        $run_items = mysqli_query($con, $get_items);

        $count_items = mysqli_num_rows($run_items);
    }

        else {

            global $con;

        $ip = getIp();

        $get_items = "SELECT * FROM cart WHERE ip_add='$ip'";

        $run_items = mysqli_query($con, $get_items);

        $count_items = mysqli_num_rows($run_items);

        }

        echo $count_items;

    
}

//getting the total price

function total_price()
{
   $total = 0;
   global $con;

   $ip= getIp();

   $sel_price = "SELECT * FROM cart WHERE ip_add='$ip'";

   $run_price = mysqli_query($con, $sel_price);

   while ($p_price = mysqli_fetch_array($run_price)) {

       $pro_id = $p_price['p_id'];

       $pro_price = "SELECT * FROM products WHERE product_id='$pro_id' ";

       $run_pro_price = mysqli_query($con, $pro_price);

       while ($pp_price=mysqli_fetch_array($run_pro_price)) {
           
           $product_price =  array($pp_price['product_price']);

           $values = array_sum($product_price);

           $total += $values;
       }
   }

echo $total;

}

//getting the categories

function getcats()
{
	global $con ;
    
    $get_cats = "select * from categories order by cat_title";
    $run_cats = mysqli_query($con,$get_cats);


    while ($row_cats = mysqli_fetch_array($run_cats) ) 
    {
    	$cat_id = $row_cats['cat_id'];
    	$cat_title = $row_cats['cat_title'];

        
          
        echo "<ul><a href='index.php?cat=$cat_title'>$cat_title</a></ul> ";
         
        

    	
        

    } 

}


//getting the products

function getpro()
{
    if(!isset($_GET['cat'])){

    global $con;

    $get_pro = "SELECT * FROM products ORDER BY RAND() LIMIT 0,6";

    $run_pro = mysqli_query($con, $get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)) 
    {
        $pro_id = $row_pro['product_id'];
        $pro_cat1 = $row_pro['product_cat1'];
        $pro_price = $row_pro['product_price'];

        $pro_title = $row_pro['product_title'];
        $pro_image = $row_pro['product_image'];
        
      echo "
      <div class = col-xs-4>
      <div class='panel panel-default'>
      <div class='panel-body'>
      
       <img src='product_img/$pro_image' width='200' height='180' />

       <div class='panel panel-default'>
      <div class='panel-body'>

      <a href='details.php?pro_id=$pro_id'>
      
      <h4 style='font-family: cursive ';>$pro_title </h4>

      </a>

      <p style='font-weight:900; float:left ; padding-top: 10px;'> ₹ $pro_price</p>

      <a href='index.php?add_cart=$pro_id' style='float:right';> <img src='images/addtocart.png' width='30' height='30' /> </a>

      

      </div>
      </div>
      </div>



      </div>
      </div>

      ";

    }
}


}


//getting the category page



function getcatpro()
{
    if(isset($_GET['cat'])){

        global $con;


        $cat_title = $_GET['cat'];

    $get_cat_pro = "SELECT * FROM products WHERE product_cat1='$cat_title' OR product_cat2='$cat_title' OR product_cat3='$cat_title' OR product_cat4='$cat_title' ";

    $run_cat_pro = mysqli_query($con, $get_cat_pro);

    $count_car = mysqli_num_rows($run_cat_pro);

    if ($count_car == 0) {

        echo '<h3>No product in this category !</h3>';
    }

    while ($row_cat_pro = mysqli_fetch_array($run_cat_pro)) 
    {
        $pro_id = $row_cat_pro['product_id'];
        $pro_cat1 = $row_cat_pro['product_cat1'];
        $pro_price = $row_cat_pro['product_price'];

        $pro_title = $row_cat_pro['product_title'];
        $pro_image = $row_cat_pro['product_image'];
        
      echo "
      <div class = col-xs-4>
      <div class='panel panel-default'>
      <div class='panel-body'>
      
       <img src='admin_area/product_img/$pro_image' width='200' height='180' />

       <div class='panel panel-default'>
      <div class='panel-body'>

      <a href='details.php?pro_id=$pro_id'>
      
      <h4 style='font-family: cursive ';>$pro_title </h4>

      </a>

      <p style='font-weight:900; float:left ; padding-top: 10px;'> ₹ $pro_price</p>

      <a href='index.php?add_cart=$pro_id' style='float:right';> <img src='images/addtocart.png' width='30' height='30' /> </a>

      

      </div>
      </div>
      </div>



      </div>
      </div>

      

      





      ";

    }
}


}


//getting the category count


function getcatprocount()
{
    if(isset($_GET['cat'])){

        global $con;


        $cat_title = $_GET['cat'];

    $get_cat_pro_count = "SELECT * FROM products WHERE product_cat1='$cat_title' OR product_cat2='$cat_title' OR product_cat3='$cat_title' OR product_cat4='$cat_title' ";

    $run_cat_pro_count = mysqli_query($con, $get_cat_pro_count);

    $count_car_count = mysqli_num_rows($run_cat_pro_count);

    if ($count_car_count != 0) {

        echo " Number of product in this category:  $count_car_count ";
    }

    

}

}

?>
