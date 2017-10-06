<!doctype html>

<?php

include("include/db.php");

if (isset($_GET['print_pro'])){

$invoice_no = $_GET['print_pro'];

}


$invoice_query = "SELECT * FROM invoice where invoice_no = '$invoice_no'";

$run_invoice_query = mysqli_query( $con , $invoice_query);

$row_invoice_query = mysqli_fetch_array($run_invoice_query);

$invoice_no = $row_invoice_query['invoice_no'];
$c_name = $row_invoice_query['c_name'];
$c_mail = $row_invoice_query['c_mail'];
$c_address = $row_invoice_query['c_address'];
$c_phone = $row_invoice_query['c_phone'];
$items_comb = $row_invoice_query['items'];
$prices_comb = $row_invoice_query['prices'];
$discount = $row_invoice_query['disc'];
$total_comb = $row_invoice_query['total'];

$broken_items = explode("|", $items_comb);

$broken_prices = explode("|", $prices_comb);

$Item1 = $broken_items[0];
$Item2 = $broken_items[1];
$Item3 = $broken_items[2];
$Item4 = $broken_items[3];
$Item5 = $broken_items[4];
$Item6 = $broken_items[5];
$Item7 = $broken_items[6];
$Item8 = $broken_items[7];
$Item9 = $broken_items[8];
$Item10 = $broken_items[9];


$Price1 = $broken_prices[0];
$Price2 = $broken_prices[1];
$Price3 = $broken_prices[2];
$Price4 = $broken_prices[3];
$Price5 = $broken_prices[4];
$Price6 = $broken_prices[5];
$Price7 = $broken_prices[6];
$Price8 = $broken_prices[7];
$Price9 = $broken_prices[8];
$Price10 = $broken_prices[9];


/*$msg = "$c_name,  $c_mail, $c_phone , $discount, $total_comb,($Item1 = $Price1) , ($Item2 = $Price2) , ($Item3 = $Price3) , ($Item4 = $Price4) , ($Item5 = $Price5) , ($Item6 = $Price6) , ($Item7 = $Price7) , ($Item8 = $Price8) , ($Item9 = $Price9) , ($Item10 = $Price10) 
 ";

 $from= "from: Invoice_Elecbits@elecbits.in";


if( mail("saurav.rav67@gmail.com", "Invoice", $msg, $from) && mail("elecbits16@gmail.com", "Invoice", $msg, $from) ) 
      {  
          echo "<script>alert('Your response has been added. Your response is important to us.')</script>";  
   }  

*/



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
                                Invoice #: <?php echo $invoice_no;  ?> <br>
                                Created: <?php  echo date("d-m-Y");  ?>
                               
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                               <img src="../images/logo1.png" ><br>
                                Dwarka Mor,<br>
                                New Delhi
                            </td>
                                                        <td>
                                <?php echo $c_name; ?><br>
                                <?php echo $c_phone; ?><br>
                                <?php echo $c_mail ?><br>
                                <?php echo $c_address; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
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
                 <?php echo $Item1; ?>   
                </td>
                
                <td>
                     <?php
                if ($Price1 == '') {
                  echo "<br>";
                }

                else

                echo "₹";echo $Price1;



                 ?> 
                </td>
            </tr>
             <tr class="item">
                <td>
                     <?php echo $Item2; ?> 
                </td>
                
                <td>
                    <?php
                if ($Price2 == '') {
                  echo "<br>";
                }

                else

                echo "₹";echo $Price2;



                 ?> 
                </td>
            </tr>
             <tr class="item">
                <td>
                     <?php echo $Item3; ?> 
                </td>
                
                <td>
                <?php
                if ($Price3 == '') {
                  echo "<br>";
                }

                else

                echo "₹";echo $Price3;



                 ?> 
                </td>
            </tr>
             <tr class="item">
                <td>
                 <?php echo $Item4; ?> 
                    
                </td>
                
                <td>
                     <?php
                if ($Price4 == '') {
                  echo "<br>";
                }

                else

                echo "₹";echo $Price4;



                 ?> 
                </td>
            </tr>
             <tr class="item">
                <td>
                    <?php echo $Item5; ?> 
                </td>
                
                <td>
                      <?php
                if ($Price5 == '') {
                  echo "<br>";
                }

                else

                echo "₹";echo $Price5;



                 ?> 
                </td>
            </tr>
             <tr class="item">
                <td>
                      <?php echo $Item6; ?> 
                </td>
                
                <td>
                     <?php
                if ($Price6 == '') {
                  echo "<br>";
                }

                else

                echo "₹";echo $Price6;



                 ?> 
                </td>
            </tr>
             <tr class="item">
                <td>
                 <?php echo $Item7; ?> 
                </td>
                
                <td>
                    <?php
                if ($Price7 == '') {
                  echo "<br>";
                }

                else

                echo "₹";echo $Price7;



                 ?>  
                </td>
            </tr>
          <tr class="item">
                <td>
                      <?php echo $Item8; ?> 
                </td>
                
                <td>
                      <?php
                if ($Price8 == '') {
                  echo "<br>";
                }

                else

                echo "₹";echo $Price8;



                 ?>  
                </td>
            </tr>
            <!--    <tr class="item">
                <td>
                      <?php echo $Item9; ?> 
                </td>
                
                <td>
                       <?php
                if ($Price9 == '') {
                  echo "<br>";
                }

                else

                echo "₹";echo $Price9;



                 ?> 
                </td>
            </tr>
             <tr class="item">
                <td>
                      <?php echo $Item10; ?> 
                </td>
                
                <td>
                       <?php
                if ($Price10 == '') {
                  echo "<br>";
                }

                else

                echo "₹";echo $Price10;



                 ?>  
                </td>
            </tr>-->
            
           
            <tr class="total">
                <td>Discount</td>
                
                <td>
                 <?php  echo $discount; ?> %
                </td>
            </tr>
           
            
            <tr class="total">
                <td></td>
                
                <td> 
                   Total: ₹ <?php echo $total_comb; ?>
                 </td>
            </tr>
        </table>
<hr>
<br>
<div>
    
    The signee hereby agrees to the terms and conditions set out in this document. Signed and dated:
<br>
<br>
...................................................................................................
<br><?php echo $c_name; ?>                                 
<br><?php  echo date("d-m-Y"); ?>
</div>

    </div>


    
<br>

<div class="container" style="font-family: 'Nunito Sans', sans-serif;" >
<img src="../images/ty4.jpg">
<br>
<span style="font-size: 12px; padding-left: 50px;"><?php echo $total_comb; ?><br>  </span>
<span style="font-size: 12px; padding-left: 50px;"> SHIP TO: [<?php  echo $invoice_no; ?>]</span>
<div style="font-size: 12px; padding-left:  50px;" ><?php echo $c_name; ?> (<?php echo $c_phone; ?>)<br>
<?php echo $c_address; ?>
</div>
<img src="../images/ty2.jpg">    
</div>



</body>
</html>
