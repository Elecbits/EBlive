<!doctype html>
<?php

session_start();
include("../../functions/functions.php");

if (!isset($_SESSION['email'])) {
  
echo "<script>window.open('../index.php','_self')</script>";

}

else{


if (isset($_GET['project'])) {


  $proj_id = $_GET['project'];

     $c_email =  $_SESSION['email'];

      global $con;

$comp_req = '';

      $name_query="SELECT * FROM makerclan WHERE email='$c_email' or username = '$c_email'";

      $run_name_query = mysqli_query($con , $name_query);
      
     $row_name_pro = mysqli_fetch_array($run_name_query);
   
        $customer_name = $row_name_pro['name'];
        $m_contact = $row_name_pro['contact'];
        $m_pin = $row_name_pro['pincode'];
        $m_address = $row_name_pro['address'];

        $add_part = explode(",", $m_address);  


 $get_pro="SELECT * FROM project_details where project_id = '$proj_id' ";

$run_pro =mysqli_query($con , $get_pro);

$row_pro=mysqli_fetch_array($run_pro);

  $proj_id= $row_pro['project_id'];
  $proj_title= $row_pro['project_name'];
  $proj_desc= $row_pro['project_desc'];
  $proj_doc= $row_pro['design_doc'];




        


$get_app="SELECT * FROM applied_form where project_id = '$proj_id' AND user = '$c_email' ";

$run_app =mysqli_query($con , $get_app);

$row_app=mysqli_fetch_array($run_app);

 $raw_mat_add= $row_app['raw_mat_add'];
 $pick_up_date= $row_app['pick_up_date'];  
 $add_info= $row_app['add_info'];  
 $max_bid= $row_app['max_bid'];  


$add_inf = explode(",", $add_info);  

 $allot_status= $row_app['allot_status'];     



 
}

?>


<html>
<head>
    <meta charset="utf-8">
    <title>MakerClan Application for <?php echo $proj_title; ?></title>
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
                        
                             <img src="logo1.png" width="200" height="auto"  >
                               

                                                       </td>
                                                        <td >

                                Project #: <?php echo $proj_id;  ?> <br>
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
                                <?php echo $customer_name ; ?><br>
                                <?php echo $m_contact; ?><br>
                                <?php echo $m_address; ?><br>
                                <?php echo $m_pin; ?><br>
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
                              
              
            </tr>
            
            <tr class="item">
              
                
                <td>
                 
                  <span style="font-weight: 700;"> Title </span> : <?php echo $proj_title; ?> <br>
                  <span style="font-weight: 700;"> Description </span> : <?php echo $proj_desc; ?> <br>
                  <span style="font-weight: 700;"> Raw Materials </span> : <?php echo $raw_mat_add; ?> <br>
                  <span style="font-weight: 700;"> Additional Info </span> : <?php echo $add_inf[1]; ?> <br>
                  <span style="font-weight: 700;"> Pick Up date </span> : <?php echo $pick_up_date; ?> <br>
                  <span style="font-weight: 700;"> Your Bid </span> : <?php echo $max_bid; ?> <br>
                  <span style="font-weight: 700;"> Status </span> : <?php echo $allot_status; ?> <br>




                    
                </td>
            </tr>
      
         
            
           
          
       
        </table>
<hr>
<br>
<div >
    
    The signee hereby agrees to the terms and conditions set out in this document. Signed and dated:
<br>
...................................................................................................


<br><?php echo $customer_name; ?> 
<br> <?php  echo date("d-m-Y"); ?>






</div>
</div>

    




<br>






























    </div>
</body>
</html>


<?php

}

?>