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
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
  
    <li class="nav-item">
      <a  href="cart_cu.php">
        <button type="button" class="btn btn-white btn-sm btn-round waves-effect waves-light m-1"><i class="icon-handbag icons"></i>VIEW ORDER LIST</button>
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
	 
	</div><!--End Row-->
  <div class="row">
     
    <?php
    include 'db.php';

    $sql="SELECT * FROM product where SID='".$_SESSION['REG_BY']."'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
  while ($row=mysqli_fetch_assoc($result)) {
    # code...
  
  
      
     echo('<div class="col-12 col-sm-8 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img" src="'.$row['IMG'].'" id="'.$row['ID'].'img" height="368" width="523" alt="Vans">
        <div class="card-img-overlay d-flex justify-content-end">
         
        </div>
        <div class="card-body">
          <h4 class="card-title" id="'.$row['ID'].'nm">'.$row['NAME'].'</h4>
          
          <p class="card-text">
            '.$row['DETAILS'].' </p>
            <div class="input-group mb-3">
          <input id="'.$row['ID'].'" type="number" value="1" placeholder="1" class="form-control" >
          </div>
          <div class="buy d-flex justify-content-between align-items-center">
            <div class="price text-success"><h5 class="mt-4"> <i class="fa fa-inr"></i>'.$row['PRICE'].'</h5></div>
             
             <button type="button" class="btn btn-danger waves-effect waves-light m-1" onclick="cart('.$row['ID'].')" > Add to list</button>
          </div>
        </div>
      </div>
    </div>');
    }
}
else
{
  echo "no products found";
}
    ?>
   
    
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
  
   function cart(id)
{
  //alert("hello");
  var pid = id;
  var count=document.getElementById(pid).value;
  var o_id=document.getElementById("orderid").value;
  var c_id=document.getElementById("c_id").value;
//alert(count);
   
    
   
    var data = {
                            cmd: 'register',
                            pid:pid,
                            c:count,
                            o_id:o_id,
                            c_id:c_id,
                           
                     };
                     $.ajax({
                                type: "POST",
                                url: "acart.php",
                                data: data,
                                cache: false,
                                success: function(result)
                                {
                                    const myArr = result.split("@");
                                    //alert(myArr[0]);
                                    if(myArr[0] == 'OKS' )
                                    {
                                       swal({
                    title: "OUT OF STOCK!",
                    text: "Your STOCK : "+myArr[1]+"  Are you sure you want to add?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                  })
                  .then((willDelete) => {
                    if (willDelete) {
                      var data = {
                            cmd: 'register',
                            pid:pid,
                            c:count,
                            o_id:o_id,
                            c_id:c_id,
                           
                     };
                     $.ajax({
                                type: "POST",
                                url: "fcart.php",
                                data: data,
                                cache: false,
                                success: function(result)
                                {
                                  if(result=='ok')
                                  {
                                   swal("Added!","product added continue taking orders and grow ","success");
                               
                                  
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
                     else {
                      swal("Product not added!");
                    }
                  });
                                    }
                                   else if (myArr[0]="O") {
                                      swal("Added!","product added continue taking orders and grow ","success");
                                    }

                                    else
                                    {
                                        swal("Failed!", result, "error");
                                    }
                                                                     
                                },
                                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error);
                                }
                            });
                   
    
}
    
</script>
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

    <!--Bootstrap Datepicker Js-->
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
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
