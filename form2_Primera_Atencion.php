<?php
     error_reporting(E_ALL ^ E_NOTICE);
     session_start();
     if(!isset($_SESSION['Identificacion'])){
          header("Location:index.html");
     }
    
?>
<!DOCTYPE html>
<html lang="es">
<head>

    <title>Primera Atencion</title>
    <link rel="icon" href="images/logo_SAME.png">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/estilo1.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="icon" href="images/logo_SAME.png">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-style.css">
   
</head>
<body class="form2">
    <!-- PRE LOADER -->
         <section class="preloader">
            <div class="spinnergrow text-danger" role="status">      
                      <span class="sr-only">Loading...</span>
            </div>
          </section>
              <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Bienvenido </p>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                        <!-- <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>-->
                        <!-- <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>-->
                        <span class="user-icon"><i class="fa fa-user-o"></i> <?php echo $_SESSION['Identificacion'] ?> </span>
                    </div>
               </div>
          </div>
     </header>
       <!--NAV-->
          
          <!-- MENU -->
          <nav class="navbar navbar-default navbar-static-top" role="navigation">
               <div class="container-fluid">
  
                 <div class="navbar-header">
                      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                           <span class="icon icon-bar"></span>
                           <span class="icon icon-bar"></span>
                           <span class="icon icon-bar"></span>
                           <span class="icon icon-bar"></span>
                           <span class="icon icon-bar"></span>
                      </button>
  
                      <!-- lOGO TEXT HERE -->
                      <a href="index.html" class="navbar-brand"><i class="fa fa-h-square"></i>ealthJuy</a>
                 </div>
  
                 <!-- MENU LINKS -->
                 <div class="collapse navbar-collapse">
                      <ul class="nav navbar-nav navbar-right">  
                           <li><a  href="same.php"class="smoothScroll" >Inicio</a></li>
                           <li><a  href="cambiarConstraseña.html" class="smoothScroll">Cambiar contraseña</a></li>
                           <li><a  href="cerrar_session.php" class="smoothScroll">Cerrar Sesión</a></li>
                      </ul>
                 </div>
  
            </div>
  
        </nav>
       <section id="appointment" data-stellar-background-ratio="3">
        <div class="container">
             <div class="row">
           

                
                    <div class="news-info">
                         <div class="news-thumb  col-md-6 col-sm-6" id="formulario">

                              <!-- CONTACT FORM HERE -->
                              <form id="appointment-form" role="form" action="registrar_form2.php" method="post">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Formulario Primera Atencion</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <?php  if(isset($_GET['w2'])){  
                                        ?>
                                        <input type="hidden" class="form-control" id="CUIL" name="CUIL" minlength="7"  maxlength="9" min="1" value="<?php echo $_GET['w2']; ?>" readonly required="true">
                                        <?php } ?>
                              
                              <div class="col-md-12 col-sm 12">
                                        <label for="name"class="control-label">Nombre del paramedico/os</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese nombre" required="true">
                                   </div>
                                        
                                   <div class="col-md-12 col-sm-12">
                                        <label for="text"class="control-label">Unidad de Traslado</label>
                                        <input type="text" class="form-control" id="unidad-traslado" name="unidad" placeholder="Ingrese unidad" required="true">
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <label for="comentario">DESCRIPCION de la Atencion del paciente</label>
                                        <textarea name="comentario" id="comentario" name="comentario" placeholder="Ingrese una breve descripcion" cols="50" rows="10"></textarea>
                                   </div>
                                   <div class="col-md-8 col-sm-8">
                                        Fecha Atencion:
                                        <input type="datetime" name="fecha" class="form-control" value="<?php ini_set("date.timezone", "America/Argentina/Buenos_Aires");  echo date('Y-m-d',time());?>"readonly onmousedown="return false;">
                                   </div>
                                   <!-- 
                                        <div class="col-md-8 col-sm-8">
                                             <label for="select">Seleccion tipo de gravedad del paciente</label>
                                             <select class="form-control" name="tpo_grav">
                                                  <option>Azul</option>
                                                  <option>Verde</option>
                                             </select>
                                        </div>
                                        -->

                              </div>
               
                                   
                                   <div class="row col-md-12">
                                        <div class="col-md-6 col-sm-6">
                                             <button type="submit" class="form-control" id="cf-submit" name="Enviar" >Enviar formulario</button>
                                        </div> 
                                        <div class="col-md-6 col-sm-6">
                                             <button type="reset" class="form-control" id="cf-cancelar" name="Cancelar">Cancelar</button>
                                        </div> 
                                   </div> 
                                   <div class="row col-md-6">
                                        <div class="col-md-6 col-sm-6">
                                             <button type="button" onclick="window.location.href='form1_Antec.php';"class="form-control" id="Volver" name="Volver">Volver</button>
                                        </div> 
                                   </div> 
                              </form>
                         </div>
                    </div>
                      
                  </div>

             </div>
        </div>
   </section>
     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
        <div class="container">
             <div class="row">
                  <div class="col-md-12 col-sm-12 border-top">
                       <div class="col-md-6 col-sm-6">
                            <a href="same.php" class="icon-foot"><i class="fa fa-h-square"></i>ealthJuy</a>
                       </div> 
                       <div class="col-md-6 col-sm-6 ">
                            <div class="copyright-text"> 
                                 <p>Copyright &copy; 2021 Todos los derechos reservados| Design: Grupo6</p>
                            </div>
                       </div>
                  </div>
                  
             </div>
        </div>
   </footer>

     <!-- SCRIPTS -->
         <script src="js/jquery.js"></script>
         <script src="js/bootstrap.min.js"></script>
         <script src="js/jquery.sticky.js"></script>
         <script src="js/jquery.stellar.min.js"></script>
         <script src="js/jquery.magnific-popup.min.js"></script>
         <script src="js/magnific-popup-options.js"></script>
         <script src="js/wow.min.js"></script>
         <script src="js/smoothscroll.js"></script>
         <script src="js/owl.carousel.min.js"></script>
         <script src="js/custom.js"></script>
         <script src="js/main.js"></script>
         <script src="js/otro.js"></script>
         
</body>
</html>