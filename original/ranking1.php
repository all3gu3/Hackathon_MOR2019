<?php
    include_once('conexion.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css"> 
        table {
          width: 100%;
        }

        th {
          height: 50px;
          text-align: left
        }
        td {
          height: 50px;
          vertical-align: bottom;
        }
        th, td {
          padding: 15px;
          text-align: left;
          border-bottom: 1px solid #ddd;
        }
        tr:hover {background-color: #f5f5f5;}
    </style>


    </style>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Ranking salarios altos de funcionarios públicos</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

    <?php include_once 'header.php'; ?>
    
    <!-- ##### Single Blog Area Start ##### -->
    <div class="single-blog-wrapper section-padding-0-100">


        <div class="container">
            <div class="row">
                <!-- ##### Post Content Area ##### -->
                <div class="col-12 col-lg-9">
                    <!-- Single Blog Area  -->
                    <div class="single-blog-area blog-style-2 mb-50">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag"></a>
                            <h4><a href="#" class="post-headline mb-0">Ranking salarios altos de funcionarios públicos</a></h4>
                            <div class="post-meta mb-50">
                                
                            </div>
                            <p>¿Realmente ganan lo que merecen?<br>
                                Compruebalo tu mismo con esta tabla</p>

                            
                        </div>
                    </div>

                    <!-- About Author -->
                    <div class="blog-post-author mt-100 d-flex">
                        <div class="author-thumbnail">
                        </div>
                        <div class="author-info">
                            <div class="line"></div>
                            <span class="author-role">Salarios más altos de funcionarios publicos en Cuernavaca</span>
                            <!--TABLA-->
                            
                                <table border="1px">
                                    <thead>
                                        <th bgcolor=#fff>N#</th>
                                        <th bgcolor=#fff>Nombre</th> 
                                        <th bgcolor=#fff>Apellido</th>
                                        <th bgcolor=#fff>Puesto</th>
                                        <th bgcolor=#fff>Monto bruto</th>
                                        <th bgcolor=#fff>Monto neto</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            include_once('conexion.php');
                                            $cont=0;
                                            $mysqli = new mysqli('localhost', 'root', NULL , 'portal');
                                            $mysqli->set_charset("utf8");

                                            $res = $mysqli->query("SELECT s.nombre, s.apellido_1, s.puesto, s.monto_bruto, s.monto_neto FROM salarios s WHERE s.monto_neto>17500 AND s.monto_bruto>0 ORDER BY s.monto_neto DESC ");
                                            
                                            while ($user = mysqli_fetch_array($res)){
                                                $cont+=1;
                                        ?>
                                        <tr>
                                            <td bgcolor=#fff><?php echo $cont?></td>    
                                            <td bgcolor=#fff><?php echo $user['nombre'] ?></td>
                                            <td bgcolor=#fff><?php echo $user['apellido_1'] ?></td>
                                            <td bgcolor=#fff><?php echo $user['puesto'] ?></td>
                                            <td bgcolor=#fff><?php echo $user['monto_bruto'] ?></td>
                                            <td bgcolor=#fff><?php echo $user['monto_neto'] ?></td>
                                        </tr>    
                                        <?php } ?>
                                    </tbody>
                                    
                                </table> 


                        </div>
                    </div>

                    <!-- Single Blog Area  -->
                    <div class="single-blog-area blog-style-2 mb-50">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag"></a>
                            <h4><a href="#" class="post-headline mb-0">¿Encontraste algo fuera de lugar?</a></h4>
                            <div class="post-meta mb-50">
                                
                            </div>
                            <p>!Denuncia!. Si denuncias, contribuirás a un país mejor. No hay nadie mejor que los ciudadanos para notar incongruencias...</p>
                            <center><button background-color="red" width="200" height="200" type="button"> <a href="https://consultapublicamx.inai.org.mx/vut-web/faces/view/denuncia/denunciaCiudadana.xhtml"> !Denuncia las incongruencias aquí!</a></button></center>

                            
                        </div>
                    </div>


                    
                


    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>