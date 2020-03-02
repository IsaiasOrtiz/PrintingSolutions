<?php 	
	include "../Layaut/Layaut.php";
	include "../Layaut/Nav.php";
	seccion1();
	nav();
?>
   <div class="modal-dialog text-center" >
   	<center>	
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="../Img/logo.png" th:src="@{../Img/logo.png}" width="	40%" />

                </div>
                 <br>	
                <form class="col-12" action="../controllers/log.php" method="POST">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="username"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contrasena" name="password"/>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                </form>
                <div class="col-12 forgot">
                   <!--" <a href="#">Recordar contrasena?</a>-->
                </div><br><br><br>
              <!--  <div th:if="${param.error}" class="alert alert-danger" role="alert">
		            Invalid username and password.
		        </div>-->
		        
        </div></center>
    </div>
<?php 
	seccion2();
?>