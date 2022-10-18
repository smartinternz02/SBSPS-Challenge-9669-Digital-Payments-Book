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
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="CART.php">
        <a href="product.php"><button type="button" class="btn btn-white btn-sm btn-round waves-effect waves-light m-1"><i class="icon-action-undo icons"></i>Back</button></a>
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

	
	
   

<br>
<br>
  <input type="hidden" value="<?php echo($_SESSION['o_id'])?>" id="orderid">
   <input type="hidden" value="<?php echo($_SESSION['id'])?>" id="c_id">
	
	<!--End Row-->
  <div class="row">
     
    <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="tform" novalidate="novalidate">
                
                <h4 class="form-header">
                <i class="fa fa-file-text-o"></i>
               NEW CUSTOMER
                </h4>
                <div class="form-group row">
                  <label for="input-5" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-5" name="pname" required="">
                  </div>
                </div>
                
                
                <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">EMAIL</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="input-5" name="email" required="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-9" class="col-sm-2 col-form-label">Phone no</label>
                  <div class="col-sm-10">
                   <input type="number" class="form-control" id="input-5" name="phn" required="">
                  </div>
                </div>
                <!-- <div class="form-group row">
                  <label for="input-9" class="col-sm-2 col-form-label">Stock</label>
                  <div class="col-sm-10">
                   <input type="number" class="form-control" id="input-5" name="stock" required="">
                  </div>
                </div> -->
               <!--  <div class="form-group row">
                  <label for="input-9" class="col-sm-2 col-form-label"> comment</label>
                  <div class="col-sm-10">
                   <input type="text" class="form-control" id="input-5" name="detail" required="">
                  </div>
                </div> -->
                <div class="form-footer">
                   <a href="product.php"> <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button></a>
                    <button type="submit" class="btn btn-success" id="plasma"><i class="fa fa-check-square-o"></i> SAVE</button>
                </div>
              </form>
            </div>
          </div>
        </div>
   
    
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
     $("#plasma").click(function(e){
      e.preventDefault();

      let myForm =$('#tform')[0]; 
      var data = new FormData(myForm);
       data.append("cmd", "register");
       
      
      

         $.ajax({
           type: "POST",
           url: "CONTS.php",
           data: data, // serializes the form's elements.
           processData: false,
           contentType: false,
           success: function(result)
           {
            if(result == 'OK' )
            {
              // show response from the php script.
             //console.log(dat);
             swal(result, "PRODUCT ADDED", "success");
            }
            else
             {
               swal(result, "seems sever error", "error");
              }
                                                                     
              },
              error: function (request, error) {
                                    
                    alert(" Can't do because: " + error);
               }
         });

                                                 
                                                  });
                                                  });
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