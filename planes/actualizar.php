<?php
//seguridad de sesiones paginacion (prueba 1)
session_start();
error_reporting(0);
$varsesion= $_SESSION['usuario'];
if ($varsesion == null || $varsesion='' ) {
    header ("location:../index.html");
    die();
    exit;
}

?>
<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
  include("conexion.php");
  $cp = $_GET['cp'];
  $sql = "SELECT * FROM plan WHERE codigoPlan='$cp'";
  $query = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($query);
  ?>
  <title>Atory Solutions</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../assets/images/favicon.png">
  <style type="text/css">
    /* Chart.js */
    @keyframes chartjs-render-animation {
      from {
        opacity: .99
      }

      to {
        opacity: 1
      }
    }

    .chartjs-render-monitor {
      animation: chartjs-render-animation 1ms
    }

    .chartjs-size-monitor,
    .chartjs-size-monitor-expand,
    .chartjs-size-monitor-shrink {
      position: absolute;
      direction: ltr;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      overflow: hidden;
      pointer-events: none;
      visibility: hidden;
      z-index: -1
    }

    .chartjs-size-monitor-expand>div {
      position: absolute;
      width: 1000000px;
      height: 1000000px;
      left: 0;
      top: 0
    }

    .chartjs-size-monitor-shrink>div {
      position: absolute;
      width: 200%;
      height: 200%;
      left: 0;
      top: 0
    }
  </style>
</head>

<body>
  <?php
  include '../menu/menuint.php';
  ?>
  <!-- partial -->


  <div class="main-panel">
    <div class="content-wrapper"> <!-- ESTO ES LO QUE TENEMOS QUE MODIFICAR -->
      <div class="card-body">
      <h1 style="font-size: 32px;">GESTIÓN PLANES</h1>
        <h4 class="card-title">Actualizacion plan </h4>
        <p class="card-description"> Ingrese informacion de nuevo plan</p>
        <form action="../actplan.php" method="POST">
          <input type="hidden" name="cp" value="<?php echo $row['codigoPlan']  ?>">
          <p class="card-description"> Tipo de plan: </p>
          <select class="form-control" aria-label="Default select example" name="tplan" id="tplan" value="<?php echo $row['tipoPlan']  ?>">
            <option value="rural">Rural</option>
            <option value="urbano">Urbano</option>
            <option value="empresarial">Empresarial</option>
          </select>
          <p></p>
          <p class="card-description"> Velocidad plan: </p>
          <input type="text" class="form-control mb-3" name="vel" placeholder="Velocidad Plan" value="<?php echo $row['velocidad']  ?>">
          <p class="card-description"> Nombre plan: </p>
          <input type="text" class="form-control mb-3" name="nplan" placeholder="Nombre del Plan" value="<?php echo $row['nombrePlan']  ?>">
          <p class="card-description"> Precio plan: </p>
          <input type="text" class="form-control mb-3" name="pplan" placeholder="Ingrese Valor del Plan" value="<?php echo $row['precioPlan']  ?>">
          <p class="card-description"> Descripcion plan: </p>
          <input type="text" class="form-control mb-3" name="des" placeholder="Descripcion del plan" value="<?php echo $row['desPlan']  ?>">
          <p class="card-description"> Estado plan: </p>
          <select class="form-select" aria-label="Default select example" name="estadop" id="estadop" value="<?php echo $row['estadoPlan']  ?>">
            <option value="Activo">Activo </option>
            <option value="Archivado">Inactivo</option>
          </select>
<p></p>
          <input type="submit" class="btn btn-primary btn-lg" value="Actualizar" formmethod="post" formaction=../planes/actplan.php>
        </form>

        <div class="row">
          <div>
            <div>

            </div>
          </div>

        </div>




      </div>
      <!-- ESTO ES LO QUE PODEMOS MODIFICAR -->
      <!-- partial:partials/_footer.html -->

      <!-- partial -->
    </div>
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Atory Solution 2023</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <a href=" " target="_blank"></a> </span>
      </div>
    </footer>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->


  </div>

  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

  <div class="jvectormap-tip"></div>
</body>

</html>