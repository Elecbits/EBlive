<!DOCTYPE html>

<?php

session_start();
include("../functions/functions.php");

if (!isset($_SESSION['customer_email'])) {
  
echo "<script>window.open('checkout.php','_self')</script>";

}

else{



?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Elecbits Customer account</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
 <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================

-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="account.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>ELEC</b>X</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Elec</b>BITS</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
 
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
  
          <!-- Tasks Menu -->
     
          <!-- User Account Menu -->
            <?php


            $c_email =  $_SESSION['customer_email'];

      global $con;
      $name_query="SELECT * FROM learn WHERE customer_email='$c_email'";

      $run_name_query = mysqli_query($con, $name_query);
      
      while ($row_name_pro = mysqli_fetch_array($run_name_query)) 
    {
        $customer_name = $row_name_pro['customer_name'];
     


            ?>



          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

            <i class="fa fa-user" aria-hidden="true"></i>
              <!-- The user image in the navbar-->
            
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><strong>Welcome <?php echo $customer_name; ?></strong></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->

              <li class="user-header">
                <img src="images/user2.png" class="img-circle" alt="User Image">
              <p><?php echo $customer_name; ?></p>

              </li>
              <!-- Menu Body -->

             
              <!-- Menu Footer-->
             <!-- <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Edit Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>-->
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Hi <?php echo $customer_name; ?></p>
          <!-- Status -->
          <a ><i class="fa fa-circle text-success"></i></a>
          How's your day ?
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
       
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">Customer Panel</li>
        <!-- Optionally, you can add icons to the links -->
   
        <li class="active"><a href="account.php?my_orders"><i class="fa fa-cart-arrow-down"></i> <span>My orders</span></a></li>
         <li ><a href="account.php?edit_account"><i class=" fa fa-user"></i> <span>Edit profile</span></a></li>
            <li><a href="account.php?change_pass"><i class="fa fa-user-secret"></i> <span>Change password</span></a></li>
         <li><a href="index.php"><i class="fa fa-cart-plus"></i> <span>Continue Shopping</span></a></li>
            <li><a href="customer/logout.php"><i class="fa  fa-power-off"></i> <span>Logout</span></a></li>
         
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Hey <?php echo $customer_name; ?>,<br>
     
      </h1>

         <strong> Welcome to Elecbits. Select options from the left panel.  </strong>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
    



<?php


      if (isset($_GET['my_orders'])) {
  
  include("../customer/my_orders.php");
}

if (isset($_GET['edit_account'])) {
  
  include("../customer/edit_account.php");
}

if (isset($_GET['change_pass'])) {
  
  include("../customer/change_pass.php");
}







?>




    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
     <div class="pull-right hidden-xs">
     <i>Elec</i>X
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Elecbits</a>.</strong> All rights reserved.
   
  </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
 
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
<?php

}}
?>