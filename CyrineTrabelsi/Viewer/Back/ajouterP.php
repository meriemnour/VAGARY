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
	<script> 

   function ok()
  {
alert("Votre produit a été ajouté avec succès!");
  }

      
  function surligne(myForm, erreur)
{
   if(erreur)
      myForm.style.backgroundColor = "#fba";
   else
      myForm.style.backgroundColor = "";
}

  function verifNB(myForm)
{
   var  NB= parseInt(myForm.value);
   if(isNaN(NB) || NB < 0 )
   {
      surligne(myForm, true);
      return false;
   }
   else
   {
      surligne(myForm, false);
      return true;
   }
}

   function verifReff(myForm)
{  
  if(myForm.value.length==0)
   {
      surligne(myForm, true);
      return false;
   }
   else
   {
      surligne(myForm, false);
      return true;
   }

}



      
function verifform(f)
{
  
   var NBOk = verifqteP(f.NB);
    var refOk = verifReff(f.ref);
   
   if(NBOk && refOk)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}
</script>
<?php 
//include "../config.php";
	

if (isset($_POST['valider']))
{
	//"INSERT INTO produit (nom_prod,prix_prod,img_prod,categorie_prod) values (:nom_prod, :prix_prod, :img_prod,categorie_prod) ";
 $link = mysqli_connect("localhost", "root", "", "vagary");
$nom_prod=$_POST['nom_prod']; 
$prix_prod=$_POST['prix_prod'];
$img_prod=$_POST['img_prod'];
$categorie_prod=$_POST['categorie_prod'];
echo($id);
if($link === false){ 
    die("ERROR: Could not connect. "  
                . mysqli_connect_error());
} 
  
$sql = "INSERT INTO produit(nom_prod,prix_prod,img_prod,categorie_prod)values('$nom_prod','$prix_prod','$img_prod','$categorie_prod')"; 
if(mysqli_query($link, $sql)){ 
    header('location:produit.php');
} else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($link); 
}  
mysqli_close($link); 
}

?>
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
            <!-- Navbar Header--><a href="index.php" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Vagary</strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">V</strong><strong>A</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <div class="right-menu list-inline no-margin-bottom">    
            <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>
            <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1">5</span></a>
              <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages"><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="img/avatar-3.jpg" alt="..." class="img-fluid">
                    <div class="status online"></div>
                  </div>
                  <div class="content">   <strong class="d-block">Nadia Halsey</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:30am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="img/avatar-2.jpg" alt="..." class="img-fluid">
                    <div class="status away"></div>
                  </div>
                  <div class="content">   <strong class="d-block">Peter Ramsy</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">7:40am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="img/avatar-1.jpg" alt="..." class="img-fluid">
                    <div class="status busy"></div>
                  </div>
                  <div class="content">   <strong class="d-block">Sam Kaheil</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">6:55am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="profile"><img src="img/avatar-5.jpg" alt="..." class="img-fluid">
                    <div class="status offline"></div>
                  </div>
                  <div class="content">   <strong class="d-block">Sara Wood</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">10:30pm</small></div></a><a href="#" class="dropdown-item text-center message"> <strong>See All Messages <i class="fa fa-angle-right"></i></strong></a></div>
            </div>
            <!-- Tasks-->
            <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link tasks-toggle"><i class="icon-new-file"></i><span class="badge dashbg-3">9</span></a>
              <div aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu tasks-list"><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 1</strong><span>40% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 2</strong><span>20% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 3</strong><span>70% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-2"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 4</strong><span>30% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-4"></div>
                  </div></a><a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Task 5</strong><span>65% complete</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                  </div></a><a href="#" class="dropdown-item text-center"> <strong>See All Tasks <i class="fa fa-angle-right"></i></strong></a>
              </div>
            </div>
            <!-- Tasks end-->
            
            <!-- Log out               -->
            <div class="list-inline-item logout">                   <a id="logout" href="login.html" class="nav-link"> <span class="d-none d-sm-inline">Logout </span><i class="icon-logout"></i></a></div>
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
          <li class="active"><a href="index.php"> <i class="icon-home"></i>Home </a></li>
          
          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-padnote"></i>Forms</a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="formInf.php">Add an influencer</a></li>
              <li><a href="formType.php">Add a theme</a></li>
              <li><a href="ajouterP.php">Add a product</a></li>
              <li><a href="AjouterHotel.php">Add a hotel</a></li>
              <li><a href="AjouterVol.php">Add a flight</a></li>
              <li><a href="ajouterP.php">Add a community</a></li>
            </ul>
          </li>

          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Tables</a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="influ.php">Influencers</a></li>
              <li><a href="themes.php">Themes</a></li>
              <li><a href="comm.html">Communities</a></li>
              <li><a href="AfficherHotel.php">Hotels</a></li>
              <li><a href="afficherlesreservation_hotel.php">Hotel reservations</a></li>
              <li><a href="AfficherVol.php">Flights</a></li>
              <li><a href="afficherlesreservation_vol.php">Flight reservations</a></li>
              <li><a href="products.html">Products</a></li>
              <li><a href="tableP.php">Orders</a></li>              
              <li><a href="TablePaiment.php">Payments</a></li>
              <li><a href="users.php">Users</a></li>
              <li><a href="carte.php">Fidelité</a></li>
            </ul>
          </li>
          <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Tables</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Product        </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Product Table</strong></div>
                  <div class="table-responsive"> 
                      <div class="card-header">
            <i class="fas fa-table"></i>
            Ajouter un nouveau produit
             </div>
<form id="myForm" method="POST" onsubmit="return verifform(this)" > 

				<label style="font-weight: bold"> Catégorie </label> 
<input type="text" class="form-control" name="categorie_prod" placeholder="Categorie du produit" value="" onblur="verifReff(this)" style="width:500px"> </br>
     
				</br>
<label style="font-weight: bold"> Nom du produit </label> 
<input type="text" class="form-control" name="nom_prod" placeholder="Nom du produit" value="" onblur="verifReff(this)" style="width:500px"> </br>
<label style="font-weight: bold"> Prix dt </label>
<input type="number"  onblur="verifNB(this)" class="form-control" name="prix_prod" value="" placeholder="Prix en Dt" style="width:200px"></br>
<label style="font-weight: bold">Ajouter une photo</label>
<input type="file" class="form-control" name="img_prod" > </br>
	
<input type="submit" value="valider" name="valider" action="produit.php"> 
<input type="reset" value="Reset"> 

</form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">2020 &copy; Design by <a href="index.php">JD&Co</a>.</p>
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
    <script src="js/front.js"></script>
  </body>
</html>