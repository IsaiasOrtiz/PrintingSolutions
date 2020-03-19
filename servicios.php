<?php 	
$id=$_REQUEST["id"];
echo $id;
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Printing Solutions</title>
  <link rel='shortcut icon' href='Img/logo1.png'/>
  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="views/login.php">Printing Solutions</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Mas</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Acerca de nosotros</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Contacto</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
          Servicios
        </a>
        <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
        <?php 
             require_once "Models/conection.php";
             $sql="SELECT * FROM servicio;";
              $consulta=$pdo->prepare($sql);
             $consulta->execute();
              while ($services=$consulta->fetch()) {
       echo "<a class='dropdown-item' href='servicios.php?id=".$services['idservicio']."'>".$services['nombre']."</a>";
                   }
                   ?>
      </div>
      </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>



 <?php 





              require_once "Models/conection.php";
              $sql="SELECT * FROM servicios WHERE idservicio=".$_REQUEST['id'].";";
              $consulta=$pdo->prepare($sql);
              $consulta->execute();
              $i=1;
              while ($services=$consulta->fetch()) {
                if($i%2==0){
                    echo "<section class='page-section bg-primary text-white mb-0' id='about'>
    <div class='container'>

      <!-- About Section Heading -->
     
      <!-- Icon Divider -->
      <div class='divider-custom divider-light'>
        <div class='divider-custom-line'></div>
        <div class='divider-custom-icon'>
          <i class='fas fa-star'></i>
        </div>
        <div class='divider-custom-line'></div>
      </div>

      <!-- About Section Content -->
      <div class='row'>
        <div class='col-lg-4 ml-auto'>
           <img class='img-fluid' src='".$services['imagen']."' alt=''>
        </div>
        <div class='col-lg-4 mr-auto'>
        <center>
          <p class='lead'>";
             echo "<b>Nombre:</b>".$services['nombre']."<br>";
              echo "<b>Descripcion</b>:".$services['descripcion']."<br>";
               echo "<b>Precio:</b> $".$services['precio']."<br>";
          echo "</p></center>
        </div>
      </div>

      
     

    </div>
  </section>";
                }else{

echo "<section class='page-section bg-light text-dark mb-0' id='about'>
    <div class='container'>

      <!-- About Section Heading -->
     
      <!-- Icon Divider -->
      <div class='divider-custom'>
        <div class='divider-custom-line'></div>
        <div class='divider-custom-icon'>
          <i class='fas fa-star'></i>
        </div>
        <div class='divider-custom-line'></div>
      </div>

      <!-- About Section Content -->
      <div class='row'>
        <div class='col-lg-4 ml-auto'>
           <img class='img-fluid' src='".$services['imagen']."' alt=''>
        </div>
        <div class='col-lg-4 mr-auto'>
        <center>
          <p class='lead'>";
             echo "<b>Nombre:</b>".$services['nombre']."<br>";
              echo "<b>Descripcion</b>:".$services['descripcion']."<br>";
               echo "<b>Precio:</b> $".$services['precio']."<br>";
          echo "</p></center>
        </div>
      </div>

      
     

    </div>
  </section>";
                }
$i++;
}
  ?>

 

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Ubicacion</h4>
          <p class="lead mb-0">Entre 8ª y 10ª <br> Norte San Salvador Local 2 <br>Sobre la Alameda Juan Pablo II<br> (15.20 km)
          San Salvador
          </p>
          <a class="btn btn-outline-light btn-social mx-1" href="https://wego.here.com/directions/mix//Printing-Solutions,-Alameda-Juan-Pablo-II,-San-Salvador:e-eyJuYW1lIjoiUHJpbnRpbmcgU29sdXRpb25zIiwiYWRkcmVzcyI6IkVudHJlIDhcdTAwYWEgeSAxMFx1MDBhYSBBdi4gTm9ydGUgU2FuIFNhbHZhZG9yIExvY2FsIDIgU29icmUgbGEgQWxhbWVkYSBKdWFuIFBhYmxvIElJLCBTYW4gU2FsdmFkb3IiLCJsYXRpdHVkZSI6MTMuNzAzNTgsImxvbmdpdHVkZSI6LTg5LjIwMDI1LCJwcm92aWRlck5hbWUiOiJmYWNlYm9vayIsInByb3ZpZGVySWQiOjIzNzgzMjk3NzkxMDQxNTV9?map=13.70358,-89.20025,15,normal&fb_locale=es_LA">
            <i class="fas fa-map-marker-alt"></i>
          </a>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Redes sociales</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/Printing-Solutions-2378329779104155/">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/solutions.printing/?hl=es-la">
            <i class="fab fa-fw fa-instagram"></i>
          </a>
          
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">Comunicate con nosotros.</h4>
          <p class="lead mb-0">
            7589-4485 
             <a class="btn btn-outline-light btn-social mx-1" href="https://wa.me/50375894485">
            <i class="fas fa-phone-alt"></i>
          </a>
            <br><br>7104-0423<a class="btn btn-outline-light btn-social mx-1" href="https://wa.me/50371040423">
            <i class="fas fa-phone-alt"></i>
          </a></p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; PrintingSolutions 2020</small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>
  
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>

</body>

</html>
