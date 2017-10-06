<!doctype html>

<?php

include("include/db.php");

if ($_POST['pass'] !='gtbit@1216') {

    
    echo "<script>alert('Password is wrong')</script>"; 
    echo "<script>windows.open('create_invoice.php','_self');</script>";

    die();
}

else


$invoice_no = $_POST['inv1'];


$email = $_POST['c_mail'];

$discount = $_POST['disc'];

$total= $_POST['Price1'] + $_POST['Price2'] + $_POST['Price3'] + $_POST['Price4'] + $_POST['Price5'] + $_POST['Price6'] + $_POST['Price7'] + $_POST['Price8'] +$_POST['Price9'] + $_POST['Price10'];

if ($total == 0) {
    $total = 0;
}
$real_total = ($discount/100)* $total;

$total_comb = $total - $real_total;

$c_name = $_POST['c_name'];
$disc = $_POST['disc'];
$address =$_POST['c_address'];
$phone =  $_POST['c_phone'];

$Item1 = $_POST['Item1'];
$Item2 = $_POST['Item2'];
$Item3 = $_POST['Item3'];
$Item4 = $_POST['Item4'];
$Item5 = $_POST['Item5'];
$Item6 = $_POST['Item6'];
$Item7 = $_POST['Item7'];
$Item8 = $_POST['Item8'];
$Item9 = $_POST['Item9'];
$Item10 = $_POST['Item10'];
$items_comb = "$Item1|$Item2|$Item3|$Item4|$Item5|$Item6|$Item7|$Item8|$Item9|$Item10";

$Price1 = $_POST['Price1'];
$Price2 = $_POST['Price2'];
$Price3 = $_POST['Price3'];
$Price4 = $_POST['Price4'];
$Price5 = $_POST['Price5'];
$Price6 = $_POST['Price6'];
$Price7 = $_POST['Price7'];
$Price8 = $_POST['Price8'];
$Price9 = $_POST['Price9'];
$Price10 = $_POST['Price10'];
$prices_comb= "$Price1|$Price2|$Price3|$Price4|$Price5|$Price6|$Price7|$Price8|$Price9|$Price10";

$msg = "$c_name,  $email,  $discount, $total_comb,($Item1 = $Price1) , ($Item2 = $Price2) , ($Item3 = $Price3) , ($Item4 = $Price4) , ($Item5 = $Price5) , ($Item6 = $Price6) , ($Item7 = $Price7) , ($Item8 = $Price8) , ($Item9 = $Price9) , ($Item10 = $Price10) 
 ";

 $from= "from: Invoice_Elecbits@elecbits.in";


if( mail("saurav.rav67@gmail.com", "Invoice", $msg, $from) && mail("elecbits16@gmail.com", "Invoice", $msg, $from) ) 
    {  

      $insert_data = "INSERT into invoice (invoice_no, c_name, c_mail, c_address, c_phone, items, prices, disc, total) VALUES ('$invoice_no', '$c_name','$email','$address','$phone','$items_comb', '$prices_comb', '$discount', '$total_comb')";


if (mysqli_query($con , $insert_data)) {
   
    echo "<script>alert('Product has been added')</script>";
   
} else {
    echo "Error: " . $insert_data . "<br>" . mysqli_error($con);
}
       echo "<script>alert('Your response has been added. Your response is important to us.')</script>";  
    }  








?>
<html>
<head>
    <meta charset="utf-8">
    <title>Elecbits Invoice</title>
   <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
    <style>
    .invoice-box{
        max-width:800px;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
       font-family: 'Nunito Sans', sans-serif;
        color:#555;
    }
    
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;

    }
    
    .invoice-box table td{
        padding:5px;
        vertical-align:top;

    }
    
    .invoice-box table tr td:nth-child(2){
        text-align:right;
    }
    
    .invoice-box table tr.top table td{
        padding-bottom:2px;
    }
    
    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }
    
    .invoice-box table tr.information table td{
        padding-bottom:2px;
    }
    
    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }
    
    .invoice-box table tr.details td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }
    
    .invoice-box table tr.item.last td{
        border-bottom:none;
    }
    
    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
        
        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
    </style>
</head>

<body >
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top" >
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                        
                             <img src="../images/ty3.jpg"  >
                               

                                                       </td>
                                                        <td >

                                Invoice #: <?php echo $_POST['inv1'];  ?> <br>
                                Created: <?php  echo date("d-m-Y");  ?>
                               
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information" >
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                               <img src="../images/logo1.png" ><br>
                                Dwarka Mor,<br>
                                New Delhi
                            </td>
                                                        <td>
                                <?php echo $_POST['c_name']; ?><br>
                                <?php echo $_POST['c_phone']; ?><br>
                                <?php echo $_POST['c_mail']; ?><br>
                                <?php echo $_POST['c_address']; ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <br>
                  <tr class="heading">
                <td>
                    Item/Description
                </td>
                
                <td>
                    Price
                </td>
            </tr>
            
            <tr class="item">
                <td>
                 <?php echo $_POST['Item1']; ?>   
                </td>
                
                <td>
                     <?php
                if ($Price1 == '') {
                  echo "<br>";
                }

                else

                echo "₹";echo $_POST['Price1'];



                 ?> 
                </td>
            </tr>
             <tr class="item">
                <td>
                     <?php echo $_POST['Item2']; ?> 
                </td>
                
                <td>
                    <?php
                if ($Price2 == '') {
                  echo "<br>";
                }

                else

                echo "₹";echo $_POST['Price2'];



                 ?> 
                </td>
            </tr>
             <tr class="item">
                <td>
                     <?php echo $_POST['Item3']; ?> 
                </td>
                
                <td>
                <?php
                if ($Price3 == '') {
                  echo "<br>";
                }

                else

                echo "₹";echo $_POST['Price3'];



                 ?> 
                </td>
            </tr>
             <tr class="item">
                <td>
                 <?php echo $_POST['Item4']; ?> 
                    
                </td>
                
                <td>
                     <?php
                if ($Price4 == '') {
                  echo "<br>";
                }

                else

                echo "₹";echo $_POST['Price4'];



                 ?> 
                </td>
            </tr>
             <tr class="item">
                <td>
                    <?php echo $_POST['Item5']; ?> 
                </td>
                
                <td>
                      <?php
                if ($Price5 == '') {
                  echo "<br>";
                }

                else

                echo "₹";echo $_POST['Price5'];



                 ?> 
                </td>
            </tr>
             <tr class="item">
                <td>
                      <?php echo $_POST['Item6']; ?> 
                </td>
                
                <td>
                     <?php
                if ($Price6 == '') {
                  echo "<br>";
                }

                else

                echo "₹";echo $_POST['Price6'];



                 ?> 
                </td>
            </tr>
             <tr class="item">
                <td>
                 <?php echo $_POST['Item7']; ?> 
                </td>
                
                <td>
                    <?php
                if ($Price7 == '') {
                  echo "<br>";
                }

                else

                echo "₹";echo $_POST['Price7'];



                 ?>  
                </td>
            </tr>
         <tr class="item">
                <td>
                      <?php echo $_POST['Item8']; ?> 
                </td>
                
                <td>
                      <?php
                if ($Price8 == '') {
                  echo "<br>";
                }

                else

                echo "₹";echo $_POST['Price8'];



                 ?>  
                </td>
            </tr>
             <tr class="item">
                <td>
                      <?php echo $_POST['Item9']; ?> 
                </td>
                
                <td>
                       <?php
                if ($Price9 == '') {
                  echo "<br>";
                }

                else

                echo "₹";echo $_POST['Price9'];



                 ?> 
                </td>
            </tr>
       <!--          <tr class="item">
                <td>
                      <?php echo $_POST['Item10']; ?> 
                </td>
                
                <td>
                       <?php
                if ($Price10 == '') {
                  echo "<br>";
                }

                else

                echo "₹";echo $_POST['Price10'];



                 ?>  
                </td>
            </tr>-->
            
           
            <tr class="total">
                <td>Discount</td>
                
                <td>
                 <?php  echo $_POST['disc']; ?> %
                </td>
            </tr>
           
            
            <tr class="total">
                <td></td>
                
                <td> 
                   Total: ₹ <?php echo $total -  $real_total; ?>
                 </td>
            </tr>
        </table>
<hr>
<br>
<div >
    
    The signee hereby agrees to the terms and conditions set out in this document. Signed and dated:
<br>
...................................................................................................


<br><?php echo $_POST['c_name']; ?> 
<br> <?php  echo date("d-m-Y"); ?>






</div>
</div>

    




<br>

<div class="container" style="font-family: 'Nunito Sans', sans-serif;" >
<img src="../images/ty4.jpg">
<br>
<span style="font-size: 12px; padding-left: 50px;"><?php echo $total_comb; ?><br>  </span>
<span style="font-size: 12px; padding-left: 50px;">SHIP TO: [<?php echo $_POST['inv1'];  ?>]</span>
<div style="font-size: 12px; padding-left:  50px;" ><?php echo $_POST['c_name']; ?> ( <?php echo $_POST['c_phone']; ?>)<br>
 <?php echo $_POST['c_address']; ?>
</div>
<img src="../images/ty2.jpg">    
</div>































    </div>
</body>
</html>
