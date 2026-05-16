<section class="testimonial_images_sec" style="padding: 50px 0; background: #000;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testi-heading text-center">
                    <div class="section-title" style="color:var(--accent-color);">Meeting with Clients</div>
                </div>
                <div class="swiper image_testi_area">
                    <div class="swiper-wrapper">
                        <?php
                        $imageDir = __DIR__ . '/../images/testimonials/images/';
                        $images = glob($imageDir . "*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}", GLOB_BRACE);
                        
                        if ($images) {
                            foreach ($images as $image) {
                                $fileName = basename($image);
                                ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo $base_path; ?>images/testimonials/images/<?php echo rawurlencode($fileName); ?>"
                                        alt="Testimonial" class="img-fluid" style="border-radius: 10px;">
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>