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
       <a  href="newcu.php"><button type="button" class="btn btn-white btn-sm btn-round waves-effect waves-light m-1" >New Customer</button></a>
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
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

    <!--  --><?php include "db.php";include_once "header.php"; ?>
    <div class="wrapper">
<section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($con, $_GET['user_id']);
          $DFN=$_GET['nms'];
          $sql = mysqli_query($con, "SELECT * FROM users WHERE ID = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        <a class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="man.png" id="fimg" alt="">
        <p style="color: black;"><?php echo($DFN);?></p>
        <div class="details">
          <span><?php echo ($DFN); ?></span>
         <!--  <p><?php //echo $row['QUOTE']; ?></p> -->
        </div>
      </header>
      <div class="chat-box" id="ch_masg" style="background: #1588be;">
        <!-- OUTGOING -->

  <?php
    $ql="SELECT * FROM chat_message WHERE (INCOMING_UID='".$user_id."' AND OUTGOING_UID='".$_SESSION['ID']."')OR(INCOMING_UID='".$_SESSION['ID']."' AND OUTGOING_UID='".$user_id."') ";
            

              if($query_run=mysqli_query($con,$ql))
              {
            
                  //$query_run=mysqli_query($con,$ql);
                  $count=mysqli_num_rows($query_run);
                  if($count>0)
                  {
                        while($res= mysqli_fetch_assoc($query_run))
                        {
                          //$res=array();
                if ($res["INCOMING_UID"]==$user_id) {
echo ('<div class="chat incoming">
                                 <img src="man.png" alt="">
                                <div class="details">
                                    <p>'.base64_decode($res["MESSAGE"]).'</p>
                                    <h6>'.$res["TIME_STAMP"].'</h6>
                                </div>
                                
                                </div>');
                  # code...
                }
                else
                {
                  echo ('<div class="chat outgoing">
                               
                                <div class="details">
                                    <p>'.base64_decode($res["MESSAGE"]).'</p>
                                  <h6> '.$res["TIME_STAMP"].' </h6>
                                </div>
                                
                                </div>');
                }
               
                               //$row["INCOMING_UID"];
                               
                                
                        }
            
                  }
                  else
                  {
                        //echo "error in registration 1";
                       echo("");


                  }
            }
              else
              {
                echo("SERVER ERROR");
                            
              }
  ?>
  <!-- <div class="chat outgoing" id="chat_cont">
                                <div class="details">
                                    <p>G</p>
                                </div>
                                </div><div class="chat outgoing">
                                <div class="details">
                                    <p>G</p>
                                </div>
                                </div>
                                END
                                INCOMING
                               <div class="chat incoming">
                                <img src="../images.png" alt="">
                                <div class="details">
                                    <p>hi</p>
                                </div>
                                </div> -->
                               <!--  end -->
      </div>
      <div  class="typing-area" >
        <input type="text" class="incoming_id" id="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="hidden" name="alpha" id="alpha" value="<?php echo $_SESSION['ID'] ?>">
        <input type="text" name="message" class="input-field" id="msg" placeholder="Type a message here..." autocomplete="off">
        <button  onclick="sendi()" class="active"><i class="fab fa-telegram-plane"></i></button>
      </div>
       
       <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       <script type="text/javascript">
       
    function sendi()
 {
//alert("click");
   var masg= document.getElementById("msg").value;
  // alert(masg);
   var fr_uid=document.getElementById("incoming_id").value;
                                      
var per_id=document.getElementById("alpha").value;
if (masg!="") {
//var per_uid=per_id.substring(13,0);
// alert(per_uid);
 var data = {
                            cmd: 'register',
                            fr_uid:fr_uid,
                            per_uid:per_id,
                            msg:masg,
                            
                     };
                     $.ajax({
                                type: "POST",
                                url: "msg_send.php",
                                data: data,
                                cache: false,
                                success: function(result)
                                {
                                    
                                    if(result != 'error' )
                                    {
                                       var dp=localStorage.getItem("fr_dp");
                                         var mdiv=document.getElementById("ch_masg");
                                        // var time=today.getHours()+":"+today.getMinutes();

                                      $("#ch_masg").append('<div class="chat outgoing" id="chat_cont"><div class="details"><p>'+masg+'</p><h6>'+result+'</h6></div></div>');
                                      //mdiv.scrollTop=mdiv.scrollHeight;
                                    console.log(masg);
                                   localStorage.setItem("ldate",result); 
                                      document.querySelector('#msg').value='';
                                    //console.log(localStorage.getItem("ldate"));
                                       

                                    }
                                  
                                    else
                                    {
                                        swal(result, "SERVER ERROR", "error");
                                    }
                                                                     
                                },
                                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error);
                                }
                            });
  }
}

 $(document).ready(function(){
              setInterval(rec_msg,1000);
                });
      function rec_msg()
                   {
                   // alert("rec_msg funtion entered");
                    var fr_uid=document.getElementById("incoming_id").value;
var per_id=document.getElementById("alpha").value;
var dp=document.getElementById("fimg").src;

var ldate=localStorage.getItem("ldate");
 //alert(per_uid);
                  var data = {
                            cmd: 'register',
                            fr_uid:fr_uid,
                            per_uid:per_id,
                            ldate:ldate,
                            
                     };
                     $.ajax({
                                type: "POST",
                                url: "chat_rec.php",
                                data: data,
                                dataType: "json",
                                cache: false,
                                success: function(result)
                                {
                                    
                                  
                                       
                                       if(result[0].msg!='nothing')
                                       { 
                                       var len=result.length;
                                      for (var i = 0; i< len; i++) {

                                         // alert(result[i].msg);
                                          // var dp=localStorage.getItem("fr_dp");<li class="chat-left"><div class="chat-avatar"><img src="'+dp+'" alt="Retail Admin"><div class="chat-name">Russell</div> </div><div class="chat-text"><h6>'+result[i].msg+'</h6></div><div class="chat-hour"><span class="fa fa-check-circle"></span></div></li>
                                          var mdiv=document.getElementById("ch_masg");
                                           $("#ch_masg").append('<div class="chat incoming"><img src="'+dp+'" alt=""><div class="details"><p>'+result[i].msg+'</p><h6>'+result[i].time+'</h6></div></div>');
                                         
                                      mdiv.scrollTop=mdiv.scrollHeight;
                                      }
                                      
                                      
                                   
                                   }                                  
                                },
                                error: function (request, error) {
                                    
                                    alert(" Can't do because: " + error);
                                }
                            },1000);
                   
                   }

</script>
    </section>
  </div>
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

