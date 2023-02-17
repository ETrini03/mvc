
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>lista</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
        <script>
        function eliminar(id)
        {
            if (confirm('¿Estas seguro de eliminar?')) {

                window.location = "ca.php?ideliminar=" + id;
            }

        }
        /*function modificar(id)
        {
            
            window.location = "ca.php?idmodificar=" + id;
        }*/
        </script>
        
        
    </head>
    <body id="page-top">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">lista de alumnos</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        
                        <li class="nav-item"><a class="nav-link"  href="#">cerrar sesion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">alumnos</h2>
                        <form action="ca.php" method="post" id="frminsertar" name="frminsertar">
                            <input type="text" id="idalum" name="idalum" placeholder="idalum" hidden value="<?php echo @$cat_mod[0][0]; ?>">
                            <input type="text" id="txtnom" name="txtnom" placeholder="nombre" required value="<?php echo @$cat_mod[0][1]; ?>">
                            <input type="text" id="txtap" name="txtap" placeholder="apellido materno" value="<?php echo @$cat_mod[0][02]; ?>" >
                            <input type="text" id="txtam" name="txtam" placeholder="apellido materno" value="<?php echo @$cat_mod[0][03]; ?>" >
                            <br><br>
                            <input type="submit" id="btnregistrar" name="btnregistrar" class="btn btn-primary btn-xl text-uppercase" value="Registrar">
                            <!-- <input type="submit" id="btnmodificar1" name="btnmodificar1" class="btn btn-primary btn-xl text-uppercase" value="Modificar"> -->
                            <br><br>
                
                        </form>


                        <form action="ca.php" method="post" id="frmbuscar" name="frmbuscar">
                            <label>nombre a busacar</label><br>
                        <input type="text" id="txtbuscar"  name="txtbuscar">
                        <input type="submit" id="btnbuscar" name="btnbuscar" value="buscar">
                        <br><br>
                        <table border="1" align= "center" style="background-color: #FFFFFF;">
                        <tr>
                            <td>id</td>
                            <td>nombre</td>
                            <td>appellidop</td>
                            <td>appellidom</td>
                         </tr>   
                            
                            <?php echo $tabla_result; ?>
                </table>
            </form>
     
                    </div>
                </div>
            </div>
       
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Your Website 2022</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>