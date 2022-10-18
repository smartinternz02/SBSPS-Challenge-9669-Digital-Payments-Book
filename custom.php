<?php
session_start();
if($_SESSION['ALPHA_ID']="ALPHA_CHECKED")
{
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Stock Manager</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">
 <!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.php">
       <img src="logo.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Store Admin</h5>
     </a>
   </div>
   <div class="user-details">
    <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
      <div class="avatar"></div>
       <div class="media-body">
       <h6 class="side-user-name"><?php echo($_SESSION['name'])?></h6>
      </div>
       </div>
     
      </div>
   <ul class="sidebar-menu">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="index1.php" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>HOME</span><i class="fa fa-angle-left pull-right"></i>
        </a>
    
      </li>
      <li>
        <a href="c_add.html" class="waves-effect">
          <i class="zmdi zmdi-dot-circle-alt"></i> <span>NEW ORDER</span><i class="fa fa-angle-left pull-right"></i>
        </a>
    
      </li>
      <li>
        <a href="aorder.php" class="waves-effect">
          <i class="zmdi zmdi-dot-circle-alt"></i> <span>ACTIVE ORDERS</span><i class="fa fa-angle-left pull-right"></i>
        </a>
    
      </li>
      <li>
        <a href="hist.php" class="waves-effect">
          <i class="zmdi zmdi-dot-circle-alt"></i> <span>HISTORY</span><i class="fa fa-angle-left pull-right"></i>
        </a>
    
      </li>
      <li>
        <a href="custom.php" class="waves-effect">
          <i class="zmdi zmdi-dot-circle-alt"></i> <span>CUSTOMERS</span><i class="fa fa-angle-left pull-right"></i>
        </a>
    
      </li>
      <li>
        <a href="product.php" class="waves-effect">
          <i class="zmdi zmdi-dot-circle-alt"></i> <span>ADD/UPDATE PRODUCT</span><i class="fa fa-angle-left pull-right"></i>
        </a>
    
      </li>
       <li>
        <a href="SCD.php" class="waves-effect">
          <i class="zmdi zmdi-dot-circle-alt"></i> <span>SUPPORT CUSTOMER</span><i class="fa fa-angle-left pull-right"></i>
        </a>
    
      </li>
     
    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
  
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://cdn-icons-png.flaticon.com/512/2922/2922506.png" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://cdn-icons-png.flaticon.com/512/2922/2922506.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"><?php echo($_SESSION['name'])?></h6>
            
            </div>
           </div>
          </a>
        </li>
        
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--End Row-->
<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Data Exporting</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                      <th>Id</th>
                        <th>Customer Name</th>
                        
                        <th>Date_time</th>
                        <th>Order history</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php
    include 'db.php';

    $sql="SELECT * FROM users WHERE REG_BY='".$_SESSION['ID']."' ORDER BY ID DESC";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
  while ($row=mysqli_fetch_assoc($result)) {
  echo('<tr>         
                    
                    <td>'.$row['ID'].'</td>
                    <td>'.$row['NAME'].'</td>
                    <td>'.$row['DATE_TIME'].'</td>');
  


                   echo(' 
                     <td><button type="button" class="btn btn-white btn-sm btn-round waves-effect waves-light m-1" data-toggle="modal" data-target="#LARGE'.$row['ID'].'"><i class="icon-handbag icons"></i>VIEW ORDER</button>
                     <div class="modal fade" id="LARGE'.$row['ID'].'">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Your modal title here</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">

        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> ORDER data</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Order id</th>
                        <th>Total Price</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                ');
                    
                    $ds=$row['ID'];
$sqla="SELECT * FROM cart WHERE  C_ID='$ds' ORDER BY DATE_TIME DESC ";
                            
                            $resu=mysqli_query($con,$sqla);
                      if(mysqli_num_rows($resu)>0)
                                    {
                                     
                                            while($rowp= mysqli_fetch_assoc($resu))
                                            {

                    echo ('<tr>
                        <td>'.$rowp["P_NAME"].'</td>
                        <td><i class="fa fa-inr"></i> '.$rowp["PRICE"].'</td>
                        <td>'.$rowp["QNT"].'</td>
                        <td>'.$rowp["ORDER_ID"].'</td>
                        <td><i class="fa fa-inr"></i> '.($rowp["QNT"]*$rowp["PRICE"]).'</td>
                        
                        
                    </tr>');
                   }
                 }
                 else
                 {
                   echo ('<td>No order found</td>');
                 }
               

                    echo ('
                      </tbody>
                <tfoot>
                    <tr>
                       <th>Product name</th>
                       <th>Price</th>
                        <th>Quantity</th>
                        <th>Order id</th>
                        <th>Total Price</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        
                      </div>
                    </div>
                  </div>
                </div>
                     </td>
                   </tr>');
    }
}
else
{
  echo "no Orders found";
}
    ?>
                    </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Customer Name</th>
                        
                        <th>Date_time</th>
                        <th>Order history</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>

      <!--End Dashboard Content-->
    <!--start overlay-->
    <div class="overlay toggle-menu"></div>
  <!--end overlay-->
  
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
  
  <!--Start footer-->
  <footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2021 Thunderslash Admin
        </div>
      </div>
    </footer>
  <!--End footer-->
  
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
    <li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
   <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>

  <!--Data Tables js-->
  <script src="assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>
  
</body>
</html>
<?php
}
else
{
  echo ('<script>location.href = "pages-404.html";</script>');
}

  ?>