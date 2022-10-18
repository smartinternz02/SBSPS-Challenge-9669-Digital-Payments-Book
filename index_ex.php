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
       <h6 class="side-user-name">PRASANT NAG</h6>
      </div>
       </div>
     
      </div>
   <ul class="sidebar-menu">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="index.php" class="waves-effect">
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
            <h6 class="mt-2 user-title">Prasanta Nag</h6>
            
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

      <!--Start Dashboard Content-->

	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <?php
    include 'db.php';

    $sql="SELECT * FROM orde_r ";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
  $count=mysqli_num_rows($result);
  echo ('<h5 class="text-white mb-0">'.$count.'<span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5><div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:'.$count.'"></div>
                    </div><p class="mb-0 text-white small-font">Total Orders<span class="float-right">+'.$count.'% <i class="zmdi zmdi-long-arrow-up"></i></span>');
  }
else
{
  echo ('<h5 class="text-white mb-0">0<span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5><div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:0%"></div>
                    </div><p class="mb-0 text-white small-font">Total Orders<span class="float-right">+0% <i class="zmdi zmdi-long-arrow-up"></i></span>');
}
?>
                  
                    
                  </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                                   <?php
    include 'db.php';

    $sql="SELECT * FROM cart ";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
  //$count=mysqli_num_rows($result);
  $K=0;
  while ($row=mysqli_fetch_assoc($result))  {
$K=$K+($row['PRICE']*$row['QNT']);
    # code...
  }
  echo ('<h5 class="text-white mb-0">'.$K.'<span class="float-right"><i class="fa fa-inr"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:'.$K.'%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Total Revenue<span class="float-right">+'.$K.'% <i class="zmdi zmdi-long-arrow-up"></i></span>');
  }
else
{
  echo ('<h5 class="text-white mb-0">0<span class="float-right"><i class="fa fa-inr"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:0%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Total Revenue<span class="float-right">+0% <i class="zmdi zmdi-long-arrow-up"></i></span>');
}
?>
                  </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <?php
    include 'db.php';

    $sql="SELECT * FROM customer ";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
  $coun=mysqli_num_rows($result);
  echo ('<h5 class="text-white mb-0">'.$coun.'<span class="float-right"><i class="fa fa-eye"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:'.$coun.'%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Customers<span class="float-right">+'.$coun.'% <i class="zmdi zmdi-long-arrow-up"></i></span></p>');
   }
else
{
  echo ('<h5 class="text-white mb-0">0<span class="float-right"><i class="fa fa-eye"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:0%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Customers<span class="float-right">+0% <i class="zmdi zmdi-long-arrow-up"></i></span></p>');
}
?>
                  
                </div>
            </div>
            
        </div>
    </div>
 </div>  
	  
	
	
   


  
	
	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Recent Order Tables
		  <div class="card-action">
             
             </div>
		 </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>ID</th>
                     <th>ORDER ID</th>
                     <th>CUSTOMER ID</th>
                     <th>CUSTOMER NAME</th>
                     <th>Date</th>
                     <th>VIEW ORDER</th>
                   </tr>
                   </thead>
                   <tbody>
                     <?php
    include 'db.php';

    $sql="SELECT * FROM orde_r WHERE ACTIVE=1 ORDER BY DATE_TIME DESC";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
  while ($row=mysqli_fetch_assoc($result)) {
  echo('<tr>
                    <td>'.$row['ID'].'</td>
                    <td>'.$row['ORDER_ID'].'</td>
                    <td>'.$row['C_ID'].'</td>');
  $s=$row['C_ID'];
  $sl="SELECT * FROM customer WHERE ID='".$s."'";
$resul=mysqli_query($con,$sl);
if(mysqli_num_rows($resul)>0)
{
  while ($ro=mysqli_fetch_assoc($resul)) {
                    echo('<td>'.$ro['NAME'].'</td>');
                    }
}


                   echo(' <td>'.$row['DATE_TIME'].'</td>
                     <td><button type="button" class="btn btn-white btn-sm btn-round waves-effect waves-light m-1" data-toggle="modal" data-target="#LARGE'.$row['ORDER_ID'].'"><i class="icon-handbag icons"></i>VIEW ORDER</button>
                     <div class="modal fade" id="LARGE'.$row['ORDER_ID'].'">
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
                        <th>Quantity</th>
                        <th>Order id</th>
                        <th>Total Price</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                ');
                    $Z=$row["ORDER_ID"];
                    $ds=$row['C_ID'];
$sqla="SELECT * FROM cart WHERE  ORDER_ID='$Z' ORDER BY DATE_TIME DESC ";
                            
                            $resu=mysqli_query($con,$sqla);
                      if(mysqli_num_rows($resu)>0)
                                    {
                                     
                                            while($rowp= mysqli_fetch_assoc($resu))
                                            {

                    echo ('<tr>
                        <td>'.$rowp["P_NAME"].'</td>
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
                    

                   <!-- <tr>
                    <td>Earphone GL</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405820</td>
                    <td>$ 1500.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 60%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>HD Hand Camera</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405830</td>
                    <td>$ 1400.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 70%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Clasic Shoes</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405825</td>
                    <td>$ 1200.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 100%"></div>
                        </div></td>
                   </tr>

                   <tr>
                    <td>Hand Watch</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405840</td>
                    <td>$ 1800.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 40%"></div>
                        </div></td>
                   </tr>
				   
				   <tr>
                    <td>Clasic Shoes</td>
                    <td><img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                    <td>#9405825</td>
                    <td>$ 1200.00</td>
                    <td>03 Aug 2017</td>
					<td><div class="progress shadow" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 100%"></div>
                        </div></td>
                   </tr> -->

                 </tbody></table>
               </div>
	   </div>
	 </div>
	</div><!--End Row-->

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
