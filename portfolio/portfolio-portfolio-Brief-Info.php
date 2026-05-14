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
            <li class="breadcrumb-item"><a href="<?php echo $base_path; ?>index.php" data-link-key="home">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo $base_path; ?>portfolio.php">Portfolio</a></li>
            <li class="breadcrumb-item"><a href="../portfolio/portfolio-portfolio.php">Portfolio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Brief Info</li>
          </ol>
        </nav>
        <div class="col-lg-12">
        </div>
      </div>
    </div>
  </section>
  <?php include '../components/contact-form.php'; ?>
  <?php include '../components/instagram.php'; ?>
  <?php include '../components/footer-services.php'; ?>
  

<?php 
include '../components/footer.php'; 
include '../components/scripts.php'; 
?>
