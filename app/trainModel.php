<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'includes/head.php';?>

  <script src="assets/vendor/jquery/jquery.min.js"></script>

  <script>



</script>

<style>

        div.scroll {
            margin: 4px, 4px;
            padding: 4px;
            background-color: #747774;
            color:#efefef;
            width: 500px;
            height: 510px;
            overflow-x: hidden;
            overflow-y: auto;
            text-align: justify;
        }
    </style>

</head>

<body>

  <?php include 'includes/topbar.php';?>
  <?php include 'includes/header.php';?>

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>About</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->




    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container">
          <div class="row">
                <div class="col-sm">
                    Entrenando el modelo, por favor espere...
                </div>
                <div class="col-sm">
                      <div class="scroll">
                        <?php
                            
                                $model = $_POST['model'];
                                echo $model;
                                $cmd = "ping 127.0.0.1";
                                $cmd = "/var/www/html/includes/lanzar2.sh";
                                $descriptorspec = array(
                                0 => array("pipe", "r"),   // stdin is a pipe that the child will read from
                                1 => array("pipe", "w"),   // stdout is a pipe that the child will write to
                                2 => array("pipe", "w")    // stderr is a pipe that the child will write to
                                );
                                flush();
                                $process = proc_open($cmd, $descriptorspec, $pipes, realpath('./'), array());
                                echo "<pre>";
                                if (is_resource($process)) {
                                    while ($s = fgets($pipes[1])) {
                                        print $s;
                                        flush();
                                    }
                                }
                                echo "</pre>";
                        ?>
                      </div><!-- End #scroll -->
                  </div>
                <div class="col-sm">
                      One of three columns
                </div>                
            </div>
        </div>            
    </section>
  </main><!-- End #main -->
  <?php include 'includes/footer.php';?>


</body>

</html>