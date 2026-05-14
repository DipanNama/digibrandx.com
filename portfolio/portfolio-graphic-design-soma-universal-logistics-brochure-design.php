<?php
$pageTitle = "";
$pageDescription = "";
$pageKeywords = "";
include '../components/head.php';
include '../components/header.php';
?>

  <section class="inner_sec" id="port-inner">
    <div class="container">
      <div class="row">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" data-link-key="home">Home</a></li>
            <li class="breadcrumb-item"><a href="portfolio.php">Portfolio</a></li>
            <li class="breadcrumb-item"><a href="../portfolio/portfolio-graphic-design.php">Graphic Design</a></li>
            <li class="breadcrumb-item active" aria-current="page">Soma Universal Logistics</li>
          </ol>
        </nav>
        <div class="col-lg-12">
        </div>
      </div>
    </div>
  </section>
  <section class="port-img-sec"><img class="img-fluid fullscreen" src="upload/media/978Soma.jpg" alt="" width="1920"
      height="5573" /></section>
  <?php include '../components/contact-form.php'; ?>
  <?php include '../components/instagram.php'; ?>
  <?php include '../components/footer-services.php'; ?>
  

<?php 
include '../components/footer.php'; 
include '../components/scripts.php'; 
?>
