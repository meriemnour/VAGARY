<?php 
include "../../core/VolC.php";

 session_start(); 
 if (empty($_SESSION['id']))
 {
     echo "<script type='text/javascript'>";
echo "alert('Please Login First');
window.location.href='../login.html';";
echo "</script>";
    

 }
 $VolC=new VolC();

$listevols=$VolC->afficherlist_vol(); 
?>

<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Vagary</strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">V</strong><strong>A</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <div class="right-menu list-inline no-margin-bottom">    
          
            
            <!-- Tasks-->
         
            <!-- Tasks end-->
            
            <!-- Log out -->
            <div class="list-inline-item logout">                   <a id="logout" href="../Logout.php" class="nav-link"> <span class="d-none d-sm-inline">Logout </span><i class="icon-logout"></i></a></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/v2.png" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">VAGARY TRAVEL</h1>
            <p>By JD&Co</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
          <li ><a href="AfficherHotel.php"> <i class="icon-home"></i>List Hotel </a></li>
          <li class="active" ><a href="AfficherVol.php"> <i class="icon-padnote"></i>List Vol </a></li>
         
        
     
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        <section class="no-padding-top no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                    <input  id="myInput" class="form-control bg-light border-0 small" type="text" placeholder="Search.."> 
                    </div>
                 
                  </div>
             
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                           <div class="col mr-2">
                                           
                                       <p>Ajouter Vol </p>
                                        </div>
                                        <div class="col-auto">
                                             <a class="btn btn-primary"  href="AjouterVol.php"><i class="icon-home"> </i></a>
                            
                                        </div>
                    </div>
                   
                  </div>
                  
                </div>
              </div>
    
            </div>
          </div>
        </section>
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
    <table class="table">
  <thead>
    <tr>

      <th scope="col">#</th>
       <th scope="col">Depart</th>
        <th scope="col">Destination</th>
      <th scope="col">date_heur_disponible</th>
      
               <th scope="col">nbr places Disponible</th>
                <th scope="col">prix</th>
          <th scope="col">Delete</th>
              <th scope="col">Update</th>
               <th scope="col">List Users </th>
    </tr>
  </thead>
  <tbody  id="myTable">
    <?PHP

foreach($listevols as $row){

  ?>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
     <td><?php echo $row['depart'] ?></td>
       <td><?php echo $row['destination'] ?></td>
      <td><?php echo $row['date_heur_disponible'] ?></td>

      <td><?php echo $row['nbr_places'] ?></td>
       <td><?php echo $row['prix'] ?> dt</td>
      <td> 

<form method="POST" action="Deletevol.php">



                                  
  <button class="btn btn-primary" type="submit"><i class="fa fa-trash"></i> </button>
    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">       


  </form>

      </td>
    <td> <a class="btn btn-primary"  href="Modifiervol.php?id=<?PHP echo $row['id']; ?>"><i class="fa fa-edit"></i></a>
         </td>
       <td> <a class="btn btn-primary"  href="afficherlesreservation_vol.php?id=<?PHP echo $row['id']; ?>"><i class="fa fa-bars"></i></a>
         </td>
    </tr>
                  <?PHP
                  
}
?>
  
  </tbody>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> 
            </div>
          </div>
        </section>

        
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">2020 &copy; Design by <a href="index.html">JD&Co</a>.</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>