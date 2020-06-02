<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Agregar Paciente</title>
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="../../css/agency.min.css" rel="stylesheet">
</head>
<body>
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading text-uppercase" style="color: #ffc107">Agregar Paciente</div>
        </div>
      </div>
    </header>
    <section>
        <?php         require_once "../../models/Paciente.php";
        ?>
        <div class="container">
            <div class="col-lg-12">
                <form action="<?php echo Patient::baseurl() ?>/app/paciente/guardar_paciente.php" method="POST">
                    <center>
                    <div class="form-group">
                        <h2 class="section-heading text-uppercase" for="firstname">Nombre</h2>
                        <input type="text" style="width: 500px" name="firstname" value="" class="form-control text-center" id="firstname" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <h2 class="section-heading text-uppercase" for="lastname">Apellido</h2>
                        <input type="text" style="width: 500px" name="lastname" value="" class="form-control text-center" id="lastname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <h2 class="section-heading text-uppercase" for="fecha_de_nacimiento">Fecha de nacimiento</h2>
                        <input type="date" style="width: 500px" name="fecha_de_nacimiento" value="" class="form-control text-center" id="fecha_de_nacimiento" placeholder="YYYY-MM-DD">
                    </div>
                    <div class="form-group">
                        <h2 class="section-heading text-uppercase" for="correo_electronico">Correo Electronico</h2>
                        <input type="text" style="width: 500px" name="correo_electronico" value="" class="form-control text-center" id="correo_electronico" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <h2 class="section-heading text-uppercase" for="telefono">Telefono</h2>
                        <input type="text" style="width: 500px" name="telefono" value="" class="form-control text-center" id="telefono" placeholder="Cellphone">
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Save user" />
                    </center>
                </form>
            </div>
        </div>
    </section>
</body>
</html>