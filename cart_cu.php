<?php
session_start();
if($_SESSION['ALPHA_ID']="ALPHA_CUSTOMER")
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
 <link href="assets/plugins/fancybox/css/jquery.fancybox.min.css" rel="stylesheet" type="text/css"/>
  <!--Select Plugins-->
  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>
  <!--inputtags-->
  <link href="assets/plugins/inputtags/css/bootstrap-tagsinput.css" rel="stylesheet" />
  <!--multi select-->
  <link href="assets/plugins/jquery-multi-select/multi-select.css" rel="stylesheet" type="text/css">
  <!--Bootstrap Datepicker-->
  <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
  <!--Touchspin-->
  <link href="assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="assets/plugins/notifications/css/lobibox.min.css"/>
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
       <h5 class="logo-text"><?php echo($_SESSION['REG_BY_NAME'])?> customer</h5>
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
      <!-- <li>
        <a href="index.php" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>HOME</span><i class="fa fa-angle-left pull-right"></i>
        </a>
    <ul class="sidebar-submenu">
       <li><a href="index.php"><i class="zmdi zmdi-dot-circle-alt"></i>HOME</a></li>
      <li><a href="c_add.html"><i class="zmdi zmdi-dot-circle-alt"></i>NEW ORDER</a></li>
      <li><a href="aorder.php"><i class="zmdi zmdi-dot-circle-alt"></i>ACTIVE ORDERS</a></li>
      <li><a href="hist.php"><i class="zmdi zmdi-dot-circle-alt"></i>HISTORY</a></li>
          <li><a href="custom.php"><i class="zmdi zmdi-dot-circle-alt"></i>CUSTOMERS</a></li>
           <li><a href="product.php"><i class="zmdi zmdi-dot-circle-alt"></i>ADD/UPDATE PRODUCT</a></li>
      
    </ul>
      </li> -->
      <li>
        <a href="index_cu.php" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>HOME</span><i class="fa fa-angle-left pull-right"></i>
        </a>
    
      </li>
      <li>
        <a href="pro_add_cu.php" class="waves-effect">
          <i class="zmdi zmdi-dot-circle-alt"></i> <span>NEW ORDER</span><i class="fa fa-angle-left pull-right"></i>
        </a>
    
      </li>
     <!--  <li>
        <a href="aorder.php" class="waves-effect">
          <i class="zmdi zmdi-dot-circle-alt"></i> <span>ACTIVE ORDERS</span><i class="fa fa-angle-left pull-right"></i>
        </a>
    
      </li> -->
      <li>
        <a href="hist.php" class="waves-effect">
          <i class="zmdi zmdi-dot-circle-alt"></i> <span>HISTORY</span><i class="fa fa-angle-left pull-right"></i>
        </a>
    <ul class="sidebar-submenu">
    <li><a href="hist_cu.php"><i class="fa fa-inr"></i>ORDER HISTORY</a></li>
  </ul>
       <!--  <li><a href="hist.php"><i class="fa fa-inr"></i>PAYMENT HISTORY</a></li> -->
      </li>
      <li>
        <a href="cs_cu.php" class="waves-effect">
          <i class="zmdi zmdi-dot-circle-alt"></i> <span>CONTACT</span><i class="fa fa-angle-left pull-right"></i>
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
      
    <a href="cart.php"> <button type="button" class="btn btn-white btn-sm btn-round waves-effect waves-light m-1">REFRESH CART </button></a>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
  
    <li class="nav-item">
      <!-- <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="">
       <a href="pro_add.php"> <button type="button" class="btn btn-white btn-sm btn-round waves-effect waves-light m-1"><i class="icon-action-undo icons"></i> PRODUCT LIST</button></a>
      </a> -->
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="">
       <a href="pro_add_cu.php"> <button type="button" class="btn btn-white btn-sm btn-round waves-effect waves-light m-1"><i class="icon-action-undo icons"></i> PRODUCT LIST</button></a>
      </a>
    
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->

	
	
   


  <input type="hidden" value="<?php echo($_SESSION['o_id'])?>" id="orderid">
   <input type="hidden" value="<?php echo($_SESSION['id'])?>" id="c_id">
	
	<div class="row">
   <div class="col-lg-8">

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4 wish-list">

         
<?php
    include 'db.php';
$C=$_SESSION['id'];
$O=$_SESSION['o_id'];
    $sql="SELECT * FROM cart WHERE C_ID='".$C."' AND ORDER_ID='".$O."'";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0)
{
  $count=mysqli_num_rows($result);
  echo ' <h3 class="mb-4">Cart (<span id="cnt">'.$count.'</span> items)</h3>';
  while ($row=mysqli_fetch_assoc($result)) {
    echo '<div class="row mb-4" id="'.$row['ID'].'d">
            <div class="col-md-5 col-lg-3 col-xl-3">
              <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
               <a href="'.$row['P_IMG'].'" id="sx" class="mx-auto" data-fancybox="group2">
                <img class="img-fluid w-100"
                  src="'.$row['P_IMG'].'" alt="Sample">
                </a>
              </div>
            </div>
            <div class="col-md-7 col-lg-9 col-xl-9">
              <div>
                <div class="d-flex justify-content-between">
                  <div>
                    <h4>'.$row['P_NAME'].'</h4>
                    <h5><i class="fa fa-inr"></i> '.$row['PRICE'].'</h5>
                  </div>
                  <div class="btn-group group-round m-1">
                    <div class="def-number-input number-input safari_only mb-0 w-100">
                      <button onclick="min('.$row['ID'].')"
                        class="btn btn-light waves-effect waves-light"><i class="icon-minus icons"></i></button>
                      <input class="quantity" min="0" name="quantity" value="'.$row['QNT'].'" id="'.$row['ID'].'vl" type="number">
                      <button onclick="add('.$row['ID'].')" class="btn btn-light waves-effect waves-light"><i class="icon-plus icons"></i></button>
                      <input type="hidden" value="'.$row['P_ID'].'" id="'.$row['ID'].'pr">
                        
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <button type="button" class="btn btn-primary btn-round waves-effect waves-light m-1" onclick="remv('.$row['ID'].')"><i class="icon-trash icons"></i> REMOVE</button>
                    
                  </div>
                  <p class="mb-0"><span><strong id="summary">Total = <i class="fa fa-inr"></i> '.($row['QNT']*$row['PRICE']).' </strong></span></p class="mb-0">

                </div>
              </div>
            </div>
          </div>
          <hr class="mb-4">';
     }
}
else
{
  echo "no products found";
}
    ?>
          
        
        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
      
      <!-- Card -->

      <!-- Card -->
      
      <!-- Card -->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4">

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-3">The total amount of</h5>

          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              Temporary amount
              <?php
    include 'db.php';
$Cs=$_SESSION['id'];
$Os=$_SESSION['o_id'];
$k=0;
    $sq="SELECT * FROM cart WHERE C_ID='".$Cs."' AND ORDER_ID='".$Os."'";
$resul=mysqli_query($con,$sq);
if(mysqli_num_rows($resul)>0)
{
  while ($ro=mysqli_fetch_assoc($resul)) {
         $k=$k+($ro['QNT']*$ro['PRICE']) ;
     }
   echo ('<span> <i class="fa fa-inr"></i>'.$k.'</span>
            </li>
            
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong>The total amount </strong>
                
              </div>
              <span><strong> <i class="fa fa-inr"></i>'.$k.'</strong></span> <input type="hidden" value="'.$k.'" id="tc_id">');  
}
else
{
  echo "no products found";
}
    ?>
              <!-- span>$25.98</span>
            </li>
            
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong>The total amount </strong>
                
              </div>
              <span><strong>$53.98</strong></span> -->
              <button class="btn btn-success" style="display: none;" onclick="anim5_noti()" id="noti"></button>
            </li>
          </ul>
          <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
  function add(i)
  {
    var p=i+"vl";
    var pr=document.getElementById(i+"pr").value;
  var data = {
                            cmd: 'register',
                            p:i,
                            pr:pr,
                            
                           
                     };
                     $.ajax({
                                type: "POST",
                                url: "add.php",
                                data: data,
                                cache: false,
                                success: function(result)
                                {
                                  if(result=='ok')
                                  {
                                   var ad=document.getElementById(p).value;
                               var ada=parseInt(ad);
                               ada=ada+1;
                                  document.getElementById(p).value=ada;
                                }
                                
                                 else{
                                  swal('SORRY','SERVER ERROR', "error");
                                 }                                    
                                },
                                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error);
                                }
                            });  

  }
  function min(j)
  {
    var pi=j+"vl";
    var ps=document.getElementById(j+"pr").value;
var data = {
                            cmd: 'register',
                            p:j,
                            pr:ps,
                            
                           
                     };
                     $.ajax({
                                type: "POST",
                                url: "min.php",
                                data: data,
                                cache: false,
                                success: function(result)
                                {
                                  if(result=='ok')
                                  {
                                   // swal("Added!","product added continue taking orders and grow your buisness","success");
                                   var md=document.getElementById(pi).value;
                               var mda=parseInt(md);
                               mda=mda-1;
                                  document.getElementById(pi).value=mda;
                               
                                  
                                }
                                
                                 else{
                                  swal('SORRY','SERVER ERROR', "error");
                                 }                                    
                                },
                                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error);
                                }
                            });
  }
  function remv(k)
  {
    var pid=k+"d";
    var as=document.getElementById(k+"pr").value;
    var co=document.getElementById(k+"vl").value;
var data = {
                            cmd: 'register',
                            pid:k,
                            pido:as,
                            c:co,
                            
                           
                     };
                     $.ajax({
                                type: "POST",
                                url: "remv.php",
                                data: data,
                                cache: false,
                                success: function(result)
                                {
                                  if(result=='ok')
                                  {
                                   // swal("Added!","product added continue taking orders and grow your buisness","success");
                                   document.getElementById(pid).innerHTML = "";
                                var cn=document.getElementById("cnt").innerHTML;
                               var cnt=parseInt(cn);
                               cnt=cnt-1;
                                  document.getElementById("cnt").innerHTML=cnt;
                                  
                                }
                                
                                 else{
                                  swal('SORRY','SERVER ERROR', "error");
                                 }                                    
                                },
                                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error);
                                }
                            });
  }
</script>
          <!-- <button type="button" class="btn btn-primary btn-block"></button> -->
<button type="button" class="btn btn-success btn-round btn-block waves-effect waves-light m-1" id="but">Place Order</button>
        </div>
      </div>
      <!-- Card -->
<script type="text/javascript">
   $(document).ready(function() {
      
             $("#but").click(function(e) {
  
    var tcid=document.getElementById("tc_id").value;
    var cid=document.getElementById("c_id").value;
    var oid=document.getElementById("orderid").value;
var data = {
                            cmd: 'register',
                            cid:cid,
                            oid:oid,
                            tcid:tcid,
                            
                           
                     };
                     $.ajax({
                                type: "POST",
                                url: "order.php",
                                data: data,
                                cache: false,
                                success: function(result)
                                {
                                  if(result=='ok')
                                  {
                   // $(#noti).click();
                                   //swal("Added!","product added continue taking orders and grow your buisness","success");
                                   swal({
     title: "Order Saved",
      text: "The order has been placed successfully!",
     type: "success",
    
       //confirmButtonColor: "#00B4B4"
  
  }).then(function() {
    window.location = "index_cu.php";
});
                               
                                  
                                }
                                
                                 else{
                                  swal('SORRY','SERVER ERROR', "error");
                                 }                                    
                                },
                                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error);
                                }
                            });
  });   
                 
                
            });
</script>
      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          

          <div class="collapse" id="collapseExample">
            <div class="mt-3">
              <div class="md-form md-outline mb-0">
                <input type="text" id="discount-code" class="form-control font-weight-light"
                  placeholder="Enter discount code">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Card -->

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

  <!--Bootstrap Touchspin Js-->
    <script src="assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script>
    <script src="assets/plugins/bootstrap-touchspin/js/bootstrap-touchspin-script.js"></script>

    <!--Select Plugins Js-->
    <script src="assets/plugins/select2/js/select2.min.js"></script>
    <!--Inputtags Js-->
    <script src="assets/plugins/inputtags/js/bootstrap-tagsinput.js"></script>
 <script src="assets/plugins/fancybox/js/jquery.fancybox.min.js"></script>
    <!--Bootstrap Datepicker Js-->
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
     <script src="assets/plugins/notifications/js/lobibox.min.js"></script>
  <script src="assets/plugins/notifications/js/notifications.min.js"></script>
  <script src="assets/plugins/notifications/js/notification-custom-script.js"></script>
    <script>
      $('#default-datepicker').datepicker({
        todayHighlight: true
      });
      $('#autoclose-datepicker').datepicker({
        autoclose: true,
        todayHighlight: true
      });

      $('#inline-datepicker').datepicker({
         todayHighlight: true
      });

      $('#dateragne-picker .input-daterange').datepicker({
       });

    </script>

    <!--Multi Select Js-->
    <script src="assets/plugins/jquery-multi-select/jquery.multi-select.js"></script>
    <script src="assets/plugins/jquery-multi-select/jquery.quicksearch.js"></script>
    
    <script>
        $(document).ready(function() {
            $('.single-select').select2();
      
            $('.multiple-select').select2();

        //multiselect start

            $('#my_multi_select1').multiSelect();
            $('#my_multi_select2').multiSelect({
                selectableOptgroup: true
            });

            $('#my_multi_select3').multiSelect({
                selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                afterInit: function (ms) {
                    var that = this,
                        $selectableSearch = that.$selectableUl.prev(),
                        $selectionSearch = that.$selectionUl.prev(),
                        selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                        selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                    that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                        .on('keydown', function (e) {
                            if (e.which === 40) {
                                that.$selectableUl.focus();
                                return false;
                            }
                        });

                    that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                        .on('keydown', function (e) {
                            if (e.which == 40) {
                                that.$selectionUl.focus();
                                return false;
                            }
                        });
                },
                afterSelect: function () {
                    this.qs1.cache();
                    this.qs2.cache();
                },
                afterDeselect: function () {
                    this.qs1.cache();
                    this.qs2.cache();
                }
            });

         $('.custom-header').multiSelect({
              selectableHeader: "<div class='custom-header'>Selectable items</div>",
              selectionHeader: "<div class='custom-header'>Selection items</div>",
              selectableFooter: "<div class='custom-header'>Selectable footer</div>",
              selectionFooter: "<div class='custom-header'>Selection footer</div>"
            });


          });

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
