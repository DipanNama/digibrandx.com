<section class="branding-section black-sec" style="background: #000 !important;">
  <div class="branding-content">
    <h2 class="section-title text-white" id="section-title-xyz"><?php echo $ctaTitle; ?></h2>
    <div class="cta-description">
      <?php echo $ctaDescription; ?>
    </div>
    <button onclick="document.getElementById('enquiry-form-container').scrollIntoView({behavior:'smooth'});"
      class="cta-button mt-4"><i class="fas fa-angle-right"></i>
      <?php echo isset($ctaButtonText) ? $ctaButtonText : "LET'S BUILD YOUR BRAND"; ?></button>
  </div>
</section>