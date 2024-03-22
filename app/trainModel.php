<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'includes/head.php';?>

  <script src="assets/vendor/jquery/jquery.min.js"></script>

  <script>



</script>

<style>
        h1 {
            color: Green;
        }
 
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



    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-bar-chart"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-binoculars"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-brightness-high"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->    

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