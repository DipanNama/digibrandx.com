<?php
$pageTitle = "";
$pageDescription = "";
$pageKeywords = "";
include 'components/head.php';
include 'components/header.php';
?>

  <section class="inner_sec" id="port-inner">
    <div class="container">
      <div class="row">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo $base_path; ?>index.php" data-link-key="home">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo $base_path; ?>blogs.php">Blogs</a></li>
            <li class="breadcrumb-item active" aria-current="page">Branding Is Not Just Design.</li>
          </ol>
        </nav>
        <div class="col-lg-12">
          <p style="text-align: left;">Real Impact.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="portfolio-details_sec">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="port-details-content">
            <p>At BS Digital Solutions, we believe in more than just design&mdash;we create real branding with real
              impact. As one
              of the <strong>best advertising agencies in Mumbai</strong>, we craft strategic, purpose-driven brands
              that resonate with your audience. Our approach blends creativity with strategy to deliver measurable
              results, helping your brand grow and thrive.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mt-4">
        <div class="port-details-content">
          <div class="blog-post">
            <p>Posted on &nbsp;&nbsp;</p>
            <ol>
              <li><a href="https://twitter.com/intent/tweet?url=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>"><i
                    class="fa-brands fa-twitter"></i></a></li>
              <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>"><i
                    class="fa-brands fa-facebook"></i></a></li>
              <li><a
                  href="https://www.linkedin.com/shareArticle?title=<?php echo urlencode($pageTitle); ?>&url=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>"><i
                    class="fa-brands fa-linkedin"></i></a></li>
              <li><a href="whatsapp://send?text=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>"><i
                    class="fa-brands fa-whatsapp"></i></a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'components/contact-form.php'; ?>
  <?php include 'components/instagram.php'; ?>
  <?php include 'components/footer-services.php'; ?>
  

<?php 
include 'components/footer.php'; 
include 'components/scripts.php'; 
?>
